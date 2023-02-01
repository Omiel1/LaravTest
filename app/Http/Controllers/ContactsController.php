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

        return View('contacts/dashboard', ['contacts' => $contacts]);
        //return View('dashboard', ['contacts' => Auth::id()]);
    }

    public function create(){
        return View('/contacts/create');
    }

    public function details(Request $request){
        $contactId = $request->validate([
            'contactId' => ['required']
        ]);

        $contact = DB::table('contacts')->where(['id'=> $contactId, 'relatedUserId' => Auth::id()])->first();

        return View('contacts/details', ['contact' => $contact]);
    }

    public function createContact(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'surname' => ['max:20'],
            'address' => ['max:127'],
            'email' => ['max:63'],
            'phone' => ['required', 'min:8', 'max:12']
        ]);

        Contact::create(array_merge($formFields, ['relatedUserId' => Auth::id()]));

        return redirect('dashboard');
    }

    public function update(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'surname' => ['max:20'],
            'address' => ['max:127'],
            'email' => ['max:63'],
            'phone' => ['required', 'min:8', 'max:12']
        ]);

        DB::table('contacts')->where(['relatedUserId' => Auth::id(), 'id' => $request->input('contactId')])->update($formFields);

        return redirect('/dashboard');
    }

    public function deleteContact(Request $request){
        $formFields = $request->validate([
            'contactId' => ['numeric', 'min:0']
        ]);

        DB::table('contacts')->where(['relatedUserId' => Auth::id(), 'id' => $request->input('contactId')])->delete();
        return redirect('/dashboard');
    }

    public function getFromInput(Request $request){
        $input = $request->input('searchValue');

        if($input === ""){
            $contacts = DB::table('contacts')->where('relatedUserId', Auth::id())->orderBy('name', 'ASC')->get()->toArray();

            if(!$contacts){
                return response()->json(array('success' => true, 'html' => "No users found..."));
            } else {
                $returnHTML = view('/contacts/getFromInput')->with('contacts', $contacts)->render();
            }
        } else {
            $contacts = DB::table('contacts')->where('relatedUserId', Auth::id())->where('name','LIKE',"$input%")->orderBy('name', 'ASC')->get()->toArray();
            $returnHTML = view('/contacts/getFromInput')->with('contacts', $contacts)->render();
        }
        
        
        //$returnHTML = "Success!";
        

        return response()->json(array('success' => true, 'html' => $returnHTML));
    }
}
