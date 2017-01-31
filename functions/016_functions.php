<?php
//creating a CLASS called "Customer"
	class Customer {
		public $customerName	= "IBM";
		public $customerAddress	= "Dhaka";

		public function show_infos(){
			return array (
				"Name "=> $this->customerName, 
				"Address "=> $this->customerAddress);
		}
	}

//Creating an OBJECT of "Customer" class.
	$newCustomer	=	new Customer ();
	$newCustomer->customerName	=	"Hasib";

	function show_customer_info (Customer $c) {
		$infos = $c->show_infos();

		foreach ($infos as $k=>$v) {
			echo "Customer ".$k. ": " . $v . "<br>";
		}
	}

	show_customer_info($newCustomer);
