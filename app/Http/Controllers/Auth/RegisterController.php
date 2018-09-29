<?php

namespace App\Http\Controllers\Auth;

use App\Notifications\RegisterUser;
use App\User;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function confirm($id, $token){

        $user = User::where('id', $id)->where('confirmation_token', $token)->first();


        if($user){

            $user->update(['confirmation_token' => null]);
            $this->guard()->login($user);

            return  redirect('compte')->with('success', 'Votre compte a été confirmé avec succès, 
                                                                    Compléter les informations sur de votre profil');
        } else {

            return redirect('/login')->with('error', 'Le lien n\'est plus valide');
        }
    }


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        $user->notify(new RegisterUser());
        return $this->registered($request, $user)
            ?: redirect('/login')->with('success', 'Votre compte à bien été créer, 
                                                    comfirmer votre inscription grâce au mail que vous recevrez');
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
            'username' => 'required|string|max:255|min:3',
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'recuperationEmail' => 'required|string|email|max:255|unique:members',
            'location' => 'required|string|max:50|min:8|',
            'jobs' => 'required|string|max:100|min:2',
            'experience' => 'required|string|max:255',
            'bio' => 'required|string|max:255|min:10',
            'password' => 'required|string|min:6',
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

        $user = new User();
        $member = new Member();

        $user->username = $data['name'];
        $user->email = $data['email'];
        $user->role = 'member';
        $user->password = bcrypt($data['password']);
        $user->confirmation_token = str_replace('/', '', bcrypt(str_random(16)));

        $user->save();

        $member->name = $data['name'];
        $member->bio = $data['bio'];
        $member->location = $data['location'];
        $member->jobs = $data['jobs'];
        $member->experience = $data['experience'];
        $member->recuperationEmail = $data['recuperationEmail'];
        $member->idusers = $user->id;



        $member->save();

        return $user;

    }
}

