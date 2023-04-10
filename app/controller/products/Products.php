<?php 



class Products extends Controller
{

  public function index()
  {
    echo "this is the products control";

    $this->view('products/products');
  }
}


