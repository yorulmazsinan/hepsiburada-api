<?php

namespace SinyorHepsiburada;

use SinyorHepsiburada\Services\OrderService;
use SinyorHepsiburada\Services\ListingService;
use SinyorHepsiburada\Services\ProductService;
use SinyorHepsiburada\Services\CategoryService;
use SinyorHepsiburada\Services\Returnservice;
use SinyorHepsiburada\Services\FinanceService;
use SinyorHepsiburada\Config\Credentials;

class Hepsiburada
{
	public $category;
	public $product;
	public $listing;
	public $order;
	public $return;
	public $finance;
	public $username;
	public $password;
	public $merchantId;
	public $isTestStage;
	public  function __construct($username,$password,$merchantId,$isTestStage=true)
	{
		$credentials = new Credentials();
		$credentials->username=$username;
		$credentials->password=$password;
		$credentials->merchantId=$merchantId;
		$this->category = new CategoryService($isTestStage,$credentials);
		$this->product = new ProductService($isTestStage,$credentials);
		$this->order = new OrderService($isTestStage,$credentials);
		$this->listing = new ListingService($isTestStage,$credentials);
		$this->return = new ReturnService($isTestStage,$credentials);
		$this->finance = new FinanceService($isTestStage,$credentials);
	}
}