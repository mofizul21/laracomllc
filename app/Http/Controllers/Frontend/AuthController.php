<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Notifications\RegistrationEmailNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('frontend.auth.login');
    }

    public function processLogin(){
        $validator = Validator::make(request()->all(), [
            'email'         =>  'required|email',
            'password'      =>  'min:3'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $creadentials = request()->only(['email', 'password']);


        if (auth()->attempt($creadentials)) {

            if(auth()->user()->email_verified === 1){
                session()->flash('type', 'success');
                session()->flash('message', 'You are logged in.');

                return redirect()->intended();
            }

            auth()->logout();
            session()->flash('type', 'danger');
            session()->flash('message', 'Your email is not verified yet.');

            return redirect()->route('login');
            
        }

        session()->flash('type', 'danger');
        session()->flash('message', 'Your credential is invalid.');
        return redirect()->back();
    }

    public function showRegisterForm(){
        return view('frontend.auth.register');
    }

    public function processRegister(){
        $validator = Validator::make(request()->all(), [
            'name'          =>  'required',
            'email'         =>  'required|email|unique:users,email',
            'phone_number'  =>  'required|unique:users,phone_number',
            'password'      =>  'min:3'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'name'          =>  request()->input('name'),
            'email'         =>  strtolower(request()->input('email')),
            'phone_number'  =>  request()->input('phone_number'),
            'password'      =>  bcrypt(request()->input('password')),
            'email_verification_token'   =>  uniqid(time() . request()->input('email'), true) . Str::random(16)
        ];

        try {
            $user = User::create($data);

            $user->notify(new RegistrationEmailNotification($user));

            session()->flash('type', 'success');
            session()->flash('message', 'Your account created successfully. Now activate your email.');
            return redirect()->route('login');
        } catch (\Exception $e) {
            session()->flash('type', 'warning');
            session()->flash('message', $e->getMessage());
        }

        return redirect()->back();        
    }

    public function activate($token=null){
        if ($token === null) {
            return redirect('/');  
        }

        $user = User::where('email_verification_token', $token)->firstOrFail();
        if ($user) {
            $user->update([
                'email_verified_at'         =>  now(),
                'email_verification_token'  =>  null,
                'email_verified'            =>  1
            ]);

            session()->flash('type', 'success');
            session()->flash('message', 'Account created. Please login now.');

            return redirect()->route('login');
        }

        session()->flash('type', 'warning');
        session()->flash('message', 'Invalid token.');

        return redirect()->route('login');
    }

    public function logout(){
        auth()->logout();
        session()->flash('type', 'success');
        session()->flash('message', 'You have logged out successfully.');

        return redirect()->route('login');
    }

    public function profile(){
        $user = Auth::user();
        $data['orders'] = Order::where('user_id', $user->id)->get();
        return view('frontend.auth.profile', $data);
    }
}
