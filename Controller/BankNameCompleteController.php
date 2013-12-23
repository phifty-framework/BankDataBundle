<?php
namespace BankDataBundle\Controller;
use Phifty\Controller;
use CommonBundle\Controller\AutoCompleteController;

class BankNameCompleteController extends AutoCompleteController
{
    public $collectionClass = 'BankDataBundle\\Model\\BankCollection';
    public $searchFields = [
        'name' => 'contains',
        'code' => 'starts_with',
    ];
    public $labelField = 'name';
}
