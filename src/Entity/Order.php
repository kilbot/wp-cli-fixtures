<?php

namespace Hellonico\Fixtures\Entity;

use WP_CLI;
use WP_Query;

class Order extends Post
{

	public $product_ids;

	/**
	 * {@inheritdoc}
	 */
	public function persist()
	{
		if (parent::persist()) {
			$order = wc_get_order($this->ID);
			foreach ($this->product_ids as $product_id) {
				$order->add_product(wc_get_product($product_id), rand(1, 10));
			}
			$order->calculate_totals();
		};

		return true;
	}

	/**
	 * @param array $products
	 * @throws \Exception
	 */
	public function addLineItems($product_ids = array())
	{
		$this->product_ids = array_unique($product_ids);
	}

	public function addFeeLines()
	{
		WP_CLI::line('fee line');
	}

	public function addShippingLines()
	{
		WP_CLI::line('shipping line');
	}

}
