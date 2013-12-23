<?php
namespace BankDataBundle\Controller;
use Phifty\Controller;
use CommonBundle\Controller\AutoCompleteController;

class BankCodeCompleteController extends AutoCompleteController
{
    public $collectionClass = 'BankDataBundle\\Model\\BankCollection';
    public $searchFields = [
        'code' => 'starts_with',
    ];

    // public $labelField = 'name';
    public $valueField = 'code';
}
