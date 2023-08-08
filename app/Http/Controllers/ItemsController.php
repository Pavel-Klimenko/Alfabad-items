<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;


class ItemsController extends Controller
{
    public function getItems()
    {
        $items = Product::all();
        return view('items', compact('items'));
    }


    public function assignCategoriesToItems() {
        $products = Product::all();

        $sawCategories = Category::find([3, 4, 5]); //ids категорий пил
        $electricalCategories = Category::find([1, 2]); //ids категорий электрооборудования

        foreach ($products as $item) {
            //пила
            if ($item->id == 2) $item->categories()->attach($sawCategories);
            //электростанция
            if ($item->id == 3) $item->categories()->attach($electricalCategories);
        }
    }


    public function displayProducts() {
        $arProductsWithCategories = [2 , 3];
        $results = [];
        $products = Product::whereIn('id', $arProductsWithCategories)->get();
        foreach ($products as $prod) {
            $results[$prod->id]['NAME'] = $prod->name;

            $productCategories = $this->getProductCategories($prod->id);
             foreach ($productCategories as $category) {
                 $results[$prod->id]['CATEGORIES'][] = $category->name;
             }
        }

        return view('productsCategories', compact('results'));
    }


    private function getCategoryProducts($categoryId) {
        $category = Category::find($categoryId);
        return $category->products;
    }

    private function getProductCategories($productId) {
        $product = Product::find($productId);
        return $product->categories;
    }


}
