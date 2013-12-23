<?php
namespace BankDataBundle;
use Phifty\Bundle;

class BankDataBundle extends Bundle
{
    public function assets() { return array(); }

    public function init() 
    {
        $this->route('/=/bank', 'BankCompleteController:index');
        $this->route('/=/bank_name', 'BankNameCompleteController:index');
        $this->route('/=/bank_code', 'BankCodeCompleteController:index');
    }

}
