<?php
declare(strict_types=1);

namespace App\Database;

class Database
{
    private static $instance;

    private function __construct(){}

    public static function getInstance(): self
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function query($sql): void
    {
        echo $sql . "\n";
    }
}