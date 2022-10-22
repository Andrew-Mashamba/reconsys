<?php

namespace App\Http\Livewire\Main\Nodes;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportTransactions;
use App\Imports\ImportTransactions;
use App\Models\Nodes;

class ThirdPartiesNodes extends Component
{
    use WithFileUploads;

    public $term = "";
    public $showAddUser = false;
    public $memberStatus = 'All';
    public $numberOfProducts;
    public $products;
    public $item;
    public $category;
    public $account_name;
    public $notes;
    public $account_number;
    public $createNewAccount;
    public $disableTpButton = false;
    public $excelFile;
    public $excelFileTp;
    public $sessionnumber;
    public $sourceOfData = 'Database';
    public $NODE_NAME;
    public $NODE_DB_HOST;
    public $NODE_DB_PORT;
    public $NODE_DB_DATABASE;
    public $NODE_DB_USERNAME;
    public $NODE_DB_PASSWORD;
    public $DB_TABLE_TRANSACTION_TYPE;
    public $DB_TABLE_CLIENT_IDENTIFIER;
    public $DB_TABLE_SERVICE_IDENTIFIER;
    public $DB_TABLE_STATUS;
    public $DB_TABLE_DESCRIPTION;
    public $DB_TABLE_SENDER;
    public $DB_TABLE_RECEIVER;
    public $DB_TABLE_AMOUNT;
    public $DB_TABLE_DATE;
    public $DB_TABLE_REFERENCE;
    public $DB_TABLE_NAME;
    public $columns;


    public function importDataCb(){
        if($this->excelFile == null){
            $this->inputterrors = 'PLEASE SELECT A CASH BOOK FILE TO UPLOAD...';
        }else{

            Session::put('uploadCBDone', false);
            $this->inputterrors = '';

            if($this->sessionnumber == ''){
                $this->sessionnumber = sprintf("%06d", mt_rand(1, 999999));
            }


            $ia = Excel::import(new ImportTransactions, $this->excelFile->store('files'));
            $this->columns = Session::get('excelData');
            //dd(Session::get('excelData'));
            //$this->disableCbButton ='disabled';


        }


    }


    public function boot()
    {
        $this->item = 1;
    }



    public function render()
    {
//        $query = sub_products::where('product_id', 12);
//        $this->products = $query->get();
//        $this->numberOfProducts = $query->count();
//        if($this->notes && $this->account_name && $this->category){
//            $this->account_number = $this->category.'11110'.rand(0000,9999);
//        }


        return view('livewire.main.nodes.third-parties-nodes');
    }


