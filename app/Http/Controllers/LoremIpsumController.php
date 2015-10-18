<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use LIGenerator;

class LoremIpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $generator = new LIGenerator();
	$paragraphs = $generator->getParagraphs(5);

	return view('lorem-ipsum.index')->with('paragraphs', $paragraphs);

    }

    public function postIndex(Request $request)
    {
	return "";
    }

}
