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
      return view('xkcd-generator.index');
    }

    public function postIndex(Request $request)
    {
      	$numOfUsers = 1;	//Set the default users to 1 as fallback

        $data = $request->all();	//Get all the request value to pass back to view
        $users = array();		//Array object to hold all the generated users;

        if(isset($_POST['addNum'])) {
            $numOfUsers = $request->input('numOfUsers'); //get the post field from request object
        }
        if(isset($_POST['addSym'])) {
            $numOfUsers = $request->input('numOfUsers'); //get the post field from request object
        }
        
        return view('xkcd-generator.index')->with('password', $this->getXkcdPassword());
    }
    
  //Function used to load the dictionary
  private function getDict() {
    try {
      $dic = file(app_path() .'\corncob_lowercase.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    } catch (Exception $e) {
      echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    
    return $dic;
  }

  private function getXkcdPassword($numOfWords=4, $delimiter='-', $addSpecialChar='', $addNum=false, $addSym=false, $isProperCase=false){
    $result = ''; //Define varibale for password result
    $dic = $this->getDict();
    $maxLength = 7;

    //Check to see if this is a form submit request
    if (!empty($_POST))
    {
      //Grab the options
      
      //Assign the value from the form if it is an integer
      /*if(isset($_POST['numOfWords']) && is_numeric($_GET['numOfWords'])) {
        $numOfWords = $_POST['numOfWords'];
      }*/
      
      //Assign the value for demlimiter and make sure char is the length of 1
      /*if(isset($_GET['delimiter']) && strlen($_GET['delimiter'])>=1) {
        $delimiter = substr($_GET['delimiter'], 0, 1);
      }*/
      
      //Assign the value for addSpecialChar and make sure char is the length of 1
      /*if(isset($_GET['addSpecialChar']) && strlen($_GET['addSpecialChar'])>=1) {
        $addSpecialChar = substr($_GET['addSpecialChar'], 0, 1);
      }*/
    }
    
    //Do not allow the number of words to go over maxlength
    if($numOfWords > $maxLength) {
      $numOfWords = $maxLength;
    }
    
    //For loop to generate the password
    for($i = 0; $i <$numOfWords; $i++) {
        $randNum = rand(0, count($dic));
        
        //Determine if proper case option is selected then add random word to result
        //if(isset($_GET['isProperCase']) || $isProperCase) {
        //  $result .= ucwords($dic[$randNum]);
        //} else {
          $result .= $dic[$randNum];
        //}
        
        //Don't add delimiter if it is the last word
        if($i < $numOfWords -1) {
          $result .= $delimiter;
        }
    }
    
    //Inject a special char into the password if it is defined
    /*if(strlen($addSpecialChar) == 1) {
      $result = addSpecialChar($result, $addSpecialChar);
    }*/
    
    //Add a special character if that option is selected
    if(isset($_POST['addSym']) || $addSym) {
      $result = $this->addRandomSpecialChar($result);
    }
    
    //Add a random number if that option is selected
    if(isset($_POST['addNum']) || $addNum) {
      $result = $this->addNum($result);
    }
    
    return $result;
  }

  //Function used to add special char in a random spot of the result string
  private function addSpecialChar($inputString, $specialChar) {
    $randSpot = rand(0, strlen($inputString));
    
    return substr($inputString, 0, $randSpot) . $specialChar . substr($inputString, $randSpot, strlen($inputString));
  }
  
  //Function used to add random special char from an array then inject it at a random spot of the result string
  private function addRandomSpecialChar($inputString) {
    $charList = array('~','!','@','#','$','%','^','&','*','(',')','_','+','=','[',']','{','}','|','?','/');
    $specialChar = $charList[rand(0,count($charList)-1)];
    $randSpot = rand(0, strlen($inputString));
    
    return substr($inputString, 0, $randSpot) . $specialChar . substr($inputString, $randSpot, strlen($inputString));
  }
  
  //Function to randomly select a number from 0-9 then add it to a random spot in the result string
  private function addNum($inputString) {
    $randNum = rand(0, 9);
    $randSpot = rand(0, strlen($inputString));
    
    return substr($inputString, 0, $randSpot) . $randNum . substr($inputString, $randSpot, strlen($inputString));
  }

}
