<?php

interface ItemInterface
{
	public function setCost(float $cost);
	public function getCost();
}


class Item implements ItemInterface
{
	protected $cost = 0;

	public function setCost(float $cost)
	{
		$this->cost = $cost;
	}

	public function getCost()
	{
		return $this->cost;
	}
}

class Cart 
{
	protected $items = [];

	public function add(ItemInterface $item)
	{
		$this->items[] = $item;
	}

	public function total()
	{
		$total = 0;

		foreach ($this->items as $item) {
			$total += $item->getCost();
		}

		return $total;
	}
}


$item1 = new Item;
$item1->setCost(5);

$item2 = new Item;
$item2->setCost(20.5);

$cart = new Cart;
$cart->add($item1);
$cart->add($item2);

echo $cart->total();