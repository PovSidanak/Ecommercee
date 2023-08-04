<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzLeHttp\Client;


class UserController extends Controller
{
    //
    public function homepage(Request $req){

       // $http = new \GuzzleHttp\Client();
       // $response = $http -> get('http://127.0.0.1:8000/api/user_route/get_me', [
       ///     'headers' => [
       //         'Authorization' => 'Bearer '.$req -> cookie('personalToken')
     //       ]
      //  ]);

    //    if ( $response -> getStatusCode() == 203)
   //     return redirect('/login');

        return view('homepage');
    }

    public function loginpage(Request $req){

        $http = new \GuzzleHttp\Client();
        $response = $http -> get('http://127.0.0.1:8000/api/user_route/get_me', [
            'headers' => [
                'Authorization' => 'Bearer '.$req -> cookie('personalToken')
            ]
        ]);
        //dd($response -> getStatusCode());


        if ($response -> getStatusCode() == 200)
        return redirect('/homepage');

        return view('loginpage');

    }

    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }

    public function cart(){

        return view('cart');
    }

    public function sproduct(){

        return view('sproduct');
    }

    public function Skin1004TrailSet(){

        return view('Skin1004TrailSet');
    }

    public function Skin1004CalmingPads(){

        return view('Skin1004CalmingPads');
    }

    public function Skin1004Suncreen(){

        return view('Skin1004Suncreen');
    }

    public function Skin1004SoothingCream(){

        return view('Skin1004SoothingCream');
    }

    public function Skin1004ToningToner(){

        return view('Skin1004ToningToner');
    }

    public function Skin1004FoamCleanser(){

        return view('Skin1004FoamCleanser');
    }

    public function Skin1004cream(){

        return view('Skin1004cream');
    }

    public function c1(){

        return view('c1');
    }

    public function c2(){

        return view('c2');
    }

    public function c3(){

        return view('c3');
    }

    public function c4(){

        return view('c4');
    }

    public function c5(){

        return view('c5');
    }

    public function c6(){

        return view('c6');
    }

    public function c7(){

        return view('c7');
    }

    public function c8(){

        return view('c8');
    }

    public function Skin1004Mask(){

        return view('Skin1004Mask');
    }





    public function login_handle(Request $req){
       // dd($req -> all());
        $email = $req -> email;
        $password = $req -> password;


        //initial request module
        $http = new \GuzzleHttp\Client();

        //prepare body
        $body = [
            'email' => $email,
            'password' => $password

        ];
       // dd($body);

        //create request
        $response = $http -> post('http://127.0.0.1:8000/api/user_route/login', ['form_params' => $body]);

        if($response -> getStatusCode() == 200){
            return back() -> with('message', 'username or password incorrect');
        }

        $result = json_decode((string)$response -> getBody(), true);
        $token = $result['accessToken'];

        return redirect('/homepage')-> cookie('personalToken', $token);

        //dd($token);



    }
    public function shop(){
        return view('shop');
    }
    public function shop2(){
        return view('shop2');
    }

    public function SignUp(){
        return view('SignUp');
    }
    public function delivery(){
        return view('delivery');
    }


}
