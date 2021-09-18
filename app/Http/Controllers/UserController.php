<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{



    function register(Request $request){
      $request['token'] = $request->token;
      $userModel = new User();
      $userData = $userModel->getUser($request->email);
      if(count($userData) == 0){
        $data=$userModel->addUser($request->all());
        $response["status_message"]="User Registration Successfully";
        $response["data"]=$request->all();
        $response['status']=1;
     
      return response()->json($response);
      }else{
        $response['status']=0;
        $response["status_message"]="Email Already Exists!";
        return response()->json($response);
      }
    }

   

    function login(Request $request){
      $userModel = new User();
      $email = $request->email;
      $token=$request->token;
      $userData = $userModel->login($email,$token);
      if($userData == 2){
        $response['status'] = 2;
        $response["status_message"]="This user is not registerd!!";
        return response()->json($response);
      }
      if($userData){
        
        $response['status'] = 1;
        $response["status_message"]="Login Successfully";
        
      }else{
        $response['status'] = 0;
        $response["status_message"]="Email or password is wrong";
      }
      return response()->json($response);
    
  }
}

   