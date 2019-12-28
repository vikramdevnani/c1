<?php namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
	protected $table      = 'products';
	protected $allowedFields = ['title', 'body_html','compare_at_price','price','image'];
}
