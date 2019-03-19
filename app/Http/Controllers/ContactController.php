<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function index(){
       //$contact=DB::table('contacts')->get();
       $contacts=Contact::all();
    return view('welcome',compact('contacts'));
}
public function destroy ($id){

   $contact = Contact::findOrfail($id);
   $contact->delete();
   return redirect('welcome');

}
}