    public function save()
    {

        //$this->validate();



        if($this->sourceOfData == 'Database'){
            $this->validate([

                'NODE_NAME' => 'required|min:3',
                'NODE_DB_HOST' => 'required|min:3',
                'NODE_DB_PORT' => 'required|min:3',
                'NODE_DB_DATABASE' => 'required|min:3',
                'NODE_DB_USERNAME' => 'required|min:3',
                'NODE_DB_PASSWORD' => 'required|min:3',
                'DB_TABLE_TRANSACTION_TYPE' => 'required|min:3',
                'DB_TABLE_CLIENT_IDENTIFIER' => 'required|min:3',

                'DB_TABLE_SERVICE_IDENTIFIER' => 'required|min:3',
                'DB_TABLE_STATUS' => 'required|min:3',
                'DB_TABLE_DESCRIPTION' => 'required|min:3',
                'DB_TABLE_SENDER' => 'required|min:3',
                'DB_TABLE_RECEIVER' => 'required|min:3',
                'DB_TABLE_AMOUNT' => 'required|min:3',
                'DB_TABLE_DATE' => 'required|min:3',
                'DB_TABLE_REFERENCE' => 'required|min:3',
                'DB_TABLE_NAME' => 'required|min:3',
            ]);

        }else{
//            $this->validate([
//
//                'DB_TABLE_TRANSACTION_TYPE' => 'required|min:1',
//                'DB_TABLE_CLIENT_IDENTIFIER' => 'required|min:1',
//
//                'DB_TABLE_SERVICE_IDENTIFIER' => 'required|min:1',
//                'DB_TABLE_STATUS' => 'required|min:1',
//                'DB_TABLE_DESCRIPTION' => 'required|min:1',
//                'DB_TABLE_SENDER' => 'required|min:1',
//                'DB_TABLE_AMOUNT' => 'required|min:1',
//                'DB_TABLE_DATE' => 'required|min:1',
//                'DB_TABLE_REFERENCE' => 'required|min:1',
//                'DB_TABLE_NAME' => 'required|min:1',
//            ]);
        }

//        $id = Nodes::create([
//            'NODE_NAME' => $this->NODE_NAME,
//            'NODE_DB_HOST' => $this->NODE_DB_HOST,
//            'NODE_DB_PORT' => $this->NODE_DB_PORT,
//            'NODE_DB_DATABASE' => $this->NODE_DB_DATABASE,
//            'NODE_DB_USERNAME' => $this->NODE_DB_USERNAME,
//            'NODE_DB_PASSWORD' => $this->NODE_DB_PASSWORD,
//            'DB_TABLE_TRANSACTION_TYPE' => $this->DB_TABLE_TRANSACTION_TYPE,
//            'DB_TABLE_CLIENT_IDENTIFIER' => $this->DB_TABLE_CLIENT_IDENTIFIER,
//            'DB_TABLE_SERVICE_IDENTIFIER' => $this->DB_TABLE_SERVICE_IDENTIFIER,
//            'DB_TABLE_STATUS' => $this->DB_TABLE_STATUS,
//            'DB_TABLE_DESCRIPTION' => $this->DB_TABLE_DESCRIPTION,
//            'DB_TABLE_SENDER' => $this->DB_TABLE_SENDER,
//            'DB_TABLE_RECEIVER' => $this->DB_TABLE_RECEIVER,
//            'DB_TABLE_AMOUNT' => $this->DB_TABLE_AMOUNT,
//            'DB_TABLE_DATE' => $this->DB_TABLE_DATE,
//            'DB_TABLE_REFERENCE' => $this->DB_TABLE_REFERENCE,
//            'DB_TABLE_NAME' => $this->DB_TABLE_NAME,
//            'NODE_TYPE' => 'THIRD_PART',
//            'NODE_STATUS' => 'ACTIVE'
//
//        ])->id;


        //dd($this->NODE_NAME);
        $Node = new Nodes;
            $Node->NODE_NAME = $this->NODE_NAME;
            $Node->NODE_DB_HOST = $this->NODE_DB_HOST;
            $Node->NODE_DB_PORT = $this->NODE_DB_PORT;
            $Node->NODE_DB_DATABASE = $this->NODE_DB_DATABASE;
            $Node->NODE_DB_USERNAME = $this->NODE_DB_USERNAME;
            $Node->NODE_DB_PASSWORD = $this->NODE_DB_PASSWORD;
            $Node->DB_TABLE_TRANSACTION_TYPE = $this->DB_TABLE_TRANSACTION_TYPE;
            $Node->DB_TABLE_CLIENT_IDENTIFIER = $this->DB_TABLE_CLIENT_IDENTIFIER;
            $Node->DB_TABLE_SERVICE_IDENTIFIER = $this->DB_TABLE_SERVICE_IDENTIFIER;
            $Node->DB_TABLE_STATUS = $this->DB_TABLE_STATUS;
            $Node->DB_TABLE_DESCRIPTION = $this->DB_TABLE_DESCRIPTION;
            $Node->DB_TABLE_SENDER = $this->DB_TABLE_SENDER;
            $Node->DB_TABLE_RECEIVER = $this->DB_TABLE_RECEIVER;
            $Node->DB_TABLE_AMOUNT = $this->DB_TABLE_AMOUNT;
            $Node->DB_TABLE_DATE = $this->DB_TABLE_DATE;
            $Node->DB_TABLE_REFERENCE = $this->DB_TABLE_REFERENCE;
            $Node->DB_TABLE_NAME = $this->DB_TABLE_NAME;
            $Node->NODE_TYPE = 'THIRD_PART';
            $Node->NODE_STATUS = 'ACTIVE';
        if ($Node->save()) {
            $this->resetData();

            Session::flash('message', 'Account has been successfully saved!');
            Session::flash('alert-class', 'alert-success');

        }



    }

    public function resetData()
    {
        $this->category = '';
        $this->account_name = '';
        $this->account_number = '';

    }


}

