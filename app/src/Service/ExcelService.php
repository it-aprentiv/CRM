<?php
/**
 * file ExcelService.php
 */

namespace App\Service;


use PhpOffice\PhpSpreadsheet\Spreadsheet;

class ExcelService
{

    private $excelService;

    public function __construct($excelService) {
        $this->excelService = $excelService;
    }

    /**
     * @param null $sPath
     * @return Spreadsheet
     */
    public function generateWorkSheet($sPath = null){
        return $this->excelService->createSpreadsheet($sPath);
    }

    public function saveInTemp(Spreadsheet $oWorkSheet, $sExt = 'Xlsx'){
        $oWriter = $this->excelService->createWriter($oWorkSheet, $sExt);

        // Create a Temporary file in the system
        $sFileName = 'formation_dossier_temp.xlsx';
        $sPath = tempnam(sys_get_temp_dir(), $sFileName);

        $oWriter->save($sPath);

        return $sPath;
    }
}