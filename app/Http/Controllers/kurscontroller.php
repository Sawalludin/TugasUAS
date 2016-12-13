<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kurscontroller extends Controller
{  
	public function kursjson() {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, 'http://www.adisurya.net/kurs-bca/get');
		$kurs_bca = curl_exec($ch);
		curl_close($ch);
		return $kurs_bca;
	}

	public function kurs()
	{
		return view('app');
	}
}
