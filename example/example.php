<?php
// Inclui o arquivo da classe AutoRefresh
require '../src/AutoRefresh.php';

// Usa a classe AutoRefresh
use AutoRefresh\AutoRefresh;

// Define o diretório ou arquivo a ser monitorado (exemplo: views/)
$directoryToWatch = '../views';

// Cria uma instância do AutoRefresh
$autoRefresh = new AutoRefresh($directoryToWatch);

// Executa o método handleRequest para fornecer o timestamp da última modificação
if (isset($_GET['action']) && $_GET['action'] === 'last_modified') {
  // Retorna o JSON com o timestamp quando a URL conter ?action=last_modified
  $autoRefresh->handleRequest();
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Refresh Example</title>
</head>

<body>
  <h1>Exemplo de Auto Refresh com PHP e JavaScript</h1>
  <p>Este exemplo recarrega a página automaticamente quando há alterações no diretório monitorado.</p>

  <!-- Inclui o script JavaScript de auto-refresh -->
  <script src="../src/assets/auto_refresh.js"></script>
  <script>
    // Inicializa o AutoRefresh apontando para o endpoint criado no próprio arquivo
    const refresh = new AutoRefresh('example.php?action=last_modified');
  </script>
</body>

</html>