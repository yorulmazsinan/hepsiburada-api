<?php
namespace SinyorHepsiburada\Services;

use SinyorHepsiburada\Config\Endpoints;
use SinyorHepsiburada\Models\BaseModels\HepsiburadaBaseResponseModel;
use SinyorHepsiburada\Models\RequestModels\Category\GetAllCategoryRequestmodel;

class CategoryService extends HepsiburadaBaseService
{    
    /**
     * getAllCategories
     *
     * @param  GetAllCategoryRequestmodel $getAllCategory
     * @return HepsiburadaBaseResponseModel
     */
    public function getAllCategories(GetAllCategoryRequestmodel $getAllCategory)
    {
        $queryString = $this->generateQueryString($getAllCategory);
        $url = $this->getUrl(Endpoints::catalog,Endpoints::allCategories,$queryString);
        return $this->request("GET",$url);
    }      
    /**
     * getCategoryAttributes
     *
     * @param  string $categorID
     * @return HepsiburadaBaseResponseModel
     */
    public function getCategoryAttributes($categorID)
    {
        $url = $this->getUrl(Endpoints::catalog,Endpoints::getCategoriAttrributes);
        $url =$this->replaceParameters(["@categoriID"=>$categorID],$url);
        return $this->request("GET",$url);
    }      
    /**
     * getAttribureValue
     *
     * @param  string $categorID
     * @param  string $attributeSlug
     * @return HepsiburadaBaseResponseModel
     */
    public function getAttributeValue($categorID,$attributeSlug)
    {
        $url = $this->getUrl(Endpoints::catalog,Endpoints::getAttributeValues);
        $url =$this->replaceParameters(["@categoriID"=>$categorID,"@attributeSlug"=>$attributeSlug],$url);
        return $this->request("GET",$url);
    }  
}