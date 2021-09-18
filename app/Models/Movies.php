<?php

namespace App\Models;
use DB;

class Movies
{

   


  function getMoviesDetails()
  {
    $data =  DB::table('movies')->get();
    $a = empty($data);
   
   if($a == false){
    $data=array(['id' => '1',
    'movie_name'=>'Total Dhamaal',
    'seats_available'=> '10',
    'theatre_number'=> '101',
    'movieimage'=>'totaldhamaal.jpg'
    ],['id' => '2',
    'movie_name'=>'Dhamaal',
    'seats_available'=> '15',
    'theatre_number'=> '102',
    'movieimage'=>'dhamaal.jpg'],[
      'id' => '3',
    'movie_name'=>'Avengers',
    'seats_available'=> '10',
    'theatre_number'=> '103',
    'movieimage'=>'avengers.jpg'
    ],['id' => '4',
    'movie_name'=>'Highway',
    'seats_available'=> '9',
    'theatre_number'=> '104',
    'movieimage'=>'highway.jpg'],
    ['id' => '5',
    'movie_name'=>'Welcome',
    'seats_available'=> '10',
    'theatre_number'=> '105',
    'movieimage'=>'welcome.jpg']

  );
 
  DB::table('movies')->insert($data);
  }
    return $data;
    
  }

    function deleteMovies($id){
         DB::table('movies')->where('id',$id)->delete();  
    }
  
    function bookMovies($id,$seats_available){
      DB::table('movies')->where('id',$id)->update(['seats_available' => $seats_available]); 
      
    }

    }