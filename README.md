# Auto Refresh PHP

**Auto Refresh PHP** é uma biblioteca leve para monitoramento de alterações em arquivos/diretórios, com auto-reload para desenvolvimento web.

## Instalação

1. Copie o diretório `src` para o seu projeto.
2. Inclua `AutoRefresh.php` no seu arquivo PHP.

## Exemplo de Uso

```php
require 'src/AutoRefresh.php';

use AutoRefresh\AutoRefresh;

$refresh = new AutoRefresh('path/to/your/directory/or/file');
$refresh->handleRequest(); // Cria um endpoint JSON em last_modified.php
```
