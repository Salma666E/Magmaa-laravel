<?php

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


//Auth::routes();

//////////---------------------admin Pages-------------------/////



Route::get('userAdminShow','usercontroller@showuserAdmin');
Route::get('AdminViews/commissionAdminShow','commissioncontroller@displayAdmin');
Route::get('AdminViews/ArabicWordShow','arabicwordcontrol@showAdmin');
Route::get('AdminViews/WordShow','wordcontrol@showAdmin');


///////////--------------------posts  ----------------/////////
route::get('display','posts@show');
route::get('PostDisplay','posts@display');
route::post('display{id}','posts@submit');
route::get('/test{id}','posts@delete');
route::get('/posts/editformp{id}','posts@edit');
route::post('/posts/editpost{id}/{idp}','posts@edit2');
Route::get('/edit', function () {
    return view('edit');
});
Route::get('/posts/postform', function () {
    return view('posts/postform');
});
////////-----------------------user---------------------///////////
Route::get('userShow','usercontroller@showuser');
Route::get('/userr/userform','usercontroller@showusercommission');
route::post('/userr/displayuser','usercontroller@insertuser');
route::get('/welcome{id}','usercontroller@deleteuser');

route::get('/userr/useredit{id}','usercontroller@edituser');
route::post('/edit{id}','usercontroller@edit2user');
Route::get('/edit', 'usercontroller@showusercommission');
//search
Route::get('/userr/search', function () {
    return view('/userr/search');
});
route::post('/userr/search','usercontroller@search');
//end
////////----------------meeting and absence and word--------------////////
Route::get('/word/meeting','commissioncontroller@showmeeting'); 
Route::get('/word/Absence', function () { return view('/word/Absence');});

Route::post('/word/Absence','absenceController@insert');
Route::post('/word/wordform');
//route::post('/word/wordform{id}','wordcontrol@insertwordcommission');

Route::get('/word/wordform', function () { return view('word/wordform');});
//***********absence insert
Route::post('/word/Absence','absenceController@insert');
//end8****


///////-------------------meeting amd absence and arabicword--------///////

Route::get('/arabicword/Ameeting','commissioncontroller@showAmeeting'); 
Route::get('/arabicword/Absence', function () { return view('/arabicword/Absence');});
route::post('meeting/ToInsertMeetingArabicword','meetingcontrol@insertMeetingArabicword');
//*************  absence insert
Route::post('/arabicword/Absence','absenceController@insert');
//end
//------show meeting
Route::get('/arabicword/displayAmeeting', function () { return view('/arabicword/displayAmeeting');});; 


//----------------------- generalmeeting  and Absence------------------///
//*************  absence insert
route::post('meeting/Absence','absenceController@insertforgeneralmeeting');
//end
//------show meeting
Route::get('/word/displaymeeting', function () { return view('/word/displaymeeting');});; 



////////-----------------------word -----------------------------///////

//Route::get('/word/wordform{id}', function () { return view('word/wordform');});
/////Route::get('/word/wordform{id}', 'wordcontrol@showmeetingid');
Route::get('/word/editform', function () { return view('/word/editform');});
route::get('/word/editform{id}', 'wordcontrol@edit1');
route::post('/word/editform{id}', 'wordcontrol@edit2');
route::post('/word/movetoabsence','wordcontrol@insertword');
route::get('word/showword','wordcontrol@show');
//route::post('/word/showword','wordcontrol@search');

////////------------------arabicword---------------------------//////
Route::get('/arabicword/insert', function () {
    return view('/arabicword/insert');
});
route::post('/arabicword/display','arabicwordcontrol@insert');
route::get('/arabicword/display','arabicwordcontrol@show');
Route::get('/arabicword/editform', function () { return view('/arabicword/editform');});
route::get('/arabicword/editform{id}', 'arabicwordcontrol@edit1');
route::post('/arabicword/editform{id}', 'arabicwordcontrol@edit2');



