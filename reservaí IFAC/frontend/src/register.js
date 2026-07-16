/* =========================================================
   Reservaí - IFAC | cadastro.js
   Lógica exclusiva para a tela de Cadastro.
   ========================================================= */

const ENDPOINT_CADASTRO = 'cadastro.php';

/* ---------------------------------------------------------
   Utilidades
   --------------------------------------------------------- */

function exibirMensagem(elemento, texto, tipo) {
  elemento.textContent = texto;
  elemento.classList.remove('erro', 'sucesso', 'show');
  elemento.classList.add(tipo, 'show');
}

function limparMensagem(elemento) {
  elemento.classList.remove('show', 'erro', 'sucesso');
  elemento.textContent = '';
}

function marcarErroCampo(input, spanErro, texto) {
  input.classList.add('input-erro');
  if (spanErro) spanErro.textContent = texto;
}

function limparErroCampo(input, spanErro) {
  input.classList.remove('input-erro');
  if (spanErro) spanErro.textContent = '';
}

function validarEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function alternarVisibilidadeSenha(botao, input) {
  botao.addEventListener('click', () => {
    // Busca a imagem do olho de forma específica dentro do botão de cadastro
    const iconeOlho = document.getElementById('icone-olho-cadastro');
    
    const visivel = input.type === 'text';
    input.type = visivel ? 'password' : 'text';
    botao.setAttribute('aria-label', visivel ? 'Mostrar senha' : 'Ocultar senha');
    
    // Troca dinamicamente o arquivo PNG de acordo com o estado do campo
    if (input.type === 'password') {
      iconeOlho.src = '../icons/Ocultar Senha.ico';
    } else {
      iconeOlho.src = '../icons/Mostrar Senha.ico';
    }
  });
}

/* ---------------------------------------------------------
   Lógica de Cadastro
   --------------------------------------------------------- */

function inicializarCadastro() {
  const form = document.getElementById('form-cadastro');
  if (!form) return;

  const nome = document.getElementById('nome');
  const email = document.getElementById('email');
  const matricula = document.getElementById('matricula');
  const senha = document.getElementById('senha');
  const nascimento = document.getElementById('nascimento');
  const msgStatus = document.getElementById('msg-status');
  const btnSubmit = document.getElementById('btn-cadastrar');

  const erroNome = document.getElementById('erro-nome');
  const erroEmail = document.getElementById('erro-email');
  const erroMatricula = document.getElementById('erro-matricula');
  const erroSenha = document.getElementById('erro-senha');

  const toggleSenha = document.getElementById('toggle-senha');
  if (toggleSenha) alternarVisibilidadeSenha(toggleSenha, senha);

  form.addEventListener('submit', async (evento) => {
    evento.preventDefault();
    limparMensagem(msgStatus);

    let valido = true;

    limparErroCampo(nome, erroNome);
    limparErroCampo(email, erroEmail);
    limparErroCampo(matricula, erroMatricula);
    limparErroCampo(senha, erroSenha);

    if (nome.value.trim().length < 3) {
      marcarErroCampo(nome, erroNome, 'Informe seu nome completo.');
      valido = false;
    }

    if (!validarEmail(email.value.trim())) {
      marcarErroCampo(email, erroEmail, 'Informe um e-mail válido.');
      valido = false;
    }

    if (matricula.value.trim().length < 3) {
      marcarErroCampo(matricula, erroMatricula, 'Informe sua matrícula.');
      valido = false;
    }

    if (senha.value.length < 6) {
      marcarErroCampo(senha, erroSenha, 'A senha deve ter pelo menos 6 caracteres.');
      valido = false;
    }

    const generoSelecionado = form.querySelector('input[name="genero"]:checked');

    if (!valido) return;

    const dados = new FormData();
    dados.append('nome', nome.value.trim());
    dados.append('email', email.value.trim());
    dados.append('matricula', matricula.value.trim());
    dados.append('senha', senha.value);
    dados.append('nascimento', nascimento ? nascimento.value : '');
    dados.append('genero', generoSelecionado ? generoSelecionado.value : '');

    btnSubmit.disabled = true;
    btnSubmit.textContent = 'CRIANDO CONTA...';

    try {
      const resposta = await fetch(ENDPOINT_CADASTRO, {
        method: 'POST',
        body: dados,
      });

      const resultado = await resposta.json();

      if (resultado.sucesso) {
        exibirMensagem(
          msgStatus,
          resultado.mensagem || 'Conta criada com sucesso! Redirecionando para o login...',
          'sucesso'
        );

        setTimeout(() => {
          window.location.href = 'login.html';
        }, 1500);
      } else {
        exibirMensagem(msgStatus, resultado.mensagem || 'Não foi possível criar a conta.', 'erro');
        btnSubmit.disabled = false;
        btnSubmit.textContent = 'CRIAR CONTA';
      }
    } catch (erro) {
      exibirMensagem(
        msgStatus,
        'Não foi possível conectar ao servidor. Tente novamente.',
        'erro'
      );
      btnSubmit.disabled = false;
      btnSubmit.textContent = 'CRIAR CONTA';
    }
  });
}

// Inicializa quando a página carregar
document.addEventListener('DOMContentLoaded', () => {
  inicializarCadastro();
});