<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;


class RoomController extends Controller
{
    public function search(Request $request)
    {
        $client = new Client();
        $word = $request->word;

        $search = $client->get("https://www.showroom-live.com/api/search/room?word={$word}");
        $searchResult = json_decode($search->getBody()->getContents());

        return response()->json($searchResult);
       
    }
    public function search_autocomplete(Request $request)
    {
        $client = new Client();
        $word = $request->word;

        $search = $client->get("https://www.showroom-live.com/api/search/autocomplete_room?word={$word}");
        $searchResult = json_decode($search->getBody()->getContents());

        return response()->json($searchResult);
       
    }
}
