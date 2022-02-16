<?php

namespace App\Services;

use App\Contracts\CsvDbInterface;
use App\Services\CsvService;

class DbCsvFactory {

    public function initialize(string $type): CsvDbInterface
    {
        switch ($type) {
            case 'csv':
                return new CsvService();
            case 'db':
                return new DbService();
            case 'html':
                throw new \Exception("HTML method not supported");
                break;
            default:
                throw new \Exception("You have a wrong path.");
                break;
        }
    }
}