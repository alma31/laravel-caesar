<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chiffrement;

class ChiffrementController extends Controller{

	public function getview(){
		$chiffre = Chiffrement::all();
		return view ('encryptext', ['chiffre' => $chiffre]);
	}

	public function viewForm(){
		return view('formCrypt');
	}

	public function postForm(Request $request){
		$décalage = $request->decalage;
		$arr = str_split($request->message,1);
		$arr2 = range('a','z');
		$chiffre = "";

		foreach ($arr as $value) {

			$val = $value;
			$val3 = array_search($val,$arr2)+$décalage;
			$val = $arr2[$val3];
			$chiffre .= $val;

		}

		$message = new Chiffrement();
		$message->text = $chiffre;
		$message->save();
		return redirect()->action('ChiffrementController@getview');

	}

}
