<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Movies;
use Illuminate\Http\Request;




class MoviesController extends Controller
{



    function getMovies(){
     $movieModel = new Movies();
     $data = $movieModel->getMoviesDetails();
     return response()->json($data);
    }
    function deletemovies(Request $request){
     $id = $request->id;
     $movieModel = new Movies();
     $data = $movieModel->deleteMovies($id);
     $response['status']=1;
     return  response()->json($response);
    }

    function bookmovies(Request $request){
      $id = $request->id;
      $seats_available=$request->seats_available;
      $seats_available =  $seats_available - 1;
      
      $movieModel = new Movies();
      $data = $movieModel->bookMovies($id,$seats_available);

      $response['status']=1;
      return  response()->json($response);
    }

    }


