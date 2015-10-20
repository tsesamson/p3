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
	return view('user-generator.index');
    }

    public function postIndex(Request $request)
    {
	$this->validate($request, [
		'numOfUsers' => 'required|numeric|min:1|max:50',
	]);

	$numOfUsers = 1;	//Set the default users to 1 as fallback

	$data = $request->all();	//Get all the request value to pass back to view
	$users = array();		//Array object to hold all the generated users;

	if(isset($_POST['numOfUsers'])) {
		$numOfUsers = $request->input('numOfUsers'); //et the post field from request object for number of users

		//Check to make sure it doesn't exceed 50 even though we have validation
		if($numOfUsers > 50) {
			$numOfUsers = 1;
		}
	}

	for($i=0; $i<$numOfUsers; $i++) {
    		$faker = FakerGenerator::create();	//Create the Faker object for profile generation
		array_push($users, $faker);		//Push the profile into the users array
	}

	return view('user-generator.index')->with('users', $users);
    }

}
