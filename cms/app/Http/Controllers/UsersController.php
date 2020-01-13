<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;

class UsersController extends Controller
{
   //個別ページ表示
   public function show($id) 
   { 
         $user = User::find($id);
         $movies = $user->movies()->get();
         return view('users', [ 
             'user' => $user, 
             'movies' => $movies
         ]); 
   } 
   
   //個別ページ編集画面
   public function edit($id)
   {
         if($id != Auth::user()->id){
            return redirect("/");
         }
         $user = User::find($id);
         return view('usersedit', [
            'user' => $user,
         ]);
   }
   
   //個別ページ編集処理　URLにIDを含むためバリデーションにはIDは入れなくて良い
   public function update(Request $request,$id)
    {    
         //バリデーション
         if($id != Auth::user()->id){
            return redirect("/");
         }
         $validator = Validator::make($request->all(), [
               'name'     => 'required',
               'category' => 'required',
               'position' => 'required',
               'height'   => 'required',
               'weight'   => 'required',
               'fat'      => 'required',
               'shortrun' => 'required',
               'longrun'  => 'required',
               'vo2max'   => 'required',
               'email'    => 'required',
         ]);
         //データ更新
               $users = User::find($id);
               $users->name     = $request->name;
               $users->category = $request->category;
               $users->position = $request->position;
               $users->height   = $request->height;
               $users->weight   = $request->weight;
               $users->fat      = $request->fat;
               $users->shortrun = $request->shortrun;
               $users->longrun  = $request->longrun;
               $users->vo2max   = $request->vo2max;
               $users->email    = $request->email;
               $users->save();
               return redirect("/users/$id");
    }
}