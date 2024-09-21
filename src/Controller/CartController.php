<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\service\cart;
use App\service\product;

#[Route('/api', name: 'api')]
class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart', methods: ['GET'])]
    public function index(): Response
    {
        $product1 = new product(1, 'iphone', 2500, 10);
        $product2 = new product(2, 'mouse', 400, 10);
        $cart = new cart();

        $shopCart = 'The Cart Details ';
        $cartItem1 = $cart->addProduct($product1, 1);
        $cartItem2 = $product2->addTocart($cart, 1);
        $totalQ = $cart->totalQuantitiy();
        $totalP = $cart->totalprice();
        $Beach = $cart->eachprice();

        $cartItem1->increaseQuantity();
        $cartItem2->increaseQuantity();
        $cartItem1->increaseQuantity();

        $Aeach = $cart->eachprice();
        $totalNQ = $cart->totalQuantitiy();
        $totalNP = $cart->totalprice();

        return $this->render('cart/index.html.twig', [
            'cart' => $shopCart,
            'totalQ' => $totalQ,
            'totalP' => $totalP,
            'totalNQ' => $totalNQ,
            'totalNP' => $totalNP,
            'Beach' => $Beach,
            'Aeach' => $Aeach

        ]);
    }
}
