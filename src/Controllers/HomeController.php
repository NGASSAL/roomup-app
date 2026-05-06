<?php

use Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home', [
            'title'   => 'roomup.app',
            'appEnv'  => getenv('APP_ENV') ?: 'unknown',
            'dbHost'  => getenv('DB_HOST') ?: 'non configuré',
        ]);
    }

    public function health(): void
    {
        $this->json([
            'status'  => 'ok',
            'app'     => 'roomup-app',
            'env'     => getenv('APP_ENV'),
            'db_host' => getenv('DB_HOST'),
        ]);
    }
}
