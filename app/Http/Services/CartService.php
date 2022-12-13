<?php

namespace App\Http\Services;

use App\Models\Cart;

class CartService
{

    private Cart $cart;


    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    public function create($request)
    {
        $cartCreated = $this->cart->create([
            'id_user' => $request->id_user,
        ]);
    }
    public function delete($id)
    {
        $cart = $this->getById($id);
        $cart->delete();
        return $cart;
    }
    public function getAll()
    {
        return $this->cart->all();
    }
    public function getById($id)
    {
        return $this->cart->find($id);
    }
    public function find($id)
    {
        return $this->cart->find($id);
    }

}
