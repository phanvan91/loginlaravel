<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
class LoginController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng email',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'Password phải trên 6 kí tự'
        ];
        $validator = Validator::make($request->all(),$rules, $messages);
        if($validator->fails()){
           return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $email = $request->email;
            $password = $request->password;
            if(Auth::attempt(['email' => $email, 'password' => $password] , $request->has('remember'))){
                return redirect()->route('home');
            }else{
                $errors = new MessageBag(['errorlogin' => 'Mật khẩu hoặc email không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }

        }
    }
}
