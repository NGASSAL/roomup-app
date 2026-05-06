<?php
namespace Models;

use Core\Database;

class TenantModel
{
    private \PDO $db;

    public function __construct(string $tenantDb = 'roomup_default')
    {
        $this->db = Database::connect($tenantDb);
    }

    public function all(): array
    {
        return $this->db
            ->query('SELECT * FROM tenants ORDER BY created_at DESC')
            ->fetchAll();
    }

    public function find(int $id): array|false
    {
        $stmt = $this->db->prepare('SELECT * FROM tenants WHERE tenant_id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create(string $name, string $domain): int
    {
        $stmt = $this->db->prepare(
            'INSERT INTO tenants (name, domain, created_at) VALUES (?, ?, NOW())'
        );
        $stmt->execute([$name, $domain]);
        return (int) $this->db->lastInsertId();
    }
}
