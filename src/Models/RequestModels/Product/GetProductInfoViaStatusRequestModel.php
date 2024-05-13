<?php
namespace SinyorHepsiburada\Models\RequestModels\Product;

use SinyorHepsiburada\Models\RequestModels\BaseGetRequestModel;

class GetProductInfoViaStatusRequestModel extends BaseGetRequestModel
{    
    /**
     * merchantId
     *
     * @var strint 
     */
    public $merchantId;    
    /**
     * taskStatus
     *
     * @var boolean
     */
    public $taskStatus;    
    /**
     * productStatus
     *
     * @var string
     */
    public $productStatus;
}