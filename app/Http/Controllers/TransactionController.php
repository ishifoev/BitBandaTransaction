<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\CsvDbInterface;
use App\Services\DbCsvFactory;

class TransactionController extends Controller
{
    private $service;
    public function __construct(CsvDbInterface $service) {
       $this->service = $service;
    }
    public function index(Request $request) {
        $input = $request->query('source');
        $dbCsv = new DbCsvFactory();
        if($input === null) throw new \Exception('You are not set up any path');
        $result = $dbCsv->initialize($input);
        return $result->retrieveData();
    }
}
