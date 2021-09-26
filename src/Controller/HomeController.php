<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{

    /**
     * @param ProductRepository $productRepository
     * @return Response
     */
 public  function index(ProductRepository $productRepository):Response{
     $products = $productRepository->findLatest();
     return $this->render('pages/home.html.twig',[
         'products'=>$products
     ]);
 }
}