<?php

namespace App\Http\Controllers;

use App\Category;
use App\Price;
use App\Product;
use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CatalogController extends Controller
{
    public function XMLParse(Request $request)
    {
        return new \SimpleXMLElement($request->file('file')->get());
    }


    public function productsSync(Request $request)
    {
        $productsData = $this->XMLParse($request);
        foreach ($productsData as $productData) {
            $product = Goods::findByArt($productData->MATNR);
            if (!$product) {
                $product = Goods::add($productData);
            }
        }
        Category::build();
        return true;
    }

    public function pricesSync(Request $request)
    {
        $pricesData = $this->XMLParse($request);
        foreach ($pricesData as $priceData) {
            $product = Product::findByCode($priceData->EANNR);
            if (!$product) {
                $product = Product::createEmpty($priceData->EANNR, (int)$priceData->MATNR, (int)$priceData->SHOP);
            }
            $product->setPrice((float)$priceData->PRICE);
        }
        return true;
    }

    public function amountSync(Request $request)
    {
        $amountsData = $this->XMLParse($request);
        foreach ($amountsData as $amountData) {
            $product = Product::findByCode($amountData->EANNR);
            if (!$product) {
                $product = Product::createEmpty($amountData->EANNR, (int)$amountData->MATNR, (int)$amountData->SHOP);
            }
            $product->setAmount((float)$amountData->STOCK);
            $product->setAssort((int)$amountData->ASSORT);
        }
        return true;
    }

    public function bonusesSync(Request $request)
    {
        sleep(rand(5, 60));
        return true;
    }
}
