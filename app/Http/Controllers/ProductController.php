<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Products;
use App\Manufacturers;
use App\IndustryTypes;
use App\ProductTypes;

class ProductController extends Controller {

	public function index(Request $request) {
		$product = Products::find($request->id);

		$product->manufacturer_name = Manufacturers::find($product->manufacturer)->name;
		$productType = ProductTypes::find($product->category);
		$product->category_name_hr = $productType->name_hr;
		if($product->industry) $product->industry_name_hr = IndustryTypes::find($product->industry)->name;
		$features = ['diameter',
						'width',
						'height',
						'carrying_capacity',
						'hole_diameter',
						'hub_length',
						'weight',
						'stem_diameter',
						'turn_radius',
						'offset',
						'stem_length',
						'plate_dimensions',
						'mounting_hole_spacing',
						'mounting_hole_diameter',
						'polyamid_height',
						'polyamid_stem_diameter',
						'polyamid_turn_radius',
						'polyamid_offset',
						'polyamid_wheel_spacing',
						'total_width',
						'H2_total_height',
						'H1_loaded_total_height',
						'L_spring_travel',
						'spring_tension',
						'initial_tension',
						'stainless',
						'chrome'];

		$features_hr = ['diameter' => 'promjer',
						'width' => 'širina',
						'height',
						'carrying_capacity',
						'hole_diameter',
						'hub_length',
						'weight',
						'stem_diameter',
						'turn_radius',
						'offset',
						'stem_length',
						'plate_dimensions',
						'mounting_hole_spacing',
						'mounting_hole_diameter',
						'polyamid_height',
						'polyamid_stem_diameter',
						'polyamid_turn_radius',
						'polyamid_offset',
						'polyamid_wheel_spacing',
						'total_width',
						'H2_total_height',
						'H1_loaded_total_height',
						'L_spring_travel',
						'spring_tension',
						'initial_tension',
						'stainless',
						'chrome'];

		$details = ['manufacturer_name',
						'category_name_hr',
						'industry_name_hr',
						'heat_resistance'];

		$details_hr = ['manufacturer_name' => 'Naziv proizvođača',
						'category_name_hr' => 'Vrsta proizvoda',
						'industry_name_hr' => 'Namjena',
						'heat_resistance' => 'Otpornost na toplinu'];

		return view('product', 
			['product' => $product,
				'productType' => $productType,
				'features' => $features,
				'features_hr' => $features_hr,
				'details' => $details,
				'details_hr' => $details_hr
			]
		);
	}

}