<?php
// Script para obter os caminhos absolutos
echo 'URL: ';

echo 'http://localhost'.str_ireplace('obter_caminho_absoluto.php', '', $_SERVER['PHP_SELF']);

echo '<hr>';

echo 'Físico: ';

echo getcwd();