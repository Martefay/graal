<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;

class CartManagment {

    static public function addItemCart($product_id)
    {
        $cart_items = self::getCartItemsFromCookie();
        $existing_item = null;

        foreach($cart_items as $key => $item) {
            if($item['product_id'] == $product_id) {
                $existing_item = $key;
                break;
            }
        }
    }

    // добавление записей в куки
    static public function addCartItemsToCookie($cart_items)
    {
        Cookie::queue('cart_items', json_encode($cart_items), 60*24*30);
    }
    // удаление записей из куки
    static public function clearCartItems()
    {
        Cookie::queue(Cookie::forget('cart_items'));
    }
    // передача данных из куки в шаблон
    static public function getCartItemsFromCookie()
    {
        $cart_items = json_decode(Cookie::get('cart_items'), true);
        if (!$cart_items) {
            $cart_items = [];
        }

        return $cart_items;
    }
}