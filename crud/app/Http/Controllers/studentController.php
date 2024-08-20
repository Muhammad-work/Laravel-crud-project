<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class studentController extends Controller
{ 

    public function getUser(){
        $student = DB::table('students') 
                            ->paginate(2);
            return view('welcome',['data' => $student]);                 
        }
        
        public function singleUser(string $id){
         $student = DB::table('students')
                             ->find($id);
             return view('singleUser',['data' => $student]);                 
        
     }

    public function addUser(Request $req){
             $student = DB::table('students')
                          ->insert([
                              'name' => $req->name,
                              'email' => $req->email,
                              'age' => $req->age,
                              'city' => $req->city,
                       
                          ]);
             if($student){
                return redirect()->route('home');
             }else{
                 echo 'data can not add in database ';
             }       
    }

     public function updatePage(string $id){
        $student = DB::table('students')
                           ->find($id);
        return view('update',['data' => $student]);                 

     }
  
      public function updateUser(Request $req,string $id){
        $student = DB::table('students')
         ->where('id',$id)
        ->update([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'city' => $req->city,
     
        ]);
       if($student){
        return redirect()->route('home');
      } else{
     echo 'data can not add in database ';
      }       
  }

   public function deleteUser(string $id){
         $student = DB::table('students')
                        ->where('id',$id)
                        ->delete();
          if($student){
              return redirect()->route('home');
         } else{
            echo 'data can not add in database ';
        }       
   }

}
