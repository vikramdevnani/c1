<?php namespace App\Controllers;

use App\Models\Product;
class Products extends BaseController
{

	public function index()
	{

		$productModel = new Product();

		$products = $productModel->findAll(); // SELECT * FROM products;

		$data['products'] = $products;
		return view('index',$data);
	}

	public function new(){
		return view('product/new');
	}

	public function add(){
		$r = \Config\Services::request();
		$title = $r->getPost('title'); // $_POST['name'];
		$image = $r->getPost('image'); // $_POST['name'];
		$body_html = $r->getPost('body_html'); // $_POST['name'];
		$compare_price = $r->getPost('compare_price'); // $_POST['name'];
		$price = $r->getPost('price'); // $_POST['name'];
		$product = new Product();
		$arr = [
			'title' => $title,
			'image' => $image,
			'body_html' => $body_html,
			'compare_at_price' => $compare_price,
			'price' => $price
		];
		$res = $product->insert($arr);
		if($res){
			return redirect()->to('/products');
		}else{
			return "Mayday.";
		}

	}

	public function view ($id){

		$productModel = new Product();
		$product = $productModel->find($id);
		$data['product'] = $product;
		return view('product/view', $data);
	}

	//--------------------------------------------------------------------

}
