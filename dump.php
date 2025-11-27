<?php

/**
 * Полный дамп всех файлов проекта (включая бинарные)
 * в один текстовый файл project_dump.txt.
 *
 * Текстовые файлы записываются как есть.
 * Бинарные — в Base64, помечены специальным маркером.
 */

$root = __DIR__;
$outputFile = $root . "/project_dump.txt";

if (file_exists($outputFile)) {
    unlink($outputFile);
}

$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($files as $file) {
    if ($file->isDir()) {
        continue;
    }

    $path = $file->getPathname();
    $relativePath = str_replace($root . "/", "", $path);

    // Прочитаем файл
    $raw = file_get_contents($path);

    // Проверим бинарный или текстовый
    $isBinary = false;

    // если есть NUL-байты — файл бинарный
    if (strpos($raw, "\0") !== false) {
        $isBinary = true;
    }

    // Заголовок
    $block  = "\n=======\n{$relativePath}\n=======\n";

    // Контент
    if ($isBinary) {
        $block .= "[BINARY_BASE64]\n";
        $block .= base64_encode($raw) . "\n";
    } else {
        $block .= "[TEXT]\n";
        $block .= $raw . "\n";
    }

    // Записываем
    file_put_contents($outputFile, $block, FILE_APPEND);

    echo "Дамп: {$relativePath}\n";
}

echo "\nГотово! См. файл: project_dump.txt\n";
