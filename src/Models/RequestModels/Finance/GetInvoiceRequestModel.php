<?php
namespace SinyorHepsiburada\Models\RequestModels\Finance;

use SinyorHepsiburada\Models\RequestModels\BaseGetRequestModel;

class  GetInvoiceRequestModel extends BaseGetRequestModel
{    
    /**
     * transactiontypes
     *
     * @var string combined with SinyorHepsiburada\Models\BaseModels\HepsiburadaTypes\InvoiveTransactionType
     * seperated with , For eg. transactiontypes=Commission,Retur
     */
    public $transactiontypes;    
    /**
     * allowance
     *
     * @var string  SinyorHepsiburada\Models\BaseModels\HepsiburadaTypes\InvoiceAllowance;
     */
    public $allowance;
}
