<?php

class Connection
{
    public static function connect(): PDO
    {
        // Lê as configurações do arquivo na raiz do projeto
        $config = parse_ini_file(
            __DIR__ . '.env',
            false,
            INI_SCANNER_RAW
        );

        if ($config === false) {
            throw new RuntimeException('Não foi possível carregar o .env.');
        }

        // Endereço do banco
        $dsn = "mysql:host={$config['DB_HOST']};"
             . "port={$config['DB_PORT']};"
             . "dbname={$config['DB_NAME']};"
             . "charset=utf8mb4";

        return new PDO(
            $dsn,
            $config['DB_USER'],
            $config['DB_PASS'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        );
    }
}
