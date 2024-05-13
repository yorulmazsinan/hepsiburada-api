<?php
namespace SinyorHepsiburada\Models\RequestModels\Product;

class ProdoductStatusesRequestModel
{    
    /**
     * merchant
     *
     * @var string
     */
    public $merchant; //String    
    /**
     * merchantSkuList
     *
     * @var array
     */
    public $merchantSkuList;  //array( String )

    public function __construct($merchant, $merchantSkuList)
    {
        $this->merchant = $merchant;
        $this->merchantSkuList = $merchantSkuList;
    }
}   