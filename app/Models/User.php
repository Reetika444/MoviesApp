<?php

namespace App\Models;
use DB;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Support\Facades\Hash;


class User
// class User extends Authenticatable implements JWTSubject
{

 function addUser($data){
  //  dd($data);
     DB::table('users')->insert($data);
 }

 function getUser($email){
   $data = DB::table('users')->where('email',$email)->get();
   return $data;
 }

 function login($email,$token){
   
  $data = DB::table('users')->where('email',$email)->get()->first();
  if($data == null){
    return 2;
  }
  if($token == $data->Token){
     return 1;
  }else{
     return 0;
  }
  }
}