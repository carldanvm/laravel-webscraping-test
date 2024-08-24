<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;



class ScrapController extends Controller
{
    public function index($id = null){

        if(!$id){
            return "ID de Steam incorrecto";
        }

        $url = 'https://steamcommunity.com/profiles/' . $id;

        $browser = new HttpBrowser(HttpClient::create());

        
        $response = $browser->request('GET', $url);

        try{
            $name = $response->filter('.actual_persona_name')->text();
        } catch (\InvalidArgumentException $e) {
            return "ID de Steam incorrecto";
        }

        $horas = $response->filter('.recentgame_quicklinks')->text();

        $array = explode(" ", $horas);

        $horas = $array[0];

        $pais = $response->filter('.header_real_name')->text();

        $img = $response->filter('.profile_flag')->attr('src');

        $amigos = $response->filter('.profile_friend_links')->filter('.profile_count_link_total')->text();



        $datos = array(
            'name' => $name,
         'horas' => $horas,
          'pais' => $pais,
           'img' => $img,
            'amigos' => $amigos
        );

        return view('welcome')->with('datos', $datos);
    }
}
