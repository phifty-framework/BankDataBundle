<?php
namespace BankDataBundle\Model;

class Bank  extends \BankDataBundle\Model\BankBase {

    public function dataLabel() {
        return sprintf('%s %s', $this->code, $this->name);
    }

}
