<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    //Show all contacts assigned to user
    public function index(){
        //Grabs contacts with related id
        $contacts = DB::table('contacts')->where('relatedUserId', Auth::id())->orderBy('name', 'ASC')->get()->toArray();

        return View('dashboard', ['contacts' => $contacts]);
        //return View('dashboard', ['contacts' => Auth::id()]);
    }

    public function create(){
        return View('/contacts/create');
    }

    public function show(){

    }

    public function destroy(){

    }

    public function createContact(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'surname' => ['max:20'],
            'address' => ['max:127'],
            'email' => ['max:63'],
            'phone' => ['required', 'min:8', 'max:12']
        ]);

        $contact = Contact::create(array_merge($formFields, ['relatedUserId' => Auth::id()]));

        return redirect('/dashboard');
    }
}
