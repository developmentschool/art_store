<?php
if (getenv("GMAIL_URL")) {
    $url = parse_url(getenv("GMAIL_URL"));
    return [
        'host' => $url['host'],
        'username' => $url['user'],
        'password' => $url['pass'],
        'port' => $url['port'],
        'encryption' => $url["fragment"],
    ];
}
if (!file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'local_mail.php')) {
    die('Не найден файл локальной конфигурации компопента mailer "config/local_mail.php"');
}

return require __DIR__ . DIRECTORY_SEPARATOR . 'local_mail.php';