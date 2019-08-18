<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Card;
use App\Note;
use Session;

class NotesController extends Controller
{
public function store(Request $request,Card $card)
        {
    
    
//    return $request->all();
//    return \Request::all();
//    return request()->all();
    
//    $note=new Note;
//    $note->body =$request->body;
//    $card->notes()->save($note);
    
    
    
//mass assinment protect fillable=input 
//    $note=new Note([
//        'body'=>$request->body
//    ]);
//    $card->notes()->save($note);
    
//    $card->notes()->save(new Note(['body' =>$request->body]));
    
    
    
    
        

//        dd($request->input('tags'));
        $this->validate($request,[
            'body' =>'required|min:3'
        ]);
    
    
    $note=new Note($request->all());
    $note->user_id=1;//on kasi ke alan logine ::Auth
    $card->notes()->save($note);
    
    $tagIds=$request->input('tags');
    $note->tags()->sync($tagIds);//attach and detach hoshe laravel  
//    $note->tags()->attach($tagIds);//for add
//    $note->tags()->detach($tagIds);//for delete
    
    //save message in session
            //fassade
//        \Session::flash('flash_message','Your Note has been created');//this will keep one request
    
    
//       $request->session()->flash('flash_message','your card created');
//       session()->flash('flash_message','your card created');//flash
    //helper
    flash('message','danger');
    
//       session('flash_message','yor card created');//flash
//       session(['flash_message','message']);//put
//        Session::put('flash_message','Your Note has been created');//save alway in session
    
    
    
    
    
//    $card->notes()->create([
//       'body'=>$request->body 
//    ]);
    
    
            //helper
    return back();
}
public function edit(Note $note){
    
//    auth()->logout();
//    auth()->loginUsingId(18);//karbar id  12 ra login kon
//   
//    if(\Gate::denies('update',$note))    //allows =(open dor)denius =(dont open the door)
//   {
//       abort(403,"Sory! this page not to you");   
//   }
    
//        $this->authorize('edit-note',$note);
        
//        if(auth()->user()->cannot('edit-note',$note)){//can cannot
//            return "You cant edit";
//        }
    
    
    
    
    
    
    $tag= \App\Tag::all();
    return view('notes.edit',['note'=>$note,'tags'=>$tag]);
}    
public function update(Note $note ,Request $request){
    $note->update($request->all());
    
    $note->tags()->sync($request->input('tags'));
    return back();
}





}
