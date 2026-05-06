<?php
namespace Core;

class Database
{
    private static array $instances = [];

    /**
     * Connexion multi-tenant : une BDD par client (tenant)
     */
    public static function connect(string $tenantDb = 'roomup_default'): \PDO
    {
        if (!isset(self::$instances[$tenantDb])) {
            $host = getenv('DB_HOST') ?: 'roomup-mysql';
            $port = getenv('DB_PORT') ?: '3306';
            $user = getenv('DB_USER') ?: 'roomup';
            $pass = getenv('DB_PASS') ?: '';

            $dsn = "mysql:host={$host};port={$port};dbname={$tenantDb};charset=utf8mb4";

            self::$instances[$tenantDb] = new \PDO($dsn, $user, $pass, [
                \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        }

        return self::$instances[$tenantDb];
    }
}
