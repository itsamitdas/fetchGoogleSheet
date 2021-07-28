<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FetchGoogleSheet extends Controller
{
    //GET DATA FROM GOOGLE SPREDSHEET
    public function index(){
        $encodeData = file_get_contents("https://spreadsheets.google.com/feeds/list/12fJ9gkL8nFZ8COtnPoYV9mOKjobDd1v-WdXIiCfDsOg/od6/public/basic?alt=json");

        //GET JSON DATA
        $decodeData = (array)json_decode($encodeData);
        $feed = (array)$decodeData['feed'];

        //GET ALL SHEET ENTRIES
        $entries = $feed['entry'];
        return view('googleSheet', ['sheetData' => $entries]);
    }
}
