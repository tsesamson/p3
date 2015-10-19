<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class XkcdGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
    	//$faker = FakerGenerator::create();

	return view('xkcd-generator.index');
    }

    public function postIndex(Request $request)
    {
	//
    }

}
