<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// //Route::get('/post/{id}', 'App\Http\Controllers\PostsController@index');
// //Route::resource('post', 'App\Http\Controllers\PostsController');

// Route::get('/post/{number}/{name}', function ($number,$name) {
//     return "Number = ".$number.", Name = ".$name;
// });

// Route::get('/post/{id}', 'App\Http\Controllers\PostsController@showpostid');
// Route::get('/contact', 'App\Http\Controllers\PostsController@showcontact');

//--------------------------------------
// Database Raw Sql Queries
//--------------------------------------

// Route::get('/insert', function(){
//     DB::insert('insert into posts(title, content) values(?,?)',['php with laravel','this is the body or paragraph']);
// });


// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id = ?',[1]);
//     // foreach($results as $post){
//     //     return $post->content;
//     // }
//     return var_dump($results);    
// });


// Route::get('/update', function(){
//     $updated = DB::update('update posts set title = "Updated title" where id = ?',[1]);
//     return $updated;
// });


// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?',[1]);
//     return $deleted;
// });

//--------------------------------------
// Database Elequent Sql Queries
//--------------------------------------

// Route::get('/read', function(){
//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->content;
//     }

// });


// Route::get('/find', function(){
//     $post = Post::find(2);
//     return $post->content;

//     // $posts = Post::all();
//     // foreach($posts as $post){
//     //     return $post->content;
//     // }   

// });

// Route::get('/findwhere', function(){
//     $post = Post::where('id',3)->orderBy('id','desc')->take(1)->get();
//     return $post;

      

// });


// Route::get('/findmore', function(){
//     $posts = Post::findOrFail(1);
//     return $posts;

//     // $posts = Post::where('users_count','<',50)->firstOrFail()->get();
//     // return $posts;
// });



// Route::get('/basicinsert',function(){
//     $post = new Post;
//     $post->title = 'new title haha';
//     $post->content= 'Elequent is cool';
//     $post->save();

// });


// Route::get('/basicupdate',function(){
//     $post = Post::find(2);
//     $post->title = 'zzzzz';
//     $post->content= 'Elequent is cool';
//     $post->save();

// });


// Route::get('/create',function(){
//     Post::create(['title'=>'the create method','content'=>'I\'m awesome']);  

// });

// Route::get('/update',function(){
//     Post::where('id',2)->where('is_admin',0)->update(['title'=>'hoho updated','content'=>'I\'m awesome']);  

// });

// Route::get('/delete',function(){
//     $post = Post::find(4)->delete();
// });

// Route::get('/delete',function(){
//     Post::destroy(5);
//     //Post::destroy([4.5]);
//     //Post::where('id',2)->delete();
// });


// Route::get('/softdelete',function(){
//     Post::find(8)->delete();    
// });


// Route::get('/readsoftdelete',function(){
//     // $post = Post::find(6);    
//     // return $post;
//     // $post = Post::withTrashed()->where('id',3)->get();
//     // return $post;
//     $post = Post::onlyTrashed()->where('id',6)->get();
//     return $post;
// });

// Route::get('/restore',function(){
//     Post::withTrashed()->where('is_admin',0)->restore();
// });

// Route::get('/forceddelete',function(){
//     Post::onlyTrashed()->where('is_admin',0)->forceDelete();
// });


//--------------------------------------
// Elequent Relationships
//--------------------------------------


//one to one relationship
// Route::get('/user/{id}/post',function($id){
//     return User::find($id)->post->content;
// });

// Route::get('/post/{id}/user',function($id){
//     return Post::find($id)->user->name;
// });


//one to many relationship
Route::get('/posts',function(){
    $user = User::find(1);

    foreach($user->posts as $post){
        echo $post->title.'<br>';
    }

});







