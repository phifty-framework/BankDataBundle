<?php
namespace BankDataBundle\Controller;
use Phifty\Controller;
use CommonBundle\Controller\AutoCompleteController;

class BankCompleteController extends AutoCompleteController
{
    public $collectionClass = 'BankDataBundle\\Model\\BankCollection';
    public $searchFields = [
        'name' => 'contains',
        'code' => 'contains',
    ];
}
