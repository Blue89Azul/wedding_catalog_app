<?php 

namespace App\Services\Csv;

interface CsvServiceInterface {
    public function upload(string $filePath);
    public function download(string $filePath);
}