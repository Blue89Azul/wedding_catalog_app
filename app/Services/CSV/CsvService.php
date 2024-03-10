<?php
namespace App\Services\Csv;

use Illuminate\Support\Facades\Storage;

use App\Services\Csv\CsvServiceInterface;
use App\Services\Csv\Validate\UserCsvValidator;
use App\Services\Csv\Convert\UserCsvConverter;


class CsvService implements CsvServiceInterface
{  
    public function upload(string $filePath)
    {
        $fileContent = Storage::disk('master')->readStream('列席者テスト.csv');
        Storage::disk('master')->delete('列席者テスト.csv');

        $row = [];
        while($row !== false) {
            $row = fgetcsv($fileContent);
            yield $row;
        }
        
        fclose($fileContent);
    }

    public function download(string $filePath)
    {
        // 
    }

    private function existsCsvFile(string $directory, string $fileName): bool 
    {
        if (!Storage::disk($directory)->exist($fileName)) {
            return false;
        }

        if (!Storage::extension($fileName)) {
            return false;
        }

        return true;
    }
}