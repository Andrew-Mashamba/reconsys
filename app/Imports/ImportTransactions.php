<?php

namespace App\Imports;

use App\Models\Cashbook;
use App\Models\Crdb;
use App\Models\Nmb;
use App\Models\Banks;
use App\Models\Uchumi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Calculation\DateTime;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;

use PhpOffice\PhpSpreadsheet\Shared\Date;

class ImportTransactions extends DefaultValueBinder implements ToModel,WithCustomValueBinder
{
    /**
     * @param array $row
     *
     * @return Cashbook
     */

    // set the preferred date format
    private $date_format = 'Y-m-d';

    // set the columns to be formatted as dates
    private $date_columns;

    public $x = 0;

    public function model(array $row): \Illuminate\Database\Eloquent\Model|array|string|null
    {

        if($this->x == 0){
            Session::put('excelData', $row);
        }

         $this->x ++;

        return null;


    }




    // bind date formats to column defined above

    /**
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
//    public function bindValue(Cell $cell, $value)
//    {
////        if(Session::get('typeOfTransfer') =='CB') {
////            $this->date_columns = ['A'];
////        }
////        if(Session::get('typeOfTransfer') =='CRDB') {
////            $this->date_columns = ['C'];
////        }
//
//        if(Session::get('typeOfTransfer') =='UCHUMI') {
//            $this->date_columns = ['B','D'];
//        }
//
//        if (in_array($cell->getColumn(), $this->date_columns)) {
//            $cell->setValueExplicit(Date::excelToDateTimeObject($value)->format($this->date_format), DataType::TYPE_STRING);
//
//            return true;
//        }
//
//        // else return default behavior
//        return parent::bindValue($cell, $value);
//    }
}
