<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;
use App\Products;
use App\Manufacturers;
use App\IndustryTypes;
use App\ProductTypes;

class SearchController extends Controller {

	public function index(Request $request) {
		//var_dump(IndustryTypes::find(1)->name_hr);

		$products = $this->getProducts($request);
		$products->setPath('ponuda');

		return view('search', 
			['industryTypes' => IndustryTypes::all(),
				'productTypes' => ProductTypes::all(),
				'diameters' => Products::select(DB::raw('DISTINCT diameter'))->orderBy('diameter', 'asc')->get(),
				'carryingCapacities' => Products::select(DB::raw('DISTINCT carrying_capacity'))->orderBy('carrying_capacity', 'asc')->get(),
				'products' => $products
			]
		);
	}

	private function getProducts($request) {
		$query = Products::query();

		if($request->p) {
			$query->where('model', 'LIKE', '%' . $request->p . '%');
		}

		if($request->ti) {
			$query->where(function ($query) use ($request) {
                for($i = 0; $i < count($request->ti); $i++) {
					$query->orWhere('industry', $request->ti[$i]);
				}
            });
		}

		if($request->tp) {
			$query->where(function ($query) use ($request) {
                for($i = 0; $i < count($request->tp); $i++) {
					$query->orWhere('category', $request->tp[$i]);
				}
            });
		}

		if($request->d) {
			$query->where(function ($query) use ($request) {
                for($i = 0; $i < count($request->d); $i++) {
					$query->orWhere('diameter', $request->d[$i]);
				}
            });
		}

		if($request->n) {
			$query->where(function ($query) use ($request) {
                for($i = 0; $i < count($request->n); $i++) {
					$query->orWhere('carrying_capacity', $request->n[$i]);
				}
            });
		}

		return $query->paginate(10);
	}
}