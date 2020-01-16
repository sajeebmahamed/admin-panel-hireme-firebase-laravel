<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');

Route::get('/home', 'FirebaseController@index');
Route::get('/users/profile', 'FirebaseController@userprofile');
Route::post('add/client/message', 'ClientMessage@addclientmessage');

                      //Tution Route Start
Route::get('/user/posts/1_5', 'TutionController@userposts1_5');
Route::get('/user/posts/6_8', 'TutionController@userposts6_8');
Route::get('/user/posts/9_10', 'TutionController@userposts9_10');
Route::get('/user/posts/11_12', 'TutionController@userposts11_12');
//Route::get('/delete/data/{user_id}', 'UserPost@deletedata');
                      //Tution Route End

                      //Vehical Route Start
Route::get('/user/posts/ambulance', 'VehicalController@userpostsambulance');
Route::get('/user/posts/bike', 'VehicalController@userpostsbike');
Route::get('/user/posts/cars', 'VehicalController@userpostscars');
Route::get('/user/posts/pickup', 'VehicalController@userpostspickup');
Route::get('/user/posts/track', 'VehicalController@userpoststruck');
                      //Vehical Route End

                      //Domestic Route Start
Route::get('/user/posts/carpenter', 'DomesticController@userpostscarpenter');
// Route::get('/user/posts/carpenter/{id}', 'DomesticController@userpostscarpenterdelete');
Route::get('/user/posts/cooker', 'DomesticController@userpostscooker');
Route::get('/user/posts/electrician', 'DomesticController@userpostselectrician');
Route::get('/user/posts/gasrepairer', 'DomesticController@userpostsgasrepairer');
Route::get('/user/posts/locksmith', 'DomesticController@userpostslocksmith');
Route::get('/user/posts/maid', 'DomesticController@userpostsmaid');
Route::get('/user/posts/plumber', 'DomesticController@userpostsplumber');
                      //Domestic Route End

                      //Electronics Route Start
Route::get('/user/posts/airconditioner', 'ElectronicsController@userpostsairconditioner');
Route::get('/user/posts/computer', 'ElectronicsController@userpostscomputer');
Route::get('/user/posts/fridge', 'ElectronicsController@userpostsfridge');
Route::get('/user/posts/mobile', 'ElectronicsController@userpostsmobile');
Route::get('/user/posts/oven', 'ElectronicsController@userpostsoven');
Route::get('/user/posts/television', 'ElectronicsController@userpoststelevision');
                      //Electronics Route End

                      //Experts Route Start
Route::get('/user/posts/architect', 'ExpertsController@userpostsarchitectr');
Route::get('/user/posts/beautician', 'ExpertsController@userpostsbeautician');
Route::get('/user/posts/developer', 'ExpertsController@userpostsdeveloper');
Route::get('/user/posts/doctor', 'ExpertsController@userpostsdoctor');
Route::get('/user/posts/driver', 'ExpertsController@userpostsdriver');
Route::get('/user/posts/decorator', 'ExpertsController@userpostsdecorator');
Route::get('/user/posts/lawyer', 'ExpertsController@userpostslawyer');
Route::get('/user/posts/photographer', 'ExpertsController@userpostsphotographer');
                      //Experts Route End

                      //Helpers Route Start
Route::get('/user/posts/bazarman', 'HelpersController@userpostsbazarman');
Route::get('/user/posts/cobler', 'HelpersController@userpostscobler');
Route::get('/user/posts/dancer', 'HelpersController@userpostsdancer');
Route::get('/user/posts/daylabour', 'HelpersController@userpostsdaylabour');
Route::get('/user/posts/vhanktiman', 'HelpersController@userpostsvhanktiman');
Route::get('/user/posts/others', 'HelpersController@userpostsothers');
                      //Helpers Route End
