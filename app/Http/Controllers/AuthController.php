<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

//Tutorial Validation - Работаю с ней
    public function showForm () {
        $success = session()->get('success');
        return view('pages.registerForm', ['success' => $success]);
    }

    public function register(Request $request) {

        if ( DB::table('users')->where('email', '=', 'core15@mail.ru')) {
            DB::table('users')->where('email', '=', 'core15@mail.ru')->delete();
        }

        Validator::validate($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
        ]);

/*        Schema::table('users', function (Blueprint $table) {
            $table->string('TestColumn')->unique();
        });*/

        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>  bcrypt($request->input('password')),
            'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H-i-s'),
            'updated_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H-i-s')
        ]);
//            return dump($request->all());
        session()->flash('success', true);
        return redirect()->back();
    }

//Validator::validate
/*    public function store (Request $request) {
        Validator::validate($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
        ]);
        session()->flash('success', true);
        return redirect()->back();
    }*/

//Documentation Validation
/*    public function createDoc () {
        return view('pages.registerFormDoc');
    }

    public function storeDoc (Request $request) {
            $validated = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>['required', 'min:3', 'confirmed'],
            'password_confirmation'=>'required|min:3',
        ]);
//        return redirect()->back();
        return dump($validated);
    }*/

//Another Documentation Sample - Validator::make
/*    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required',],
            'email' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        } else {
            session()->flash('success', true);
            return redirect()->back();
        }
    }*/

//------------------------------------Login

//Method From Course
    public function login () {
        return view('pages.loginForm');
    }

    public function loginStore (Request $request) {
        $remember = $request->input('remember') ? true : false;
        $authResult = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember);
//        return dump($authResult);
        if ($authResult) {
            return redirect()->intended();
        } else {
            return redirect()->route('login')->with('authError', 'Wrong Credentials');
        }
    }

    public function logOut () {
        Auth::logout();
        return redirect()->route('main');
    }

//Method From Docs
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
