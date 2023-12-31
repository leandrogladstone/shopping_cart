<?php

namespace app\classes;

use app\interfaces\CartInterface;


class Cart implements CartInterface {

    public function add($product) {

        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        (!isset($_SESSION['cart'][$product])) ?
            $_SESSION['cart'][$product] = 1:
            $_SESSION['cart'][$product] += 1;

    }

    public function remove($product) {

    }

    public function quantity($product, $quantity) {

    }

    public function clear() {

    }

    public function cart() {
        if(isset($_SESSION['cart'])) {
            return $_SESSION['cart'];
        }

        return[];
    }

    public function dump() {
        if(isset($_SESSION['cart'])) {
            var_dump($_SESSION['cart']);
        }

    }

}