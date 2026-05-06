<?php

use Core\Controller;
use Core\Database;

class TenantController extends Controller
{
    public function index(): void
    {
        try {
            $pdo    = Database::connect('roomup_default');
            $stmt   = $pdo->query('SELECT tenant_id, name, domain FROM tenants ORDER BY created_at DESC LIMIT 20');
            $tenants = $stmt->fetchAll();
        } catch (\PDOException $e) {
            $tenants = [];
            $error   = $e->getMessage();
        }

        $this->render('tenants', [
            'title'   => 'Tenants — roomup.app',
            'tenants' => $tenants,
            'error'   => $error ?? null,
        ]);
    }
}
