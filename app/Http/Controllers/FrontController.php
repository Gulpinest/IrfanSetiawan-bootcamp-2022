<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Products;

class FrontController extends Controller
{
    public static function getIndex(Request $request)
    {
        $lebihDari = $request->ht;
        $kurangDari = $request->lt;
        $search = $request->search;

        $data['products'] = Products::
        where('product_name', 'like', '%'.$request->search.'%')
        ->where(function ($q) use ($lebihDari, $kurangDari, $search) {
            if(isset($search))
                $q->where('product_name', 'like', '%'.$search.'%');
            if (isset($lebihDari)) {
                $q->where('product_price', '>', $lebihDari);
            }

            if(isset($kurangDari)){
                $q->where('product_price', '<', $kurangDari);
            }
        })->paginate(8);
        // dd($data);

        return view('front.index',$data);
    }
}
