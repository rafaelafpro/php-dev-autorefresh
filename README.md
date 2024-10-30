# 🚀 Auto Refresh PHP

[![MIT License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
![PHP Version](https://img.shields.io/badge/PHP-%3E%3D%207.0-8892BF.svg)
![Version](https://img.shields.io/badge/Version-1.0.0-brightgreen)

**Auto Refresh PHP** é uma biblioteca leve e independente de framework para monitoramento de alterações em arquivos e diretórios. Ideal para desenvolvimento web, este projeto oferece um **auto-refresh** simples e eficaz para recarregar o navegador quando houver mudanças no projeto.

> 🌟 **Por que escolher Auto Refresh PHP?**  
> 📦 Sem dependências externas | ⚡ Leve e Rápido | 🔧 Fácil de Configurar

---

## 📜 Índice

- [Instalação](#-instalação)
- [Configuração](#-configuração)
- [Uso](#-uso)
- [Exemplo Completo](#-exemplo-completo)
- [Contribuindo](#-contribuindo)
- [Licença](#-licença)

---

## 🔧 Instalação

1. **Clone ou baixe o projeto:**

   ```bash
   git clone https://github.com/rafaelafpro/auto-refresh-php.git
   cd auto-refresh-php
   ```

2. **Inclua o arquivo principal no seu projeto:**

   Copie o diretório `src` para o seu projeto. Assim, você poderá fazer a integração facilmente.

---

## ⚙️ Configuração

### Estrutura do Projeto

```plaintext
auto-refresh-php/
│
├── src/
│   ├── AutoRefresh.php        # Classe principal do Auto Refresh PHP
│   └── assets/
│       └── auto_refresh.js    # Script de atualização automática para o navegador
│
├── example/
│   └── example.php            # Exemplo completo de uso da biblioteca
├── README.md                  # Documentação do projeto
└── LICENSE                    # Licença do projeto
```

### Configurando o Auto Refresh PHP

1. **Arquivo de configuração em PHP**:
   No seu arquivo PHP, crie uma instância da classe `AutoRefresh` e defina o diretório ou arquivo que deseja monitorar.

2. **JavaScript no Frontend**:
   Inclua o arquivo `auto_refresh.js` no HTML para o monitoramento automático.

---

## 🚀 Uso

Para usar o **Auto Refresh PHP**, siga o exemplo abaixo:

### Passo 1: Configurar o Endpoint no PHP

No seu arquivo PHP, crie uma instância do `AutoRefresh` e configure um endpoint que retorne o timestamp da última modificação:

```php
<?php
require 'src/AutoRefresh.php';

use AutoRefresh\AutoRefresh;

// Define o diretório ou arquivo que você quer monitorar (por exemplo: 'views/')
$autoRefresh = new AutoRefresh('views');

// Cria o endpoint JSON para o JavaScript
if (isset($_GET['action']) && $_GET['action'] === 'last_modified') {
    $autoRefresh->handleRequest();
    exit;
}
```

### Passo 2: Adicionar o JavaScript no HTML

Inclua o JavaScript no seu HTML e aponte para o endpoint:

```html
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Auto Refresh PHP</title>
  </head>
  <body>
    <h1>Exemplo de Auto Refresh</h1>

    <!-- Inclua o script de auto-refresh -->
    <script src="src/assets/auto_refresh.js"></script>
    <script>
      // Inicializa o auto refresh com o endpoint definido
      const refresh = new AutoRefresh("example.php?action=last_modified");
    </script>
  </body>
</html>
```

### Parâmetros Configuráveis

- **Diretório ou Arquivo Monitorado**: No construtor `AutoRefresh()`, defina o diretório ou arquivo a ser monitorado.
- **Intervalo de Verificação**: Ajuste o intervalo no JavaScript para definir a frequência com que o navegador verifica o endpoint.

---

## 💻 Exemplo Completo

Para um exemplo completo, verifique o arquivo [`example/example.php`](example/example.php), que demonstra uma integração pronta para uso com o **Auto Refresh PHP**.

---

## 🤝 Contribuindo

Adoramos contribuições da comunidade! Aqui estão algumas maneiras de você contribuir com o **Auto Refresh PHP**:

1. **Dê uma estrela no projeto** ⭐ para ajudar outros a descobrirem o repositório.
2. **Reporte bugs** ou sugira novas funcionalidades [abrindo uma issue](https://github.com/rafaelafpro/auto-refresh-php/issues).
3. **Envie PRs** para melhorar o código ou a documentação.

Siga estas etapas para enviar um Pull Request (PR):

1. Faça o fork do projeto.
2. Crie uma nova branch para sua feature ou correção (`git checkout -b feature/nome-feature`).
3. Commit suas alterações (`git commit -m 'Adiciona nova feature'`).
4. Envie suas alterações (`git push origin feature/nome-feature`).
5. Abra um Pull Request!

---

## 📄 Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE). Sinta-se à vontade para usá-lo e adaptá-lo conforme necessário!

---

## 🌍 Links Importantes

- [GitHub Issues](https://github.com/rafaelafpro/auto-refresh-php/issues) - Para feedback e sugestões.
- [GitHub Pull Requests](https://github.com/rafaelafpro/auto-refresh-php/pulls) - Para contribuir com código.

---

💬 **Precisa de ajuda?** Entre em contato abrindo uma issue ou mande uma mensagem. Estamos aqui para ajudar a comunidade a crescer!

---

**Desenvolvido com 💻 e ☕ por [Rafael Andrade](https://github.com/rafaelafpro)**
