<?php


//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('aboute',['as'=>'aboute','uses'=>"PagesController@aboute"]);
//Route::get('aboute2',"PagesController@aboute")->name('profile');
//Route::match(['get','post'],'match', function (){
//    return 'match';
//});
//Route::any('any',['as'=>'profile',function(){
//        return 'any';
//}]);
//Route::get('user/{id}/{comment}',function($id,$comment){
//    
//});
//Route::get('user/{name?}',function($name='ali'){
//    return $name;
//})->where(['id'=>'[12]','name'=>'ali']);

//Pass data
Route::get('/data',function(){
//      $data=['ali','mohammad','ehsan'];
//    return view('welcome',['people'=>$data]);
//    return view('welcome')->with('people',$data);//chaning
//    return view('welcome')->withpeople($data);
});

 
Route::group(['middleware'=>['web'] ,'as'=> "Admin" ],function(){
    
    
    
    //routes jadoie
                                             //save in $user                           
        Route::get('user/{user}', function (\App\User $user ){
            return $user;
//            return App\User::findOrFail(3);
//            return App\User::firstOrFail();
        });
        
                                           //defule 60 request in per minutes
        Route::get('api/{term}',['middleware'=>'throttle:2,1',function($term){
            return ['result' => $term];
}]);
        Route::post('/',['as' =>'profile','uses'=>'PagesController@store'
//            function(\Illuminate\Http\Request $request)
//             $validator= \Validator::make($request->all(),[
//                   'email.*' =>'required|email',
//               ],[
//                   'email.*' =>'ایمیل اشتباه است'
//               ]);
//             if($validator->fails()){
//                 return back()->withInput()->withErrors($validator);
//             }
//             return 'validation  was successful';
        ]);
        Route::get('/',['as' =>'root','uses' =>'PagesController@home']);//this name is Adminroot
        Route::get('cards',"CardsController@index");
        Route::get('cards/{card}',"CardsController@show");
        Route::post('/cards/{card}/notes',"NotesController@store");//new save
        Route::get('note/{note}/edit','NotesController@edit');//form show
        Route::patch('notes/{note}',"NotesController@update");//update
        
        Route::group(['prefix'=>'api','middleware'=>'auth:api'],function(){
              Route::get('users/{user}',function(App\User $user){
               return $user  ;
           });  
        });
        Route::get('event/',function(){
            
//            $user= auth()->loginUsingId(2);
            //fire eventes  ejra
            
            //laraval4
//          Event::fire('UserwasBanned',[]);
            //laravel 5
            event(new App\Events\UserwasBanned(new App\User));
            
//            Cache::put('name','mohammad',10);// cache env is file  you can use redis
//            return Cache::get('name');
            
        });
       
});
Route::get('reports','PagesController@index');

