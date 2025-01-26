<?php

namespace App\Controller;

use App\DTO\Props\CartDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\CartService;
use App\Service\Connect;
use App\Service\ProductControll;

#[Route('/api', name: 'api')]

class CartController extends AbstractController
{

    public function __construct(public CartService $CartService, public CartDto $CartDto, public ProductControll $productControll, public Connect $Connect)
    {
    }

    #[Route('/cart', name: 'app_cart', methods: ['GET'])]

    public function index(): Response
    {

        $shopCartTitle = 'The Cart Details ';

        $cartItem1 = $this->CartService->addProduct($this->productControll->Product1(), 1);
        $cartItem2 = $this->CartService->addProduct($this->productControll->Product2(), 1);

        $cartItem1->increaseQuantity();
        $cartItem2->increaseQuantity();
        $cartItem1->increaseQuantity();


        return $this->render('cart/index.html.twig', [

            'cart' => $shopCartTitle,
            'totalQuantitiy' => $this->CartService->totalQuantitiy(),
            'totalPrice' => $this->CartService->totalprice(),
            'idFirstItem' => $this->CartDto->items[0]->getProduct()->getId(),
            'TitleFirstItem' => $this->CartDto->items[0]->getProduct()->getTitle(),
            'PriceFirstItem' => $this->CartDto->items[0]->getProduct()->getPrice(),
            'QuantitiyFirstItem' => $this->CartDto->items[0]->getQuantitiy(),
            'finalPriceFirstItem' => $this->CartDto->items[0]->getQuantitiy() * $this->CartDto->items[0]->getProduct()->getPrice(),

            'id2Item' => $this->CartDto->items[1]->getProduct()->getId(),
            'Title2Item' => $this->CartDto->items[1]->getProduct()->getTitle(),
            'Price2Item' => $this->CartDto->items[1]->getProduct()->getPrice(),
            'Quantity2Item' => $this->CartDto->items[1]->getQuantitiy(),
            'finalPrice2Item' => $this->CartDto->items[1]->getQuantitiy() * $this->CartDto->items[1]->getProduct()->getPrice(),

        ]);
    }



    #[Route('/car', methods: ['GET'])]

    public function Car()
    {
        $Car = $this->Connect->getData();
        print_r($Car);

        return $this->json('');
    }
}