/* =========================================================
   Reservaí - IFAC | forgot-password.js
   Lógica exclusiva para a tela "Recuperar Conta" (passo 1:
   informar o e-mail para receber o código de verificação).
   ========================================================= */

const ENDPOINT_ESQUECI_SENHA = 'esqueci-senha.php';

/* ---------------------------------------------------------
   Utilidades (mesmo padrão usado em login.js / register.js)
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

/* ---------------------------------------------------------
   Lógica de "Esqueci minha senha"
   --------------------------------------------------------- */

function inicializarEsqueciSenha() {
  const form = document.getElementById('form-esqueci-senha');
  if (!form) return;

  const email = document.getElementById('recuperar-email');
  const msgStatus = document.getElementById('msg-status');
  const btnSubmit = document.getElementById('btn-enviar-codigo');
  const erroEmail = document.getElementById('erro-recuperar-email');

  form.addEventListener('submit', async (evento) => {
    evento.preventDefault();
    limparMensagem(msgStatus);
    limparErroCampo(email, erroEmail);

    const emailValor = email.value.trim();

    if (!validarEmail(emailValor)) {
      marcarErroCampo(email, erroEmail, 'Informe um e-mail válido.');
      return;
    }

    const dados = new FormData();
    dados.append('email', emailValor);

    btnSubmit.disabled = true;
    btnSubmit.textContent = 'ENVIANDO...';

    try {
      const resposta = await fetch(ENDPOINT_ESQUECI_SENHA, {
        method: 'POST',
        body: dados,
      });

      const resultado = await resposta.json();

      if (resultado.sucesso) {
        exibirMensagem(
          msgStatus,
          resultado.mensagem || 'Código enviado! Verifique seu e-mail.',
          'sucesso'
        );

        setTimeout(() => {
          window.location.href = 'verify-code.html?email=' + encodeURIComponent(emailValor);
        }, 800);
      } else {
        exibirMensagem(msgStatus, resultado.mensagem || 'Não foi possível enviar o código.', 'erro');
        btnSubmit.disabled = false;
        btnSubmit.textContent = 'ENVIAR CODIGO';
      }
    } catch (erro) {
      exibirMensagem(
        msgStatus,
        'Não foi possível conectar ao servidor. Tente novamente.',
        'erro'
      );
      btnSubmit.disabled = false;
      btnSubmit.textContent = 'ENVIAR CODIGO';
    }
  });
}

// Inicializa quando a página carregar
document.addEventListener('DOMContentLoaded', () => {
  inicializarEsqueciSenha();
});
