<?php

namespace App\Http\Controllers\form;

use App\Http\Requests\MakeFormRequest;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use App\Models\Login;

class Main extends Controller
{
    //
    public function index()
    {
        return view('form.makeform');
    }

    public function form_login_submit(MakeFormRequest $request)
    {
       /* $validated = $request->validate(
            // $rules
            [

                //'text_username'=>'bail|required|max:5|min:1',
                'text_username'=>'required|email|max:30',
                'text_password'=>'required|',


            ],
            // messages
            [
                   'text_username.required'=> 'this field is required',
                   'text_username.email' =>'please enter the valid email',
                   'text_username.max' =>'please only required 30 field'
            ]
        );
       */

        //validate
       $validated=  $request->validated();




        // rest of code
        $user = $request->input('text_username');
        $password = $request->input('text_password');
        $telephone = $request->input('text_telephone');

        // insert data into database
        $login = new Login;
        $login->email = $user;
        $login->password = $password;
        $login->telephone = $telephone;
        $login->save();

        return redirect()->route('home');




    }
}
