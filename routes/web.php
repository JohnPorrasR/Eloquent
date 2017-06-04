<?php

use EloquentORM\User;
use EloquentORM\Book;
use Faker\Factory as Faker;
use EloquentORM\Category;
use EloquentORM\Page;
use EloquentORM\Post;
use EloquentORM\Video;
use EloquentORM\Tag;


Route::get('/', function ()
{
    $post = Post::first();
    echo 'POST: ' . $post->title;
    foreach($post->tags as $tag){
        echo '<li>' . $tag->title . '</li>';
    }
    $video = Video::first();
    echo 'VIDEO: ' . $video->title;
    foreach($video->tags as $tag){
        echo '<li>' . $tag->title . '</li>';
    }
});

Route::get('/morph', function ()
{
    $page = Page::find(6);
    echo $page->name;
    foreach($page->comments as $comment){
        echo '<li>' . $comment->body . '</li>';
    }
});

Route::get('/queryBuilder', function(){
    $users = User::all();
    return view('queryBuilder.index', compact('users'));
});

Route::get('/manytomany', function(){
    $users = User::all();
    return view('manytomany', compact('users'));
});

Route::get('/relationship', function(){

    $categories = Category::whereHas('books', function ($query) {
        $query->where('status', 'public');
    })->get();
    return view('relationship', compact('categories'));
    //$books = Book::all();
    //return view('destroy', compact('books'));
});

Route::delete('/destroy', function(\Illuminate\Http\Request $request){
    $ids = $request->get('ids');

    if(count($ids)){
        Book::destroy($ids);
    }
    return back();
});

Route::get('registro-en-papelera/{id}', function ($id) {
    $book = Book::withTrashed()->find($id);
    return $book;
});
// Enviar un registro a papelera
Route::get('enviar-a-papelera/{id}', function ($id) {
    $book = Book::find($id);
    $book->delete();
    return 'Enviado a papelera';
});
// Restaurar un registro que está en papelera
Route::get('restaurar-registro/{id}', function ($id) {
    $book = Book::withTrashed()->find($id);
    $book->restore();
    return 'Restaurado';
});
// Eliminar un registro de forma permanente
Route::get('eliminar-registro/{id}', function ($id) {
    $book = Book::withTrashed()->find($id);
    $book->forceDelete();
    return 'Eliminado de forma permanente';
});

Route::get('/home', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/all', [
    'as' => 'all',
    'uses' => 'QueryController@eloquentAll'
]);

Route::get('/get/{gender}', [
    'as' => 'get',
    'uses' => 'QueryController@eloquentGet'
]);

Route::get('/get-custom', [
    'as' => 'get-custom',
    'uses' => 'QueryController@eloquentGetCustom'
]);

Route::delete('/delete/{id}', [
    'as' => 'delete',
    'uses' => 'QueryController@eloquentDelete'
]);

Route::get('/lists', [
    'as' => 'lists',
    'uses' => 'QueryController@eloquentLists'
]);

Route::get('/first-last', [
    'as' => 'first-last',
    'uses' => 'QueryController@eloquentFirstLast'
]);

Route::get('/paginate', [
    'as' => 'paginate',
    'uses' => 'QueryController@eloquentPaginate'
]);

/*
Route::get('/create', function () {
    $faker = Faker::create();
    $user = User::create([
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123456'),
        'gender' => $faker->randomElement(['f','m']),
        'biography' => $faker->text(200)
    ]);
    return $user;
});

Route::get('/read/{id}', function ($id) {
    $user = User::find($id);
    return $user;
});

Route::get('/update/{id}', function ($id) {
    $user = User::find($id);
    $user->biography = 'Usuario editado';
    $user->save();
    return $user;
});

Route::get('/delete/{id}', function ($id) {
    $user = User::find($id);
    $user->delete();
    return 'Uuario eliminado';
});
*/