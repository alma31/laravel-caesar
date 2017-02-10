<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chiffrement;

class ChiffrementController extends Controller{

	public function getview(){
		$chiffre = Chiffrement::all();
		return view ('encryptext', ['chiffre' => $chiffre]);
	}

	public function postForm(Request $request){
		return view('formCrypt');

	}
}
