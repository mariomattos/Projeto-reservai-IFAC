# Reservaí - IFAC | Front-end (Login + Cadastro)

## Arquivos
- `login.html` — Tela de login
- `cadastro.html` — Tela de cadastro
- `style.css` — Estilos das duas páginas (fiel ao Figma)
- `auth.js` — Validação dos formulários e envio dos dados via `fetch`

## O que já funciona
- Validação no navegador (campos obrigatórios, formato de e-mail, tamanho mínimo de senha)
- Mostrar/ocultar senha
- Envio dos dados via `fetch()` para os endpoints PHP
- **Ao cadastrar com sucesso, redireciona automaticamente para `login.html`**
- Ao fazer login com sucesso, redireciona para a página informada pelo back-end (ou `perfil.html` por padrão)
- Mensagens de erro/sucesso exibidas na tela, vindas da resposta do PHP

## O que falta (proposital — é a parte que seu professor vai ensinar)
Os arquivos `auth.js` apontam para dois endpoints que **ainda não existem**:

```js
const ENDPOINT_CADASTRO = 'cadastro.php';
const ENDPOINT_LOGIN = 'login.php';
```

Você (ou a aula) vai criar `cadastro.php` e `login.php` na mesma pasta dos HTMLs. Esses arquivos devem:

1. Receber os dados enviados pelo formulário (via `$_POST`)
2. Chamar a classe que você já tem (ex: `Usuario`)
3. Responder em **JSON**, no formato abaixo

### Campos enviados por `cadastro.html`
| Campo        | Nome no FormData |
|--------------|-------------------|
| Nome         | `nome`            |
| E-mail       | `email`           |
| Matrícula    | `matricula`       |
| Senha        | `senha`           |
| Nascimento   | `nascimento`      |
| Gênero       | `genero`          |

### Campos enviados por `login.html`
| Campo  | Nome no FormData |
|--------|-------------------|
| E-mail | `email`           |
| Senha  | `senha`           |
| Lembrar-me | `lembrar` (`'1'` ou `'0'`) |

### Formato de resposta esperado (JSON)

**Sucesso:**
```json
{ "sucesso": true, "mensagem": "Conta criada com sucesso!" }
```

**Erro:**
```json
{ "sucesso": false, "mensagem": "E-mail já cadastrado." }
```

No login, você também pode incluir para onde redirecionar:
```json
{ "sucesso": true, "mensagem": "Bem-vindo!", "redirecionarPara": "perfil.html" }
```

### Exemplo de esqueleto de `cadastro.php` (para se inspirar, não é a aula em si)
```php
<?php
header('Content-Type: application/json');

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$matricula = $_POST['matricula'] ?? '';
$senha = $_POST['senha'] ?? '';

// Aqui entra a chamada à sua classe, ex:
// $usuario = new Usuario();
// $resultado = $usuario->cadastrar($nome, $email, $matricula, $senha);

echo json_encode([
    'sucesso' => true,
    'mensagem' => 'Conta criada com sucesso!'
]);
```

Quando os dois arquivos PHP existirem nessa pasta, o front-end já vai funcionar de ponta a ponta sem precisar mudar nada no HTML/JS.
