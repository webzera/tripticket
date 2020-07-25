<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FlightsearchController extends Controller
{
	public function checkflight(){
	$cabinClass='ECONOMY';
    $from_country_code='DEL'; $to_country_code='BOM';
    $travelDate ='2020-12-18';

	$response = Http::withHeaders([
		'Content-Type' => 'application/json',
		'Accept' => 'application/json',
		'apikey' => '711431d46e828a-19de-458f-8519-b601990b6072'
	])->post('https://apitest.tripjack.com/fms/v1/air-search-all', [
		'searchQuery' => [
			'cabinClass' => $cabinClass,
			'paxInfo' =>[
				'ADULT' => '1',
				'CHILD' => '1',
      			'INFANT' => '1' 
			],
			'routeInfos' => [
				[
					'fromCityOrAirport' => ['code' => $from_country_code ],
					'toCityOrAirport' => ['code' => $to_country_code],
					'travelDate' => $travelDate
				]
			]
		]
	]);

	return view('api.searchresult',['response' => $response->json()]);
	}    
}



//https://apitest.tripjack.com/fms/v1/farerule
  // "id" => "1-3242380452_DELBOMG82501_234735354710935",
  // "flowType" => "REVIEW"

//https://apitest.tripjack.com/fms/v1/air-search-all



// https://apitest.tripjack.com/oms/v1/air/unhold

// "bookingId" => "TJ1096ZSSSSSWW",
// "pnrs" => ["XXXAAA"]