<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest ;
use App\Models\Contact ;

class ContactController extends Controller
{

    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        //Переадресация на главную страницу после добавления данных
        return redirect()->route('home')->with('success', 'Успешно добавлен');
    }
//     public function
// submit(Request $req){
//  $validation = $req->validate([
//                'subject'=>'required|min:5|max:10',
//                'message'=>'required|min:15|max:200'
//            ]);
//  }

        
    
    // public function submit(Request $req){
    //     dd($req->input('subject'));
    //     // return "Enhypen";
    // }

    }