<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 25.03.2019
 * Time: 20:35
 */
if (getenv("CLOUDINARY_URL")) {
    $url = parse_url(getenv("CLOUDINARY_URL"));
    return [
        'cloud_name' => $url['host'],
        'api_key' => $url['user'],
        'api_secret' => $url['pass'],
    ];
}
if (!file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'local_cloudinary.php')) {
    die('Не найден файл локальной конфигурации базы банных "config/local_cloudinary.php"');
}

return require __DIR__ . DIRECTORY_SEPARATOR . 'local_cloudinary.php';