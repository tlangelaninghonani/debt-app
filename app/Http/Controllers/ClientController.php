<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Account;
use App\Models\Application;
use App\Models\Meeting;

class ClientController extends Controller
{
    public function welcome(){
        if(Session::has("signed")){
            return redirect("/home");
        }

        return view("welcome");
    }

    public function setupAccountPicture(){
        $account = Account::find(Session::get("accountid")); 

        return view("setup_account_picture", [
            "account" => $account
        ]);
    }

    public function status(){
        if(! Session::has("signed")){
            return redirect("/sign_in");
        }

        $account = Account::find(Session::get("accountid")); 

        return view("status", [
            "account" => $account
        ]);
    }

    public function feeds(){
        if(! Session::has("signed")){
            return redirect("/sign_in");
        }

        return view("feeds");
    }

    public function applyIndex(){
        if(! Session::has("signed")){
            return redirect("/sign_in");
        }

        $account = Account::find(Session::get("accountid")); 
        $application = Application::where("account_id", $account->id)->first();   

        return view("apply", [
            "account" => $account,
            "application" => $application
        ]);
    }

    public function apply(Request $req){

        $account = Account::find(Session::get("accountid"));        
        
        $application = new Application();
        $application->account_id = $account->id;
        $application->alternative_phone_number = $req->alternativephonenumber;
        $application->marital_status = $req->maritalstatus;
        $application->number_of_dependants = $req->numberofdependants;
        
        $application->province = $req->province;
        $application->town = $req->town;

        $application->employer_full_name = $req->employerfullname;
        $application->company_name = $req->companyname;
        $application->company_province = $req->companyprovince;
        $application->company_town = $req->companytown;
        $application->company_tel = $req->companytel;
        $application->position_held = $req->positionheld;
        $application->type_of_employment = $req->typeofemployment;
        $application->employment_length = $req->employmentlength;

        $application->income_before_deductions = $req->incomebeforedeductions;
        $application->income_after_deductions = $req->incomeafterdeductions;

        $file = $req->file("identity");
        $filename = uniqid(date("dmYHis"), true).$file->getClientOriginalName();
        $file->move("accounts/accounts_documents", $filename);
        $application->identity_document = $filename;
        $application->identity_document_filename = $file->getClientOriginalName();;

        $file = $req->file("payslip");
        $filename = uniqid(date("dmYHis"), true).$file->getClientOriginalName();
        $file->move("accounts/accounts_documents", $filename);
        $application->payslip_document = $filename;
        $application->payslip_document_filename = $file->getClientOriginalName();;

        $file = $req->file("statement");
        $filename = uniqid(date("dmYHis"), true).$file->getClientOriginalName();
        $file->move("accounts/accounts_documents", $filename);
        $application->statement_document = $filename;
        $application->statement_document_filename = $file->getClientOriginalName();;

        $application->save();

        Session::put("success", true);

        return back();

    }

    public function meet(){
        if(! Session::has("signed")){
            return redirect("/sign_in");
        }
        $account = Account::find(Session::get("accountid")); 

        return view("meet", [
            "account" => $account,
            "meeting" => Meeting::where("account_id", $account->id)->first()
        ]);
    }

    public function schedule(Request $req){
        
        $account = Account::find(Session::get("accountid")); 

        $meeting = new Meeting();
        $meeting->account_id = $account->id;
        $meeting->meeting_time = $req->time;
        $meeting->meeting_date = $req->date." ".date("F");

        $meeting->save();

        Session::put("success", true);

        return redirect("/meet");
    }

    public function meetingCancel(){
        $account = Account::find(Session::get("accountid")); 

        DB::table("meetings")->where("account_id", $account->id)->delete();

        return redirect("/meet");
    }

    public function home(){
        if(! Session::has("signed")){
            return redirect("/sign_in");
        }

        $account = Account::find(Session::get("accountid"));

        return view("home", [
            "account" => $account
        ]);
    }
}
