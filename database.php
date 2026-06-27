<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| DeMerzli Web V3
| Datenbankverbindung
|--------------------------------------------------------------------------
*/

class Database
{
    private string $host = "localhost";
    private string $database = "demerzli_v3";
    private string $username = "root";
    private string $password = "";
    private string $charset = "utf8mb4";

    private ?PDO $pdo = null;

    public function connect(): PDO
    {
        if ($this->pdo instanceof PDO) {
            return $this->pdo;
        }

        $dsn = sprintf(
            "mysql:host=%s;dbname=%s;charset=%s",
            $this->host,
            $this->database,
            $this->charset
        );

        $this->pdo = new PDO(
            $dsn,
            $this->username,
            $this->password,
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]
        );

        return $this->pdo;
    }
}
