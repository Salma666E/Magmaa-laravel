<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});

Route::group([

  //  'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::apiResource('users','API\UsersController');  

Route::get('/users','API\UsersController@showuser');

Route::get('/arabic__words','API\ArabicWordController@show');

Route::get('/commissions','API\CommissionController@show');

Route::get('/general__meetings','API\GeneralMeetingController@show');

Route::get('/meetings','API\MeetingController@show');

Route::get('/posts','API\PostController@show');

Route::get('/words','API\WordController@show');

////////////////////////////////////////////
//Route::apiResource('/comments','API\CommentController');

//Route::middleware('auth:api')->post('/word-comments/{id}/{wid}','API\CommentController@insertWordComments');

///////////////////////////////////////// Comment Controller //////////////////////////////

//////////////////////////////// WORD MODEL WITH COMMENT /////////////////////////////////
Route::post('/word-comments/{id}/{wid}','API\CommentController@insertWordComments');

Route::put('/word-comments/{id}','API\CommentController@updateWordComment');

Route::get('/word-comments/{wordid}','API\CommentController@showWordComment');

//////////////////////////////// ARABIC_WORD MODEL WITH COMMENT /////////////////////////////////

Route::post('/arabic-comments/{id}/{name}','API\CommentController@insertArabicWordComments');

Route::put('/arabic-comments/{id}','API\CommentController@updateArabicWordComments');

Route::get('/arabic-comments/{wordid}','API\CommentController@showArabicComment');

////////////  DELETE  ANY COMMENT ///////////////

Route::delete('/comments/{id}', 'API\CommentController@delete');

//////////// SHOW ALL COMMENTS /////////////////

Route::get('/comments','API\CommentController@show');


