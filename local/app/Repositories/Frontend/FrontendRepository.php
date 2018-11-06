<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Post;
use App\Product;

class FrontendRepository implements FrontendRepositoryInterface
{
    public function getFrontend()
    {
        $data=[];
        $product=new Product();
        $best_sell_product=$product->getBestSellProduct(8);
        $data['best_sell_product']=$best_sell_product;
        return $data;
    }

    public function getFrontendCommon()
    {
        // TODO: Implement getFrontendCommon() method.
    }

    public function getAllMenuFrontend()
    {
        $menu = new Menu();
        $data = $menu->getAllOrderBy('order');
        return $data;
    }


}