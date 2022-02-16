<?php

namespace App\Services;

use App\Contracts\CsvDbInterface;

class CsvService implements CsvDbInterface {

    public function retrieveData() {
         $result = $this->csvToJson(storage_path("app/public/transactions.csv"));
         return $result;
    }

    public function csvToJson($file) {
     
        if (!($fp = fopen($file, 'r'))) {
            die("Can't open file...");
        }
        
        //read csv headers
        $key = fgetcsv($fp,"1024",",");
        
        // parse csv rows into array
        $json = array();
            while ($row = fgetcsv($fp,"1024",",")) {
            $json[] = array_combine($key, $row);
        }
        
        // release file handle
        fclose($fp);
        
        // encode array to json
        return json_decode(json_encode($json));
    }
}