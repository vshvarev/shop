<?php

namespace App\Services\cart;

class Cart
{
    public function addToCart($product, $quantity)
    {
        if (session()->has("cart.{$product->id}")) {
            session(["cart.{$product->id}.quantity" => session("cart.{$product->id}.quantity") + $quantity]);
        } else {
            session(["cart.{$product->id}" => [
                'id' => $product->id,
                'title' => $product->title,
                'slug' => $product->slug,
                'price' => $product->price,
                'quantity' => $quantity,
            ]]);
        }

        if (session()->has('cart_quantity')) {
            session(['cart_quantity' => session('cart_quantity') + $quantity]);
        } else {
            session(['cart_quantity' => $quantity]);
        }

        if (session()->has('cart_total')) {
            session(['cart_total' => session('cart_total') + $quantity * $product->price]);
        } else {
            session(['cart_total' => $quantity * $product->price]);
        }
    }

    public function deleteFromCart($product)
    {
        session()->decrement('cart_quantity', session("cart.$product->id.quantity"));
        if (session('cart_quantity') == 0) {
            session()->flush();
        } else {
            session(['cart_total' => session('cart_total') - session("cart.$product->id.quantity") * $product->price]);
            session()->forget("cart.$product->id");
        }
    }

    public function increment($product)
    {
        session()->increment('cart_quantity');

        session()->increment('cart_total', $product->price);

        session()->increment("cart.$product->id.quantity");
    }

    public function decrement($product)
    {
        session()->decrement('cart_quantity',1);

        session()->decrement('cart_total', $product->price);

        session()->decrement("cart.$product->id.quantity", 1);
    }
}
