<?php

namespace VIRUS\Framework\View;

class View
{

    public static function render(string $view, array $data = [])
    {
        (!empty($data) ? extract($data) : false);
        require __DIR__ . '/../../../../../app/views/' . $view . '.php';
    }

    public static function virus(int $status, array $data = [])
    {
        http_response_code($status);

        (!empty($data) ? extract($data) : false);
        require __DIR__ . '/../resources/exception.php';
    }
}
