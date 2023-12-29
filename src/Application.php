<?php
declare(strict_types=1);

namespace App;

use App\Database\Database;

class Application 
{
    public function run(): void
    {
        $database = Database::getInstance();
        
        $database->query('SELECT * FROM table1');

        $database->query('SELECT * FROM table2');
    }
}