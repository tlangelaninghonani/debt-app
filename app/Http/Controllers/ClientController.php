<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Models\Account;
use App\Models\Application;
use App\Models\Meeting;
use App\Models\Doc;

class ClientController extends Controller
{
    public function welcome(){
        // if(Cookie::has("signed")){
        //     return redirect("/home");
        // }

        return view("welcome");
    }

    public function statuses(){
        if(! Cookie::has("signed")){
            return redirect("/sign_in");
        } 

        $account = Account::find(Cookie::get("accountid"));

        return view("statuses", [
            "account" => $account
        ]);
    }

    public function branches(){
        if(! Cookie::has("signed")){
            return redirect("/sign_in");
        } 

        $account = Account::find(Cookie::get("accountid"));

        return view("branches", [
            "account" => $account
        ]);
    }

    public function status(){
        if(! Cookie::has("signed")){
            return redirect("/sign_in");
        }

        $account = Account::find(Cookie::get("accountid"));
        $application = Application::where("account_id", $account->id)->first();  
        
        // if($application){
        //     if(! $application->submit){
                
        //         return redirect("/apply");
        //     }
        // }else{
        //     return redirect("/apply");
        // }

        return view("status", [
            "account" => $account
        ]);
    }

    public function feeds(){
        if(! Cookie::has("signed")){
            return redirect("/sign_in");
        }

        return view("feeds");
    }

    public function applyIndex(){
        if(! Cookie::has("signed")){
            return redirect("/sign_in");
        }

        $account = Account::find(Cookie::get("accountid")); 
        $application = Application::where("account_id", $account->id)->first();  
        
        if($application){
            if($application->submit){
                
                return redirect("/status");
            }
        }

        return view("apply", [
            "account" => $account,
            "application" => $application
        ]);
    }

    public function apply(Request $req){

        $account = Account::find(Cookie::get("accountid"));
        
        $application = new Application();
        $application->account_id = $account->id;
        $application->id_number = $req->idnumber;
        $application->marital_status = $req->maritalstatus;
        $application->number_of_dependants = $req->numberofdependants;
        
        $application->province = $req->province;
        $application->town = $req->town;

        $application->employer_full_name = $req->employerfullname;
        $application->company_name = $req->companyname;
        $application->company_province = $req->companyprovince;
        $application->company_town = $req->companytown;
        $application->company_contact = $req->companytel;
        $application->position_held = $req->positionheld;
        $application->type_of_employment = $req->typeofemployment;

        $application->groceries = $req->groceries;
        $application->water_and_electricity = $req->waterandelectricity;
        $application->home_insurence = $req->homeinsurence;
        $application->school_fees = $req->schoolfees;
        $application->travel = $req->travel;
        $application->cellphone = $req->cellphone;
        $application->subscriptions = $req->subscriptions;
        $application->funeral_policies = $req->funeralpolicies;
        $application->car_insurence = $req->carinsurence;
        $application->other = $req->other;
        
        if($req->employmentlength != ""){
            $application->employment_length = $req->employmentlength;
        }

        $application->income_before_deductions = $req->incomebeforedeductions;
        $application->income_after_deductions = $req->incomeafterdeductions;

        $application->save();

        Session::put("success", true);

        return back();

    }

    public function docs(){

        $account = Account::find(Cookie::get("accountid"));
        $docs = Doc::where("account_id", $account->id)->first();

        return view("docs", [
            "account" => $account,
            "docs" => $docs,
        ]);
    }

    public function uploadDocs(Request $req){

        $account = Account::find(Cookie::get("accountid"));

        $docs = new Doc();

        if(! $req->file("identity") || ! $req->file("payslip") || ! $req->file("statement")){

            Session::put("error", true);
            Session::put("errormessage", "Please upload all required documents");

            return back();
        }

        $file = $req->file("identity");
        $filename = uniqid(date("dmYHis"), true).$file->getClientOriginalName();
        $file->move("accounts/".$account->first_name." ".$account->last_name."/documents", $filename);

        $docs->account_id = $account->id;
        $docs->identity_document = $filename;
        $docs->identity_document_filename = $file->getClientOriginalName();

        $file = $req->file("payslip");
        $filename = uniqid(date("dmYHis"), true).$file->getClientOriginalName();
        $file->move("accounts/".$account->first_name." ".$account->last_name."/documents", $filename);
        $docs->payslip_document = $filename;
        $docs->payslip_document_filename = $file->getClientOriginalName();

        $file = $req->file("statement");
        $filename = uniqid(date("dmYHis"), true).$file->getClientOriginalName();
        $file->move("accounts/".$account->first_name." ".$account->last_name."/documents", $filename);
        $docs->statement_document = $filename;
        $docs->statement_document_filename = $file->getClientOriginalName();

        $docs->date_uploaded = date("d - M - Y");

        $docs->save();

        return back();

    }

    public function submit(){
        $account = Account::find(Cookie::get("accountid")); 
        $application = Application::where("account_id", $account->id)->first();

        $application->submit = true;

        $application->save();

        return back();
    }

    public function meet(){
        if(! Cookie::has("signed")){
            return redirect("/sign_in");
        }
        $account = Account::find(Cookie::get("accountid")); 

        return view("meet", [
            "account" => $account,
            "meeting" => Meeting::where("account_id", $account->id)->first()
        ]);
    }

    public function schedule(Request $req){
        
        $account = Account::find(Cookie::get("accountid")); 

        $meeting = new Meeting();
        $meeting->account_id = $account->id;
        $meeting->meeting_time = $req->time;
        $meeting->meeting_date = $req->date." ".date("F");

        $meeting->save();

        Session::put("success", true);

        return redirect("/meet");
    }

    public function meetingCancel(){
        $account = Account::find(Cookie::get("accountid")); 

        DB::table("meetings")->where("account_id", $account->id)->delete();

        return redirect("/meet");
    }

    public function home(){
        if(! Cookie::has("signed")){
            return redirect("/sign_in");
        }

        $account = Account::find(Cookie::get("accountid"));

        return view("home", [
            "account" => $account
        ]);
    }
}
