<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    //protected $redirectTo = RouteServiceProvider::HOME; //after complete commission he will come bak to this page 
    public function redirectTo(){

        
        return 'userAdminShow';
      
        
        }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('guest');//بتمنع تحققيق العدف بدون condition
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
            'password' => ['required',  'string','min:8'],
           // 'id' => ['required'],
            'phone' => ['required','max:13'],
            'address' => ['required'],
            'dob' => ['required'],
            'gender' => ['required'],
           // 'email' => $data['ema'];
          //  'remember_token' => ['required'],
            'commision_id' => ['required'],
            'cv' => ['required'],
            'job'=>['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        $request = request();

        $file=$request->file('cv');
        $extension =$file->getClientOriginalExtension();
         $filename=time() .'.'.$extension;
           $file->move('upload',$filename);
        //  $inf->cv=$filename;

       /* $profileImage = $request->file('cv');
        $profileImageSaveAsName = time()  . "." . 
                                  $profileImage->getClientOriginalExtension();

        $upload_path = '';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);*/
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => hash::make($data['password']),
           // 'id' => $data['id'],
            'phone' => $data['phone'],
           
         'cv' => $filename,
            'address' => $data['address'],
            'dob' => $data['dob'],
            'job' => $data['job'],
            'gender' => $data['gender'],
          'commision_id' => $data['commision_id'],

          //  'remember_token' => $data['remember_token']
        ]);
        
    
        }
    }