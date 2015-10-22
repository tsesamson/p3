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
		'numOfParagraphs' => 'required|numeric|min:1|max:50',
	]);

	$numOfParagraphs = 5;	//Set the default paragraph to 5 as fallback

	$data = $request->all();	//Get all the request value into data object

        $generator = new LIGenerator();					//Create the Lorem Ipsum generator object

	if(isset($_POST['numOfParagraphs'])) {
		$numOfParagraphs = $request->input('numOfParagraphs');  //Get the post field from request object

		//Check to make sure it doesn't exceed 50
		if($numOfParagraphs > 50) {
			$numOfParagraphs = 5;
		}
	}
	$paragraphs = $generator->getParagraphs($numOfParagraphs);  	//Create the paragraphs from the generator instance

	$request->flash(); 	//Sends the form data back to input
	return view('lorem-ipsum.index')->with(['paragraphs' => $paragraphs]);
    }

}
