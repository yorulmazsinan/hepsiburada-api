<?php
namespace SinyorHepsiburada\Models\RequestModels\Order;

class PackageItemsRequestModel
{      
      /**
       * parcelQuantity
       *
       * @var integer
       */
      public $parcelQuantity;      
      /**
       * deci
       *
       * @var integer
       */
      public $deci;      
      /**
       * lineItemRequests
       *
       * @var array of  SinyorHepsiburada\Models\RequestModels\Order\PackageLine
       */
      public $lineItemRequests;  
}