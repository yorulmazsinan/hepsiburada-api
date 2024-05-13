<?php
namespace SinyorHepsiburada\Services;
use SinyorHepsiburada\Config\Endpoints;

use SinyorHepsiburada\Models\RequestModels\BaseGetRequestModel;
use SinyorHepsiburada\Models\RequestModels\Returns\AwaitClaimRequestModel;
use SinyorHepsiburada\Models\RequestModels\Returns\ClaimRejectionRequestmodel;

class ReturnService extends HepsiburadaBaseService
{    
    /**
     * acceptClaim
     *
     * @param  string $claimNumber
     * @return HepsiburadabaseResponseModel
     */
    public function acceptClaim($claimNumber)
    {
        $url  = $this->getUrl(Endpoints::claim,Endpoints::acceptClaim);
        $url = $this->replaceParameters(["@number"=>$claimNumber],$url);     
        return $this->request("POST",$url);
    }      
    /**
     * rejectClaim
     *
     * @param  string $claimNumber
     * @param  ClaimRejectionRequestmodel $claimRejectRequest
     * @return HepsiburadabaseResponseModel
     */
    public function rejectClaim($claimNumber,ClaimRejectionRequestmodel $claimRejectRequest)
    {
        $url  = $this->getUrl(Endpoints::claim,Endpoints::rejectClaim);
        $url = $this->replaceParameters(["@number"=>$claimNumber],$url); 
        $payload = ["body"=> \json_encode($claimRejectRequest)];    
        return $this->request("POST",$url,$payload);
    }      
    /**
     * getAllClaimDetails
     *
     * @param  BaseGetRequestModel $getParams
     * @return HepsiburadabaseResponseModel
     */
    public function getAllClaimDetails(BaseGetRequestModel $getParams)
    {
        $queryString = $this->generateQueryString($getParams);
        $url  = $this->getUrl(Endpoints::claim,Endpoints::getAllClaimDetail,$queryString);
        $url = $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId],$url);    
        return $this->request("GET",$url);
    }      
    /**
     * getClaimDetailsWithStatus
     *
     * @param  BaseGetRequestModel $getParams
     * @param  string $stausType
     * @return HepsiburadabaseResponseModel
     */
    public function getClaimDetailsWithStatus(BaseGetRequestModel $getParams,$stausType)
    {
        $queryString = $this->generateQueryString($getParams);
        $url  = $this->getUrl(Endpoints::claim,Endpoints::getClaimDetail,$queryString);
        $url = $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId,"@status"=>$stausType],$url);      
        return $this->request("GET",$url);
    }  
    
    /**
     * AwaittingActions
     *
     * @param  mixed $AwaitClaimRequestModel
     * @return HepsiburadabaseResponseModel
     */
    public function AwaittingActions(AwaitClaimRequestModel $awaitActionRequest)
    {
        $url  = $this->getUrl(Endpoints::claim,Endpoints::awaitingActions);
        $payload = ["body"=>\json_encode($awaitActionRequest)];
        return $this->request("POST",$url,$payload);

    }
}
