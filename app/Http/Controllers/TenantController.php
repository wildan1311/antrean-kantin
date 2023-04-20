<?php

namespace App\Http\Controllers;

use App\Http\Resources\TenantFoodsResource;
use App\Http\Resources\TenantResource;
use App\Models\Category;
use App\Models\Food;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenantController extends Controller
{
    function getTenant(){
        $tenants = Tenant::with('foods')->get();
        return TenantResource::collection($tenants);
    }

    function getFood($id){
        $foodscari = Tenant::with('foods.categories')->findOrFail($id);
        $foods = new TenantFoodsResource($foodscari);
        return response()->json([
            "data"=>$foods,
            "category"=>$this->getCategory($id),
        ]);
        // return new TenantFoodsResource($foods);
    }

    function getCategory($id){
        $query = DB::table('food')
                    ->join('category', 'food.category', '=', 'category.id')
                    ->distinct()
                    ->select('category.name')
                    ->where('food.tenant_id', '=', $id)
                    ->pluck('category.name');
        return $query;
    }

    function getRangePrice($id){
        $rangePrice = DB::table('food')
                    ->join('tenant', 'tenant_id', '=', 'tenant.id')
                    ->distinct()
                    ->select('price')
                    ->where('tenant_id', '=', $id)
                    ->orderBy('price', 'asc')
                    ->pluck('price')
                    ->first();
        return $rangePrice;
    }
}
