<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use FakerGenerator;

class UserGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
    	$faker = FakerGenerator::create();

	//$output = $faker->name . "<br><br>";
	//$output .= $faker->address . "<br><br>";
	//$output .= $faker->text . "<br><br>";

	//return $output;

	return view('user-generator.index')->with('faker', $faker);
    }

    public function postIndex(Request $request)
    {
	//
    }

}
