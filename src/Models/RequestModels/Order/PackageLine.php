<?php
namespace SinyorHepsiburada\Models\RequestModels\Order;
class PackageLine
{    
    /**
     * id
     *
     * @var string
     */
    public $id;    
    /**
     * quantity
     *
     * @var string
     */
    public $quantity;
 
    public function __construct($id, $quantity)
    {
        $this->id = $id;
        $this->quantity = $quantity;
    }
}
