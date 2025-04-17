<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'usn' => ['required', 'max:255'],
            'phone' => ['required','max:255'],
            'college_name' => ['required'],
            'transaction_id' => ['nullable','unique:users'],
            'pass_type' => ['required'],
            'id_card' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $request = request();
        if ($data['pass_type'] == 'base') {
            $request->validate([
                'payment_screenshot'=>'required',
                'transaction_id'=>'required',

            ]);
        }elseif ($data['pass_type'] == 'premium') {
            $request->validate([
                'payment_screenshot'=>'required',
                'transaction_id'=>'required',

            ]);
        }

  
        $uid = 'AAKAR-';
        if($data['pass_type'] == 'base'){
            $uid = $uid.'BASE-';
        }else if($data['pass_type'] == 'premium'){
            $uid = $uid.'PREM-';
        }else{
            $uid = $uid.'MEGA-';
        }
      
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'usn' => $data['usn'],
            'phone' => $data['phone'],
            'college_name' => $data['college_name'],
            'transaction_id' => $data['transaction_id'],
            'pass_type' => $data['pass_type']

        ]);
//   dd($data['events']);
        if(isset($data['events'])){
        foreach ($data['events'] as $key => $event) {
            $reg = new EventRegistration;
            $reg->user_id = $user->id;
            $reg->event_id = $event;
            $reg->save();

        }
                    
    }
        $number = sprintf('%04d', $user->id);
        $user->uid = $uid.''.$number;
       
        
        if ($request->hasFile('payment_screenshot')) {
            $user->payment_screenshot = Storage::put('public', $request->file('payment_screenshot'));
        }
        if ($request->hasFile('id_card')) {
            $user->id_card = Storage::put('public', $request->file('id_card'));
        }
        $user->save();
        return $user;
    }


    public function showRegistrationForm() {
        $events = Event::where('is_registration',1)->get();
        return view('auth.register',compact('events'));
    }
}
