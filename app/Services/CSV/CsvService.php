<?php
namespace App\Services\Csv;

use Illuminate\Support\Facades\Storage;

use App\Services\Csv\CsvServiceInterface;
use App\Services\Csv\Validate\UserCsvValidator;
use App\Services\Csv\Convert\UserCsvConverter;


class CsvService implements CsvServiceInterface
{  
    private CsvValidatorInterface $validator; 
    private CsvConverterInterface $converter;

    public function __construct(
        CsvValidatorInterface $validator,
        CsvConverterInterface $converter,
    ) {
        $this->validator = $validator;
        $this->converter = $converter;
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