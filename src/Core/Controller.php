<?php
namespace Core;

abstract class Controller
{
    protected function render(string $view, array $data = []): void
    {
        extract($data);
        $viewPath = ROOT_PATH . '/views/' . $view . '.php';
        $layout   = ROOT_PATH . '/views/layout.php';

        ob_start();
        require $viewPath;
        $content = ob_get_clean();

        require $layout;
    }

    protected function json(mixed $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
