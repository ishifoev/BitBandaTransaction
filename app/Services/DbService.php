<?php

namespace App\Services;

use App\Contracts\CsvDbInterface;
use Illuminate\Support\Facades\DB;

class DbService implements CsvDbInterface {

    public function retrieveData() {
            $transactions = $this->fetchAllTrancations();
            return $transactions;
    }
    public function fetchAllTrancations() {
       $transactions =  DB::table('transactions')->get();
       $result = json_decode(json_encode($transactions));
       return $result;
    }
}