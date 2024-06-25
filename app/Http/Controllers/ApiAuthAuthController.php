<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiAuthAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    private function validateValues(array $array){

        $validator = Validator::make($array, [
            'name' => 'required|string|max:255',
            'email'=> 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        return $validator;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!$request->hasHeader('__secret')) {
            return response()->json([
                "status"=>"fail",
                "message"=>"No Authorization header",
                "data"=>[]
            ]);
        }

        $incoming_value = $request->header('__secret');
        $current_secret = env("API_AUTH_SECRET");
        if($incoming_value !== $current_secret){
            return response()->json([
                "status"=>"fail",
                "message"=>"Invalid Authorization header",
                "data"=>[]
            ]);
        }

        $validator = $this->validateValues($request->all());//validate the values
        if($validator->fails()){
            return response()->json([
                "status"=>"fail",
                "message"=>$validator->getMessageBag(),
                "data"=>[]
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), //hash('sha256', $request->password)
        ]);

        $response = $this->login_user_in($request->email, $request->password, "register");

        if($response['status'] === "success"){

            $user->url_otn = $response['data']['token'];
            $user->save();

            return response()->json([
                "status"=>"success",
                "message"=>$response['message'],
                "data"=>$response['data']['url_otn']
            ]);

        }else{

            return response()->json([
                "status"=>"fail",
                "message"=>$response['message'],
                "data"=>[]
            ]);

        }

        

        // Auth::login($user);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function login_user_in($email, $password, $action = "login")
    {
        //check for user existence 
        $response = [];

        if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1])) {

            $user = User::where("email", $email)->first();
            /**************************************One Time Login Url: token Generator*******************************/
                $privateKey = env("API_AUTH_SECRET");
                $objDateTime = Carbon::now()->addDays(1)->getTimestamp();
                $url = env('APP_URL').'/check_token/';
                
                $hash = hash('sha256', $privateKey.$url.$user->email.$objDateTime);
                
                $autoLoginUrl = http_build_query(array(
                    'user' => $user->email,
                    'timeLimit' => $objDateTime         
                ));

                $response['url_otn']= $user->status == 1 ? $url.'?'.$autoLoginUrl : '/';
                $response['token'] = $hash;

                return [
                    "status"=>"success",
                    "message"=> $action === "login" ? "Login was successful" : "Registration was successful",
                    "data"=>$response
                ];
            /**************************************End One Time Login Url*******************************************/
        }else{
            return [
                "status"=>"fail",
                "message"=>"Invalid Email/Password Combination",
                "data"=>[]
            ];
        }
        
    }

    private function validate_login_values(array $array){

        $validator = Validator::make($array, [
            'email'=> 'required|email|max:255|',
            'password' => 'required|string|min:8',
        ]);

        return $validator;
    }

    /**
     * login function.
     */
    public function login_(Request $request)
    {
        if (!$request->hasHeader('__secret')) {
            return response()->json([
                "status"=>"fail",
                "message"=>"No Authorization header",
                "data"=>[]
            ]);
        }

        $incoming_value = $request->header('__secret');
        $current_secret = env("API_AUTH_SECRET");
        if($incoming_value !== $current_secret){
            return response()->json([
                "status"=>"fail",
                "message"=>"Invalid Authorization header",
                "data"=>[]
            ]);
        }

        $validator = $this->validate_login_values($request->all());//validate the values
        if($validator->fails()){
            return response()->json([
                "status"=>"fail",
                "message"=>$validator->getMessageBag(),
                "data"=>[]
            ]);
        }

        $user = User::where("email", $request->input('email'))->first();
        if($user === null){
            return response()->json([
                "status"=>"fail",
                "message"=>"Invalid user details",
                "data"=>[]
            ]);
        }
        
        $response = $this->login_user_in($request->input('email'), $request->input('password'), "login");

        if($response['status'] === "success"){

            $user->url_otn = $response['data']['token'];
            $user->save();

            return response()->json([
                "status"=>"success",
                "message"=>$response['message'],
                "data"=>$response['data']['url_otn']
            ]);

        }else{

            return response()->json([
                "status"=>"fail",
                "message"=>$response['message'],
                "data"=>[]
            ]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function check_token(Request $request)
    {
        $email = $request->query('user');
        $objDateTime = $request->query('timeLimit');
     
        $privateKey = env("API_AUTH_SECRET");
        $url = env('APP_URL').'/check_token/';
        
        $hash = hash('sha256', $privateKey.$url.$email.$objDateTime);

        //fetch the user
        $user = User::where('email', $email)->where('url_otn', $hash)->first();
        if($user === null){
            \abort(404);
            exit();
        }
        
        Auth::login($user);

        //remove the login token to prevent re use
        $user->nullify_login_token();

        return redirect(route('dashboard', absolute: false));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
