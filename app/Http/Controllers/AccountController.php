<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function signUpIndex(){
        // if(Cookie::has("signed")){
        //     return redirect("/home");
        // }

        return view("sign_up");
    }
    
    public function signUp(Request $req){

        if($req->firstname != "" && $req->lastname != "" && 
        $req->phonenumber != "" && $req->password != ""){

            if(strlen(str_replace(" ", "", $req->phonenumber)) != 10){

                Session::put("error", true);
                Session::put("errormessage", "Phone number should be 10 digits");

                return back(); 
            }

            if($req->emailaddress != ""){
                if(! strpos(strtolower($req->emailaddress), "@")){

                    Session::put("error", true);
                    Session::put("errormessage", "Invalid email address");
    
                    return back(); 
                }
    
                if(! strpos(strtolower($req->emailaddress), ".")){
                    
                    Session::put("error", true);
                    Session::put("errormessage", "Invalid email address");
    
                    return back(); 
                }
            }

            if($req->gender == ""){
                Session::put("error", true);
                Session::put("errormessage", "Please select your gender");

                return back(); 
            }

            if(Account::where("phone_number", str_replace(" ", "", $req->phonenumber))->exists()){
                Session::put("error", true);
                Session::put("errormessage", "Account already exists, sign in instead");

                return back();
            }

            if(Account::where("email_address", str_replace(" ", "", strtolower($req->email)))->exists()){
                Session::put("error", true);
                Session::put("errormessage", "Account already exists, sign in instead");

                return back();
            }

            if(strlen($req->password) < 6){
                Session::put("error", true);
                Session::put("errormessage", "Password should be at least 6 characters long");

                return back(); 
            }

            if($req->password != $req->confirmpassword){
                Session::put("error", true);
                Session::put("errormessage", "Mismatching passwords");

                return back(); 
            }

            $account = new Account();
            $account->first_name = ucfirst(strtolower($req->firstname));
            $account->last_name = ucfirst(strtolower($req->lastname));
            $account->phone_number = str_replace(" ", "", $req->phonenumber);
            $account->email_address = strtolower($req->emailaddress);
            $account->gender = $req->gender;
            $account->password = Hash::make($req->password);
            $account->save();

            Cookie::queue(Cookie::make("signed", true, 43200));
            Cookie::queue(Cookie::make("accountid", $account->id, 43200));

            Session::put("setuppicture", true);

            return redirect("/home");

        }else{
            Session::put("error", true);
            Session::put("errormessage", "Please fill in all required fields");

            return back();
        }
    }

    public function signInIndex(){
        // if(Cookie::has("signed")){
        //     return redirect("/home");
        // }

        if(! Account::where("id", Cookie::get("accountid"))->exists()){

            Cookie::queue(Cookie::forget("signed"));
            Cookie::queue(Cookie::forget("accountid"));

            return view("sign_in");
        }

        return view("sign_in");
    }

    public function confirmAccount(){

        return redirect("/home");
    }

    public function signIn(Request $req){
        if($req->phonenumber != "" && $req->password != ""){
            $account = Account::where("phone_number", strtolower(str_replace(" ", "", $req->phonenumber)))->first();
            if($account){
                if(Hash::check($req->password, $account->password)){
                    Cookie::queue(Cookie::make("signed", true, 43200));
                    Cookie::queue(Cookie::make("accountid", $account->id, 43200));

                    return redirect("/home");
                }
            }
            Session::put("error", true);
            Session::put("errormessage", "Either your phone number or password is incorrect");

            return back();
        }else{
            Session::put("error", true);
            Session::put("errormessage", "Enter your phone number and a password to sign in");

            return back();
        }
    }

    public function account(){
        if(! Cookie::has("signed")){
            return redirect("/sign_in");
        }

        $account = Account::find(Cookie::get("signed"));

        return view("account", [
            "account" => $account
        ]);
    }

    public function update(Request $req){

        $account = Account::find(Cookie::get("accountid")); 

        if($req->firstname != "" && $req->lastname != "" && 
        $req->phonenumber != ""){
            

            if(strlen(str_replace(" ", "", $req->phonenumber)) != 10){
                Session::put("error", true);
                Session::put("errormessage", "Invalid Phone number");

                return back(); 
            }

            if($req->emailaddress != ""){
                if(! strpos(strtolower($req->emailaddress), "@")){
                    Session::put("error", true);
                    Session::put("errormessage", "Invalid email address");
    
                    return back(); 
                }
    
                if(! strpos(strtolower($req->emailaddress), ".")){
                    Session::put("error", true);
                    Session::put("errormessage", "Invalid email address");
    
                    return back(); 
                }
            }

            if(Account::where("id", "!=", $account->id)->where("phone_number", str_replace(" ", "", $req->phonenumber))->exists()){
                Session::put("error", true);
                Session::put("errormessage", "Account already exists, Sign in instead");

                return back();
            }

            if(Account::where("id", "!=", $account->id)->where("email_address", str_replace(" ", "", strtolower($req->email)))->exists()){
                Session::put("error", true);
                Session::put("errormessage", "Account already exists, Sign in instead");

                return back();
            }

            if($req->password != ""){
                if(strlen($req->password) < 6){
                    Session::put("error", true);
                    Session::put("errormessage", "Password should be at least 6 characters long");
    
                    return back(); 
                }
    
                if($req->password != $req->confirmpassword){
                    Session::put("error", true);
                    Session::put("errormessage", "Mismatching Passwords");
    
                    return back(); 
                }
            }

            $account->first_name = ucfirst(strtolower($req->firstname));
            $account->last_name = ucfirst(strtolower($req->lastname));
            $account->phone_number = str_replace(" ", "", $req->phonenumber);
            $account->email_address = strtolower($req->emailaddress);
            $account->gender = $req->gender;
            if($req->password != ""){
                $account->password = Hash::make($req->password);
            }
            $account->save();

            return back();
        }else{
            Session::put("error", true);
            Session::put("errormessage", "Please fill in all required fields");

            return back();
        }
    }
}
