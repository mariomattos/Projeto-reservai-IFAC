/* =========================================================
   Reservaí - IFAC | verify-code.js
   Lógica exclusiva para a tela "Recuperar Conta" (passo 2:
   informar o código de 6 dígitos recebido por e-mail).
   ========================================================= */

const ENDPOINT_VERIFICAR_CODIGO = 'verificar-codigo.php';
const ENDPOINT_REENVIAR_CODIGO = 'esqueci-senha.php';
const TEMPO_REENVIO_SEGUNDOS = 30;

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

/* ---------------------------------------------------------
   Caixas do código (6 dígitos)
   --------------------------------------------------------- */

function obterEmailDaUrl() {
  const params = new URLSearchParams(window.location.search);
  return params.get('email') || '';
}

function configurarCaixasCodigo(caixas, spanErro) {
  caixas.forEach((caixa, indice) => {
    caixa.addEventListener('input', () => {
      caixa.value = caixa.value.replace(/[^0-9]/g, '').slice(0, 1);
      caixa.classList.remove('input-erro');
      if (spanErro) spanErro.textContent = '';

      if (caixa.value && indice < caixas.length - 1) {
        caixas[indice + 1].focus();
      }
    });

    caixa.addEventListener('keydown', (evento) => {
      if (evento.key === 'Backspace' && !caixa.value && indice > 0) {
        caixas[indice - 1].focus();
      }
      if (evento.key === 'ArrowLeft' && indice > 0) {
        caixas[indice - 1].focus();
      }
      if (evento.key === 'ArrowRight' && indice < caixas.length - 1) {
        caixas[indice + 1].focus();
      }
    });

    caixa.addEventListener('paste', (evento) => {
      evento.preventDefault();
      const colado = (evento.clipboardData || window.clipboardData)
        .getData('text')
        .replace(/[^0-9]/g, '')
        .slice(0, caixas.length);

      colado.split('').forEach((digito, i) => {
        if (caixas[i]) caixas[i].value = digito;
      });

      const proximo = caixas[Math.min(colado.length, caixas.length - 1)];
      if (proximo) proximo.focus();
    });
  });
}

function obterCodigo(caixas) {
  return caixas.map((caixa) => caixa.value).join('');
}

function limparCaixasCodigo(caixas) {
  caixas.forEach((caixa) => caixa.value = '');
  caixas[0].focus();
}

/* ---------------------------------------------------------
   Reenvio do código
   --------------------------------------------------------- */

function configurarReenvio(botao, email, msgStatus) {
  let segundosRestantes = 0;
  let intervalo = null;

  const textoOriginal = botao.textContent;

  function iniciarContagem() {
    segundosRestantes = TEMPO_REENVIO_SEGUNDOS;
    botao.disabled = true;
    botao.textContent = `Reenviar (${segundosRestantes}s)`;

    intervalo = setInterval(() => {
      segundosRestantes -= 1;
      if (segundosRestantes <= 0) {
        clearInterval(intervalo);
        botao.disabled = false;
        botao.textContent = textoOriginal;
      } else {
        botao.textContent = `Reenviar (${segundosRestantes}s)`;
      }
    }, 1000);
  }

  botao.addEventListener('click', async () => {
    if (botao.disabled) return;

    if (!email) {
      exibirMensagem(msgStatus, 'E-mail não encontrado. Volte e informe seu e-mail novamente.', 'erro');
      return;
    }

    const dados = new FormData();
    dados.append('email', email);

    try {
      const resposta = await fetch(ENDPOINT_REENVIAR_CODIGO, {
        method: 'POST',
        body: dados,
      });
      const resultado = await resposta.json();

      if (resultado.sucesso) {
        exibirMensagem(msgStatus, resultado.mensagem || 'Código reenviado! Verifique seu e-mail.', 'sucesso');
        iniciarContagem();
      } else {
        exibirMensagem(msgStatus, resultado.mensagem || 'Não foi possível reenviar o código.', 'erro');
      }
    } catch (erro) {
      exibirMensagem(msgStatus, 'Não foi possível conectar ao servidor. Tente novamente.', 'erro');
    }
  });
}

/* ---------------------------------------------------------
   Lógica de verificação do código
   --------------------------------------------------------- */

function inicializarVerificacaoCodigo() {
  const form = document.getElementById('form-verificar-codigo');
  if (!form) return;

  const msgStatus = document.getElementById('msg-status');
  const btnSubmit = document.getElementById('btn-recuperar');
  const btnReenviar = document.getElementById('btn-reenviar');
  const erroCodigo = document.getElementById('erro-codigo');
  const caixas = Array.from(document.querySelectorAll('.codigo-input'));

  const email = obterEmailDaUrl();

  configurarCaixasCodigo(caixas, erroCodigo);
  configurarReenvio(btnReenviar, email, msgStatus);

  form.addEventListener('submit', async (evento) => {
    evento.preventDefault();
    limparMensagem(msgStatus);
    erroCodigo.textContent = '';
    caixas.forEach((caixa) => caixa.classList.remove('input-erro'));

    const codigo = obterCodigo(caixas);

    if (codigo.length !== caixas.length) {
      erroCodigo.textContent = 'Informe todos os dígitos do código.';
      caixas.forEach((caixa) => { if (!caixa.value) caixa.classList.add('input-erro'); });
      return;
    }

    const dados = new FormData();
    dados.append('email', email);
    dados.append('codigo', codigo);

    btnSubmit.disabled = true;
    btnSubmit.textContent = 'VERIFICANDO...';

    try {
      const resposta = await fetch(ENDPOINT_VERIFICAR_CODIGO, {
        method: 'POST',
        body: dados,
      });

      const resultado = await resposta.json();

      if (resultado.sucesso) {
        exibirMensagem(msgStatus, resultado.mensagem || 'Senha alterada com sucesso!', 'sucesso');

        setTimeout(() => {
          window.location.href = 'login.html?recuperacao=sucesso';
        }, 800);
      } else {
        exibirMensagem(msgStatus, resultado.mensagem || 'Código inválido ou expirado.', 'erro');
        caixas.forEach((caixa) => caixa.classList.add('input-erro'));
        btnSubmit.disabled = false;
        btnSubmit.textContent = 'RECUPERAR';
      }
    } catch (erro) {
      exibirMensagem(
        msgStatus,
        'Não foi possível conectar ao servidor. Tente novamente.',
        'erro'
      );
      btnSubmit.disabled = false;
      btnSubmit.textContent = 'RECUPERAR';
    }
  });
}

// Inicializa quando a página carregar
document.addEventListener('DOMContentLoaded', () => {
  inicializarVerificacaoCodigo();
});
