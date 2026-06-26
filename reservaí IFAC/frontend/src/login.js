/* =========================================================
   Reservaí - IFAC | login.js
   Lógica exclusiva para a tela de Login.
   ========================================================= */

const ENDPOINT_LOGIN = 'login.php';

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
    // Busca a imagem do olho de forma específica dentro do botão de login
    const iconeOlho = document.getElementById('icone-olho-login');
    
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
   Lógica de Login
   --------------------------------------------------------- */

function inicializarLogin() {
  const form = document.getElementById('form-login');
  if (!form) return;

  const email = document.getElementById('login-email');
  const senha = document.getElementById('login-senha');
  const lembrar = document.getElementById('lembrar-me');
  const msgStatus = document.getElementById('msg-status');
  const btnSubmit = document.getElementById('btn-login');

  const erroEmail = document.getElementById('erro-login-email');
  const erroSenha = document.getElementById('erro-login-senha');

  const toggleSenha = document.getElementById('toggle-login-senha');
  if (toggleSenha) alternarVisibilidadeSenha(toggleSenha, senha);

  // Mostra mensagem de sucesso se o usuário acabou de se cadastrar
  const params = new URLSearchParams(window.location.search);
  if (params.get('cadastro') === 'sucesso') {
    exibirMensagem(msgStatus, 'Conta criada com sucesso! Faça login para continuar.', 'sucesso');
  }

  form.addEventListener('submit', async (evento) => {
    evento.preventDefault();
    limparMensagem(msgStatus);

    let valido = true;

    limparErroCampo(email, erroEmail);
    limparErroCampo(senha, erroSenha);

    if (!validarEmail(email.value.trim())) {
      marcarErroCampo(email, erroEmail, 'Informe um e-mail válido.');
      valido = false;
    }

    if (senha.value.length === 0) {
      marcarErroCampo(senha, erroSenha, 'Informe sua senha.');
      valido = false;
    }

    if (!valido) return;

    const dados = new FormData();
    dados.append('email', email.value.trim());
    dados.append('senha', senha.value);
    dados.append('lembrar', lembrar && lembrar.checked ? '1' : '0');

    btnSubmit.disabled = true;
    btnSubmit.textContent = 'ENTRANDO...';

    try {
      const resposta = await fetch(ENDPOINT_LOGIN, {
        method: 'POST',
        body: dados,
      });

      const resultado = await resposta.json();

      if (resultado.sucesso) {
        exibirMensagem(msgStatus, resultado.mensagem || 'Login realizado com sucesso!', 'sucesso');

        setTimeout(() => {
          window.location.href = resultado.redirecionarPara || 'perfil.html';
        }, 800);
      } else {
        exibirMensagem(msgStatus, resultado.mensagem || 'E-mail ou senha incorretos.', 'erro');
        btnSubmit.disabled = false;
        btnSubmit.textContent = 'FAZER LOGIN';
      }
    } catch (erro) {
      exibirMensagem(
        msgStatus,
        'Não foi possível conectar ao servidor. Tente novamente.',
        'erro'
      );
      btnSubmit.disabled = false;
      btnSubmit.textContent = 'FAZER LOGIN';
    }
  });
}

// Inicializa quando a página carregar
document.addEventListener('DOMContentLoaded', () => {
  inicializarLogin();
});