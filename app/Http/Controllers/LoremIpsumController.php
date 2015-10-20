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
	return view('lorem-ipsum.index');

    }

    public function postIndex(Request $request)
    {
	$this->validate($request, [
		'numOfParagraphs' => 'required|numeric',
	]);

	$numOfparagraphs = 5;	//Set the default paragraph to 5 as fallback

	$data = $request->all();	//Get all the request value into data object

        $generator = new LIGenerator();					//Create the Lorem Ipsum generator object
	if(isset($_POST['numOfParagraphs'])) {
		$numOfParagraphs = $request->input('numOfParagraphs');  //Get the post field from request object
	}
	$paragraphs = $generator->getParagraphs($numOfParagraphs);  	//Create the paragraphs from the generator instance

	return view('lorem-ipsum.index')->with(['data' => $data, 'paragraphs' => $paragraphs]);
    }

}
