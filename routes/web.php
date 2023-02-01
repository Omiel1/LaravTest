<?php

use App\Http\Controllers;
use App\Http\Controllers\ContactsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/hello', function() {
    return "<h2>Hello World!</h2>";
});

Route::get('/wildcard/{id}', function($id){
    return response('Post' . $id);
}) -> where('id','[0-9]+');

Route::get('/test', function(){
    return view('test', [
        'heading' => 'Test Heading',
        'listings' => [
            [
                'id' => '1',
                'title' => 'SuperTitle',
                'description' => 'Random Description'
            ],
            [
                'id' => '2',
                'title' => 'SuperTitle2',
                'description' => 'Random Description2'
            ]
        ]
    ]);
});


//While using smthng like http://laravtest.test/search?name=Alex&id=7
Route::get("/search", function(Request $request){
    //dd($request);
    return $request->name . ' '. $request->id;
});

//----------------Actual Routes-----------------------------

//------Login routes------
//Page with login form
Route::get('/', [UserController::class, 'index']);

//Validate user data and log in
Route::post('/users/loginUser', [UserController::class, 'login']);

//Page with registration form
Route::get('/users/register', [UserController::class, 'register']);

//Create new user
Route::post('/users/postRegister', [UserController::class, 'store']);

//Validate user data
Route::post('logout', [UserController::class, 'logout']);


//------Contact routes------
//Get user to contact dashboard ~ (contacts manager)
Route::get('dashboard', [ContactsController::class, 'index']);

//Route to contact creation form
Route::get('/contacts/create', [ContactsController::class, 'create']);

//Route to contact creation
Route::post('/contacts/createContact', [ContactsController::class, 'createContact']);

//Route to specific contact details view
Route::post('/contacts/details', [ContactsController::class, 'details']);

//Route to editing contact
Route::post('/contacts/editContact', [ContactsController::class, 'update']);

//Route to contact deletion
Route::post('/contacts/delete', [ContactsController::class, 'deleteContact']);


//------Scripts routes for AJAX------
Route::get('contacts/getContacts', [ContactsController::class, 'getFromInput']);