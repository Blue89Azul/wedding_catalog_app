<?php
namespace App\Services\Csv;

use Illuminate\Support\Facades\Storage;

use App\Services\Csv\CsvServiceInterface;
use App\Services\Csv\Validate\UserCsvValidator;
use App\Services\Csv\Convert\UserCsvConverter;


class UserCsvService implements CsvServiceInterface
{   
    private UserCsvConverter $converter;
    private UserCsvValidator $validator;

    // ドメインによって戦略が変わる
    public function __construct(
        UserCsvValidator $validator,
        UserCsvConverter $converter,
    ) {
        $this->converter = $converter;
        $this->validator = $validator;
    }

    public function upload(string $filePath) 
    {
        $directory   = "";
        $fileContent = Storage::disc($directory)->readStream($filePath);
        Storage::disc($directory)->delete($fileName);

        $row = [];
        while($row !== false) {
            $row = fgetcsv($file_content);
            $row = $converter->handle($row);
            $validator->handle($row);
            yield $row;
        }
        
        fclose($file_content);
    }

    public function download()
    {
        // 
    }

    private function existsCsvFile(string $directory, string $fileName): bool 
    {
        if (!Storage::disc($directory)->exist($fileName)) {
            return false;
        }

        if (!Storage::extension($fileName)) {
            return false;
        }

        return true;
    }
}