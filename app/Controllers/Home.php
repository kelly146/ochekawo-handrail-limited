<?php

namespace App\Controllers;

use App\Models\railmod;

class Home extends BaseController
{
    private $rail;
    public function __construct(){
        $this->rail=new railmod();
    }
    public function index()
    {
        $data=[
            'base'=>base_url(),
            'appdet'=>$this->rail->getappdetails(),
            'allcat'=>$this->rail->getallcategories('ASC'),
            'allprod'=>$this->rail->getlimitedproducts(6,'ASC'),
            'trendprod'=>$this->rail->gettrendprod('DESC',3),
            'detcat'=>$this->rail->getdetailedcat()
        ];
        return view('index',$data);
    }
    public function aboutus()
    {
        $data=[
            'base'=>base_url(),
            'appdet'=>$this->rail->getappdetails(),
            'allcat'=>$this->rail->getallcategories('ASC'),
            'allprod'=>$this->rail->getlimitedproducts(6,'ASC'),
            'trendprod'=>$this->rail->gettrendprod('DESC',3),
        ];
        return view('aboutus',$data);
    }
    public function contactus()
    {
        $data=[
            'base'=>base_url(),
            'appdet'=>$this->rail->getappdetails(),
            'allcat'=>$this->rail->getallcategories('ASC'),
            'detcat'=>$this->rail->getdetailedcat(),
            'trendprod'=>$this->rail->gettrendprod('DESC',3),
        ];
        return view('contactus',$data);
    }
    public function category($cat_id)
    {
        // if($cat_id==0){

        // }
        $limit=15;
        $data=[
            'cat_id'=>$cat_id,
            'limit'=>$limit,
            'base'=>base_url(),
            'appdet'=>$this->rail->getappdetails(),
            'allcat'=>$this->rail->getallcategories('ASC'),
            'prodbycat'=>$cat_id==0?$this->rail->getallproducts('DESC',15):$this->rail->getproductsbycat($cat_id,$limit,'DESC'),
            'count'=>$this->rail->gettotalpc($cat_id,'DESC')
        ];
        
        return view('category',$data);
    }
    public function product($cat_id)
    {
        $limit=15;
        $data=[
            'limit'=>$limit,
            'base'=>base_url(),
            'appdet'=>$this->rail->getappdetails(),
            'allcat'=>$this->rail->getallcategories('ASC'),
            'allprod'=>$this->rail->getlimitedproducts(6,'ASC'),
            'trendprod'=>$this->rail->gettrendprod('DESC',3),
            'prodbyid'=>$this->rail->getproductsbyid($cat_id,$limit,'DESC')
        ];
        return view('product',$data);
    }
}