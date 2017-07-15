<?php

class product{
	public $product;
	public $piece;
	public $set;
	public $packet;
	public $box;
	public $price;
	function __construct($product,$piece,$set,$packet,$box,$price){
		$this->product=$product;
		$this->piece=$piece;
		$this->set=$set;
		$this->packet=$packet;
		$this->box=$box;
		$this->price=$price;
			
	}
}
?>