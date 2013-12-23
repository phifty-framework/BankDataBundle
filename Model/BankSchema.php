<?php
namespace BankDataBundle\Model;
use LazyRecord\Schema\SchemaDeclare;

class BankSchema extends SchemaDeclare
{
    public function schema() {
        $this->column('name')
            ->varchar(32)
            ->label( _('銀行名稱') )
            ->required()
            ;

        $this->column('code')
            ->varchar(4)
            ->label( _('銀行代碼') )
            ->required()
            ;

        $this->column('typename')
            ->varchar(20)
            ->label( _('類型') )
            ;
    }
}
