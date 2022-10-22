<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Session;
use App\Models\TeamUser;
use App\Models\departmentsList;
use Illuminate\Support\Facades\Auth;

class Main extends Component
{


    public $tab_id = '1';
    public $modules = [];

    public function boot(){


        $department = TeamUser::where('user_id',Auth::user()->id)->value('department');

        if($department){
            $this->modules = departmentsList::where('id',$department)->value('modules');
            if($this->modules){
                $str_json = json_encode($this->modules);
                $this->modules= json_decode($str_json, TRUE);
                $this->modules = str_replace(array('[',']','"',' '), '',$this->modules);

                $this->modules = explode(",",$this->modules);
                Session::put('modules',$this->modules);


            }else{
                $this->modules  = null;
            }

        }


    }

    public function showDashboard(){
        $this->tab_id = '1';
    }
    public function showBranches(){
        $this->tab_id = '2';
    }

    public function showMembers(){
        $this->tab_id = '3';
    }

    public function showProductsManagement(){
        $this->tab_id = '4';
    }

    public function showThirdPartiesNodes(){
        $this->tab_id = '5';

    }

    public function showSavings(){
        $this->tab_id = '6';
    }

    public function showDeposits(){
        $this->tab_id = '7';
    }
    public function showAccounting(){
        $this->tab_id = '8';
    }

    public function showLoans(){
        $this->tab_id = '9';
    }

    public function showPayments(){
        $this->tab_id = '10';
    }

    public function showReconciliation(){
        $this->tab_id = '11';
    }

    public function setup(){
        $this->tab_id = '12';
    }

    public function settings(){
        $this->tab_id = '13';
    }

    public function approvals(){
        $this->tab_id = '14';
    }




    public function render()
    {
        return view('livewire.main');
    }
}
