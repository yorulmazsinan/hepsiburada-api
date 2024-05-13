<?php 
namespace SinyorHepsiburada\Services;

use SinyorHepsiburada\Config\Credentials;
use SinyorHepsiburada\Config\Endpoints;
use SinyorHepsiburada\Models\RequestModels\Finance\GetInvoiceRequestModel;

class FinanceService extends HepsiburadaBaseService
{
	/**
	 * getInvoice
	 *
	 * @param  GetInvoiceRequestModel $getInvoiceRequest
	 * @return HepsiburadaBaseResponseModel
	 */
	public function getInvoice(GetInvoiceRequestModel $getInvoiceRequest)
	{
		$queryString = $this->generateQueryString($getInvoiceRequest);
		$url = $this->getUrl(Endpoints::finance,Endpoints::getInvoice,$queryString);
		$url = $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId],$url);
		return $this->request("GET",$url);
	}
}
