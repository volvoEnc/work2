<?php

namespace App\Http\Controllers;

use App\Category;
use App\Price;
use App\Product;
use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Carbon\Carbon;

use App\Models\APIParsing;

class CatalogController extends Controller
{
    public function productsSync(Request $request)
    {
        //store a file for some reason
        $filename = 'products\products_' . uniqid() . '.xml';

        $request->file('file')->storeAs('apis/', $filename);

        $parsing = new APIParsing();

        $parsing->type = 'products';
        $parsing->filename = $filename;
        $parsing->save();

        return true;
    }

    public function pricesSync(Request $request)
    {
       //store a file for some reason
       $filename = 'prices\prices_' . uniqid() . '.xml';

       $request->file('file')->storeAs('apis/', $filename);

       $parsing = new APIParsing();

       $parsing->type = 'prices';
       $parsing->filename = $filename;
       $parsing->save();

       return true;
    }

    /* also as остатки */
    public function amountSync(Request $request)
    {
        //store a file for some reason
        $filename = 'ammounts\ammounts_' . uniqid() . '.xml';

        $request->file('file')->storeAs('apis/', $filename);

        $parsing = new APIParsing();

        $parsing->type = 'ammounts';
        $parsing->filename = $filename;
        $parsing->save();

        return true;
    }

    public function bonusesSync(Request $request)
    {
        //store a file for some reason
        $filename = 'bonuses\bonuses_' . uniqid() . '.xml';

        $request->file('file')->storeAs('apis/', $filename);

        $parsing = new APIParsing();

        $parsing->type = 'bonuses';
        $parsing->filename = $filename;
        $parsing->save();

        return true;
    }
}
