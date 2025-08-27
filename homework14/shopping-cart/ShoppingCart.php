<?php

require_once 'CartItem.php';
require_once 'product.php';

class ShoppingCart
{
    private int $totalItems;
    private int|float $totalPrice;
    private CartItem $cartItem;


    private array $items = [];

    //  add item
    public function addItem(Product $product, int $productQty)
    {
        $productId = $product->getId();
        if (isset($this->items[$productId])) {
            $this->updateQty($productId, $productQty);
            echo 'item quantity has been updated.';
        } else {
            $this->items[$productId] = new CartItem($product, $productQty);
            echo 'item has been added.';
        }
    }

    //  remove item
    public function removeItem($productId)
    {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
            echo 'item has been removed.';
        }
    }


    //  update quantity
    public function updateQty(int $productId, int $productQty)
    {
        $this->items[$productId]->setQty($productQty);
    }

    //  get items
    public function getItems()
    {
        return $this->items;
    }
    //  get item by id
    public function getItem($productId)
    {
        return $this->items[$productId] ?? 'not found!';
    }


    //  get total price
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            // print_r($item);
            $totalPrice += $item->getItemPrice();
        }
        return $totalPrice;
    }

    //  count items
    public function countItems()
    {
        return count($this->items);
    }

    //  clear cart
    public function clearItems()
    {
        $this->items = [];
    }
}