///------------------------------commission -----------------///
Route::get('commission/show', function () {
    return view('commission/show');
});
route::get('/commission/show data for user','commissioncontroller@displayUser');
route::get('/commission/showdata','commissioncontroller@display');
route::post('/commission/showdata','commissioncontroller@insert');
route::get('/commission/deleteco{id}','commissioncontroller@delete');
///----------------------------meeting -------------------/////
route::get('/meeting/meetingform', function () {
    return view('meeting/meetingform');
});
route::post('meeting/display','meetingcontrol@insert');
route::post('meeting/search','meetingcontrol@search');


route::get('meeting/display','meetingcontrol@showcommission');
/////////-----------------generalmeeting -----------------------/////1
route::get('/meeting/generalmeetingform','generalmeeting@showcommission');
route::post('meeting/generalmeetingdisplay','generalmeeting@insertgm');
route::get('meeting/generalmeetingdisplay','generalmeeting@showgm');
route::post('meeting/searchGmeeting','generalmeeting@search');

/////----------------------arabicword with comment------------------------//////

route::post('/arabicword/display{id}/{name}','commentController@insertcommentarabicword');
route::get('/arabicword/display','arabicwordcontrol@show');
route::post('/arabicword/display/{id}/{name}','commentController@editcommentarabicword');
///for div 
route::get('/arabicword/display/{id}/{name}','commentController@showdiv');
///end
/////TO prevent repeat
route::get('/arabicword/testAword{z}','commentController@insertcommentarabicword2');///to prevent repeat 
Route::get('/arabicword/testAword', function () {
    return view('/arabicword/testAword');
});
////----------------------word with comment---------------------/////

Route::post('/word/word2','commentController@insertcommentword');
route::post('/word/word/','commentController@editcommentword');
route::get('/word/testword{z}','commentController@insertcommentword2');///to prevent repeat 
Route::get('/word/testword', function () {
    return view('/word/testword');
});
////------------------------for test-------------------------------//////
Route::get('/test', function () {
    return view('test');
});

/////----------------------------auth--------------------------------//////



Route::get('/home', 'HomeController@index')->name('home');

/**
  *home
 */

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/**
 * Register Route(s)
 */
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
Route::post('register', 'usercontroller@insertuser');

/**
 * Password Reset Route(S)
 */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

/**
 * Email Verification Route(s)
 */
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
///////------------------middleware-------------------------///////

route::group(['middleware' =>['auth','admin']],function()


{

Route::get('/AdminHome', function () {
        return view('AdminHome');
    });
});

////---------------------user pages---------------------////

//////search part*
Route::get('/','userHomecontroller@showcommission');
        Route::get('/UserHome','userHomecontroller@showcommission');

        Route::post('/word/showword','userHomecontroller@showword');
 ////////end*
 Route::get('/Homey', function () {
    return view('Homey');
});



Route::get('/chooseCommission', function () {
    return view('chooseCommission');
});       


///-------------------comment last edit---------------------////
Route::get('comment/comment', 'commentController@show');

Route::post('comment/comment{id}','commentController@insert');
//***delete */ 
route::get('/comment/deleteco{id}','commentController@delete');
/////---------------------pdf-----------------------------////
Route::get('/generatePDF58','pdfcontroller@generatePDF');

Route::get('/edit', function () {
    return view('edit');
});       

Route::get('/ghada', function () {
    return view('ghada');
});       

//------------------contact-----------------//
//Route::post('/edit','contactcontroller@insert');
Route::post('/edit','message@send');
//-------------------------transaction----------------//
 
Route::get('/transactions/Showtranc','historyofusercontroller@show');

Route::get('/transactions/tranc','historyofusercontroller@showcommission');

Route::post('transact', 'historyofusercontroller@insert');
//------search
Route::post('/transactions/search','historyofusercontroller@search');
   Route::get('/transactions/search', function () {
    return view('transactions/search');
});       
///-------end
   ///////////////////////////--------------cv-------------------///////////////
   Route::get('/cv{id}','usercontroller@cv');
   Route::get('/cv', function () {
    return view('cv');
});       
Route::get('/edit2', function () {
    return view('edit2');
});
Route::get('/edit3', function () {
    return view('edit3');
});
Route::get('/absence', function () {
    return view('absence');
});