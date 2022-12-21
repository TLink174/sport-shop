<?php

namespace App\Http\Services;

use App\Models\Cart;
use App\Models\User;

class CartService
{

    private Cart $cart;
    private User $user;


    public function __construct(Cart $cart, User $user)
    {
        $this->cart = $cart;
        $this->user = $user;
    }
    public function create($id_user)
    {
        $cartCreated = $this->cart->create([
            'id_user' =>$id_user,
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
    public function findByIdUser($id)
    {
        return $this->cart->where('id_user', $id)->first();
    }

}
