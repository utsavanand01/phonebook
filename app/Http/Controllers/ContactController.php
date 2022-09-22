<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view("home",["contacts" => Contact::all()]);
    }
    public function store(Request $req){
            $req->validate([
                "name" => "required",
                "contact" => "required|size:10",
                "email" => "required",
                "city" => "required",
            ]);

            $cont = new Contact();
            $cont->name = $req->name;
            $cont->contact = $req->contact;
            $cont->email = $req->email;
            $cont->city = $req->city;
            $cont->save();

            return redirect()->route("homepage")->with("msg","Data inserted successfully");
    }

    public function destroy($cont_id){
        $data = Contact::find($cont_id);
        $data->delete();

        return redirect()->route("homepage")->with("error","data deleted successfully");
    }

    public function viewPhonebook($sno){
        $contact = Contact::find($sno);
        return view("view",["contact"=>$contact]);
    }
}
