<?php
    if(file_exists(__DIR__ . '/../../.env')) {
        $lines = file(__DIR__ . '/../../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach($lines as $line) {
            if(strpos(trim($line), '#') === 0) {
                continue;
            }
            [$key, $value] = explode('=', $line, 2);
            putenv(trim($key) . '=' . trim($value));
        }
    }

    return [
        'database' => [
            'host' => getenv('DB_HOST'),
            'name' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'pass' => getenv('DB_PASS')
        ],
        'app' => [
            'base_url' => getenv('BASE_URL')
        ],
    ];

?>