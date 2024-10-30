<?php
// Inclui o arquivo da classe AutoRefresh
require '../src/AutoRefresh.php';

// Usa a classe AutoRefresh
use AutoRefresh\AutoRefresh;

// Define o diretório ou arquivo a ser monitorado (exemplo: views/)
$directoryToWatch = '/';

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
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Auto Refresh Example - HOT RELOAD 🔥</title>
</head>

<body class="bg-slate-900 h-screen flex flex-col justify-center items-center text-gray-200 gap-y-6">
  <h1 class="text-3xl font-bold">HOT RELOAD 🔥</h1>
  <h1 class="text-3xl font-bold">Exemplo de Auto Refresh com PHP e JavaScript</h1>
  <p class="text-gray-400">Este exemplo recarrega a página automaticamente quando há alterações no diretório monitorado.</p>

  <!-- Inclui o script JavaScript de auto-refresh -->
  <script src="../src/assets/auto_refresh.js"></script>
  <script>
    // Inicializa o AutoRefresh apontando para o endpoint criado no próprio arquivo
    const refresh = new AutoRefresh('example.php?action=last_modified');
  </script>
</body>

</html>