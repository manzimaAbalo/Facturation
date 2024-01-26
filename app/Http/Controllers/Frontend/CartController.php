<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    use Cart;
    public function index()
    {
        $cart = Cart::getContent()->toArray();
        return view('frontend.pages.shop.cartPage', compact('cart'));
    }

    public function add_productToCart(Request $request){
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Récupérer le produit depuis la base de données
        $product = Product::find($productId);

        // Vérifier si le produit existe
        if(!$product) {
            // Gérer l'erreur, rediriger ou retourner un message
            session()->flash('error', 'Product not found');
            return redirect()->back()->with('error', 'Product not found');
        }

        // Ajouter le produit au panier
        $carId = rand(100000, 999999);
        $cart = [
            'quantity' => $quantity,
            'price' => $product->price,
            'product' => $product,
            'image' => $product->images[0],
            'id' => $carId,
            'name' => $product->name,
            'attributes' => [
                'image' => $product->images[0],
                'size' => $request->size,
                'color' => $request->color
            ],
            'associatedModel' => $product
        ];
        Cart::add($cart);

        // Mettre à jour la session avec le nouveau panier
        session()->flash('success', 'Produit ajouté au panier avec succès');
        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès');
    }


    public function update_productQuantity(Request $request){
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $cartId = $request->input('cart_id');

        $cart = Cart::get($cartId);

        // Vérifier si le produit existe dans le panier
        if (isset($cart)) {
            // Mettre à jour la quantité du produit
            $cart['quantity'] = $quantity;

            Cart::update($cartId, $cart);
            // Mettre à jour la session avec le panier modifié
            session()->flash('success', 'Quantité mise à jour avec succès');
        }
        // Rediriger ou retourner une réponse
        return redirect()->back()->with('success', 'Quantité mise à jour avec succès');
    }

    public function remove_productFromCart(Request $request){
        $cartId = $request->input('cart_id');
        Cart::remove($cartId);
        session()->flash('success', 'Produit supprimé avec  ');
        return redirect()->back()->with('success', 'Produit supprimé avec succès');
    }


    public function deleteCart(Request $request){
        Cart::clear();
        session()->flash('success', 'Panier vidé avec succès');
        return redirect()->back();
    }

    public function getCartSubTotal(){

    }

    public function getCartTotal(){
        $cart = Cart::getContent();
        $totalPrice = $cart->getPriceSum();
        return $totalPrice;
    }
}
