<?php

namespace App\Http\Services;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\User;


class CartDetailService
{

    private CartDetail $cartDetail;
    private User $user;
    Private Cart $cart;


    public function __construct(Cart $cart, User $user, CartDetail $cartDetail)
    {
        $this->cart = $cart;
        $this->user = $user;
        $this->cartDetail = $cartDetail;
    }
    public function create($request, $id_cart, $id_product)
    {
        $cartDetailCreated = $this->cartDetail->create([
            'id_cart' => $id_cart,
            'id_product' => $id_product,
            'color' => $request->color,
            'size' => $request->size,
            'quantity' => $request->quantity,
        ]);
    }
    public function delete($id)
    {
        $cartDetail = $this->getById($id);
        $cartDetail->delete();
        return $cartDetail;
    }
    public function getAll()
    {
        return $this->cartDetail->all();
    }
    public function getById($id)
    {
        return $this->cartDetail->find($id);
    }
    public function find($id)
    {
        return $this->cartDetail->find($id);
    }
    public function getByIdCart($id)
    {
        return $this->cartDetail->where('id_cart', $id)->get();

    }

}
