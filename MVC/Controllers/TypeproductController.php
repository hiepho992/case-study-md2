<?php
require_once "./models/DBconnection.php";
class TypeproductController extends BaseController{

    private $TypeproductModel;
    
    public function __construct()
   {
      $this->load('TypeproductModel');
      $this->TypeproductModel = new TypeproductModel(DBconnection::make());
   }
    public function index(){

        $typeproducts = $this->TypeproductModel->selectAll();
        return $this->view('page.header', ['typeproducts' => $typeproducts]);  
    }
}


?>