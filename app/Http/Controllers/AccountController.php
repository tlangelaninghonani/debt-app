<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function signUpIndex(){
        if(Session::has("signed")){
            return redirect("/home");
        }

        return view("sign_up");
    }
    
    public function signUp(Request $req){
        if($req->firstname != "" && $req->lastname != "" && 
        $req->phonenumber != "" && $req->emailaddress != "" && $req->password != ""){

            if(strlen(str_replace(" ", "", $req->phonenumber)) != 10){
                Session::put("error", true);
                Session::put("errormessage", "Invalid Phone number");
                return back(); 
            }

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

            if(Account::where("phone_number", str_replace(" ", "", $req->phonenumber))->exists()){
                Session::put("error", true);
                Session::put("errormessage", "Account already exists, Sign in instead");
                return back();
            }

            if(Account::where("email_address", str_replace(" ", "", strtolower($req->email)))->exists()){
                Session::put("error", true);
                Session::put("errormessage", "Account already exists, Sign in instead");
                return back();
            }

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

            $account = new Account();
            $account->first_name = ucfirst(strtolower($req->firstname));
            $account->last_name = ucfirst(strtolower($req->lastname));
            $account->phone_number = str_replace(" ", "", $req->phonenumber);
            $account->email_address = strtolower($req->emailaddress);
            $account->password = Hash::make($req->password);
            $account->save();

            Session::put("signed", true);
            Session::put("accountid", $account->id);
            return redirect("/home");
        }else{
            Session::put("error", true);
            Session::put("errormessage", "Please fill in all required fields");
            return back();
        }
    }

    public function signInIndex(){
        if(Session::has("signed")){
            return redirect("/home");
        }

        return view("sign_in");
    }

    public function signIn(Request $req){
        if($req->phonenumber != "" && $req->password != ""){
            $account = Account::where("phone_number", strtolower(str_replace(" ", "", $req->phonenumber)))->first();
            if($account){
                if(Hash::check($req->password, $account->password)){
                    Session::put("signed", true);
                    Session::put("accountid", $account->id);
                    return redirect("/home");
                }
            }
            Session::put("error", true);
            Session::put("errormessage", "Either your Phone number or Password is incorrect");
            return back();
        }else{
            Session::put("error", true);
            Session::put("errormessage", "Enter your Phone number and a Password to Sign in");
            return back();
        }
    }
}
