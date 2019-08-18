<?php

namespace App\Http\Controllers;
use App\Tag;
use App\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CardsController extends Controller
{
    public function index(){
//    public function index(Billeble $billeble){ //use transaction
        
        
        //دو(چند) کار با هم که اگر یکی انجام نشد دیگری هم انجام نشه
//        DB::transaction(function() use ($billeble){
            //bill the user using stripe
            //create the customer
            //create the user on ouer database
//        });
        
        //use transaction in load view and data use $data * vs *return
        $data=DB::transaction(function (){
              //queqe and dirty way
        return DB::table('cards')->get();  
        });
        return view("cards/index",['cards' =>$data]);
        
        
        
    }
    public function show(Card $card){
        
        
//        auth()->loginUsingId(1);
//        $card = Card::find($id);
//        return DB::table('cards')->get()->where('id',$id);
        
        //eigerloading
        $card->load('notes.user');
//        $card::with('notes.user')->get();
//        return $card;
        
        $tags=Tag::all();
        return view( 'cards.show',['cards' =>$card,'tags'=>$tags]);
        
    }
}
