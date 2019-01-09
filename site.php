<?php 

use \Hcode\Page;
use \Hcode\Model\Product;

$app->get('/', function() {
    
    $products = Product::listAll();

    $page = new Page();
    //var_dump(Product::checkList($products));exit;    
    $page->setTpl("index",[
    	'products'=>Product::checkList($products)
    ]);

});



 ?>