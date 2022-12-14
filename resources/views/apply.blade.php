<!DOCTYPE html>
<html lang="en">
@include('components.address_bar_color')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="{{ $links['desktopCss'] }}">
    <script src="{{ $links['desktopJs'] }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pulltorefreshjs/0.1.22/index.umd.js" integrity="sha512-c08RNGquBScVDxl/Yf50kga+4ZEI/xuqjBxwFUTFjnRn4Zoz1qcd2m5e/E+Pi+2b0O+lwDPz+J9N3ZzHTbnxHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title></title>
</head>
<body>
    @include("components.menu")
    @include("components.loader")
    @if(Session::has("success"))
        <div class="applied" id="applied">
            <div class="text-align-center w-100">
                <span class="material-symbols-sharp icon-big">
                published_with_changes
                </span><br>
                <div class="breaker"></div>
                <span class="slogan">Submitted</span>
                <div class="breaker"></div>
                <span>Application successfully submitted</span>
                <div class="breaker"></div>
                <div class="text-align-center">
                    <span class="material-symbols-sharp action-icon" onclick="redirect('/apply')">
                    done
                    </span>
                </div>
            </div>
        </div>
        {{ Session::forget("success") }}
    @endif
    <div class="header-normal">
        <div class="display-flex-space-between">
            @include("components.header")
        </div>
        <div class="breaker"></div>
        <div class="div-ini-normal-not-right position-relative">
            <div class="display-flex-align">
                <i class="ph-folder-user icon-exp-small"></i>
                <div>
                    <span>Tlangelani nghonani</span><br>
                    <span>Main applicant</span>
                </div>
            </div>
        </div> 
    </div>
    @if($application)
        <div class="container-not-top view-bottom">
            <div class="text-align-center">
                <span class="material-symbols-sharp icon-big">
                info
                </span><br>
                <div class="breaker"></div>
                <span>Please confirm your <span class="primary-color">information</span> before submitting</span>
                <div class="breaker"></div>
            </div>
            <div>
                <span class="slogan">Personal</span><br>
                <div class="breaker"></div>
                <span>ID number - <span class="dark">{{ $application->id_number }}</span></span><br>
                <span>Merital status - <span class="dark">{{ $application->marital_status }}</span></span><br>
                <span>number of dependants - <span class="dark">{{ $application->number_of_dependants }}</span></span><br>
                <div class="breaker"></div>
                <span class="slogan">Residential</span><br>
                <div class="breaker"></div>
                <span>Province - <span class="dark">{{ $application->province }}</span></span><br>
                <span>Town - <span class="dark">{{ $application->town }}</span></span><br>
                <div class="breaker"></div>
                <span class="slogan">Employer</span><br>
                <div class="breaker"></div>
                <span>Employer full name - <span class="dark">{{ $application->employer_full_name }}</span></span><br>
                <span>Company name - <span class="dark">{{ $application->company_name }}</span></span><br>
                <span>Company province - <span class="dark">{{ $application->company_province }}</span></span><br>
                <span>Company town - <span class="dark">{{ $application->company_town }}</span></span><br>
                <span>Company contact - <span class="dark">{{ $application->company_contact }}</span></span><br>
                <span>Position held - <span class="dark">{{ $application->position_held }}</span></span><br>
                <span>Type of employment - <span class="dark">{{ $application->type_of_employment }}</span></span><br>
                @if($application->type_of_employment == "Contract")
                    <span>Employment length - <span class="dark">{{ $application->employment_length }}</span></span><br> 
                @endif
                <div class="breaker"></div>
                <span class="slogan">Income</span><br>
                <div class="breaker"></div>
                <span>Income before deductions - <span class="dark">R {{ number_format($application->income_before_deductions, 2, ".", " ") }}</span></span><br>
                <span>Income after deductions - <span class="dark">R {{ number_format($application->income_after_deductions, 2, ".", " ") }}</span></span><br>
                <div class="breaker"></div>
                <form id="submitform" action="/application/submit" method="POST">
                    @csrf
                    @method("POST")
                </form>
                <div class="display-flex-space-evenly">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp action-icon">
                        edit
                        </span><br>
                        <span>Edit</span>
                    </div>
                    <div class="text-align-center">
                        <span class="material-symbols-sharp action-icon-primary" onclick="submitForm('submitform')">
                        ios_share
                        </span><br>
                        <span>Submit</span>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-not-top">
            <div id="meritalobserver"></div>
            <div class="merital">
                <div class="button-style-primary float-center display-none" id="meritalobserverfloat">
                    <div class="display-flex-align spouse-float">
                        <i class="ph-folder-notch-plus icon-exp-small"></i>
                        <span class="my-font-align">Spouse</span> 
                    </div>
                </div>
            </div>
            <div class="display-flex-center">
                <div class="display-none" id="meritalobserverstatic">
                    <div class="button-style">
                        <div class="display-flex-align">
                            <i class="ph-folder-notch-plus icon-exp-small"></i>
                            <span class="my-font-align">Spouse</span> 
                        </div>
                    </div>
                    <div class="breaker"></div>
                </div>
            </div>
            <!--<div class="display-flex-space-around">
                <div class="focused to-focus" onclick="applicants(this)">
                    <span>Main applicant</span>
                </div>
                <div class="to-focus" onclick="applicants(this)">
                    <span>Spouce</span>
                </div>
            </div>
            <div class="breaker"></div>-->
            <form id="applyform" action="/apply" method="POST">
                <!-- Personal -->
                <div id="formpersonal" class="animation">
                    <div class="text-align-center profile">
                        <i class="ph-user icon-exp-big"></i><br>
                        <div class="breaker"></div>
                        <span>Personal</span>
                    </div>
                    <div class="breaker"></div>
                    <div class="progress-indicator">
                        <div class="progress-done"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                    </div>
                    <div class="breaker"></div>
                    @csrf
                    @method("POST")
                    <div class="input-contain">
                        <input type="number" id="idnumber" name="idnumber" placeholder="ID number">
                    </div>
                    <div class="breaker"></div>
                    <select name="maritalstatus" id="" onchange="checkMerital(this.value)">
                        <option>Marital status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Married in property">Married in property</option>
                        <option value="Divorced">Divorced</option>
                    </select>
                    <script>
                        function checkMerital(status){
                            
                            if(status === "Married" || status === "Married in property"){

                                observeMerital = true;
                                elementObserve("meritalobserver", "meritalobserver", "flex");
                                document.querySelector("#meritalobserverfloat").style.display = "flex";
                            }else{

                                observeMerital = false;
                                document.querySelector("#meritalobserverfloat").style.display = "none";
                                document.querySelector("#meritalobserverstatic").style.display = "none";
                            }
                        }
                    </script>
                    <div class="breaker"></div>
                    <select name="numberofdependants" id="">
                        <option>Number of dependants</option>
                        @for($i = 0; $i <= 20; $i++)
                            @if($i < 10)
                                <option value="0{{ $i }}">0{{ $i }}</option>
                            @else
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                        @endfor
                    </select>
                    <div class="breaker"></div>
                    <button type="button" class="button-icon-space" onclick="formNext('formpersonal', 'formresidential')">
                        <span>Next</span>
                        <i class="ph-arrow-right icon-exp-small"></i>
                    </button>
                </div>
                <!-- Residential -->
                <div id="formresidential" class="display-none animation">
                    <div class="text-align-center profile">
                        <i class="ph-globe-stand icon-exp-big"></i>
                        <div class="breaker"></div>
                        <span>Residential</span><br>
                    </div>
                    <div class="breaker"></div>
                    <div class="progress-indicator">
                        <div class="progress-pending"></div>
                        <div class="progress-done"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                    </div>
                    <div class="breaker"></div>
                    <select name="province" id="">
                        <option>Province</option>
                        <option value="Eastern Cape">Eastern Cape</option>
                        <option value="Free State">Free State</option>
                        <option value="Gauteng">Gauteng</option>
                        <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                        <option value="Limpopo">Limpopo</option>
                        <option value="Mpumalanga">Mpumalanga</option>
                        <option value="Northern Cape">Northern Cape</option>
                        <option value="North West">North West</option>
                        <option value="Western Cape">Western Cape</option>
                    </select>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="town" name="town" placeholder="Town name">
                    </div>
                    <div class="breaker"></div>
                    <button type="button" class="button-icon-space" onclick="formNext('formresidential', 'formemployer')">
                        <span>Next</span>
                        <i class="ph-arrow-right icon-exp-small"></i>
                    </button>
                </div>
                <!-- Employer -->
                <div id="formemployer" class="display-none animation">
                    <div class="text-align-center profile">
                        <i class="ph-bag-simple icon-exp-big"></i><br>
                        <div class="breaker"></div>
                        <span>Employer</span><br>    
                    </div>
                    <div class="breaker"></div>
                    <div class="progress-indicator">
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-done"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="employerfullname" name="employerfullname" placeholder="Employer full name">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="companyname" name="companyname" placeholder="Company name">
                    </div>
                    <div class="breaker"></div>
                    <select name="companyprovince" id="">
                        <option>Company province</option>
                        <option value="Eastern Cape">Eastern Cape</option>
                        <option value="Free State">Free State</option>
                        <option value="Gauteng">Gauteng</option>
                        <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                        <option value="Limpopo">Limpopo</option>
                        <option value="Mpumalanga">Mpumalanga</option>
                        <option value="Northern Cape">Northern Cape</option>
                        <option value="North West">North West</option>
                        <option value="Western Cape">Western Cape</option>
                    </select>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="companytown" name="companytown" placeholder="Company town name">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="number" id="companytel" name="companytel" placeholder="Company contact">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="positionheld" name="positionheld" placeholder="Position">
                    </div>
                    <div class="breaker"></div>
                    <select name="typeofemployment" id="" onchange="typeOfEmployment(this.value)">
                        <option value="">Type of employment</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Temporary">Temporary</option>
                        <option value="Contract">Contract</option>
                    </select>
                    <div id="typeofemployment" class="display-none">
                        <div class="breaker"></div>
                        <select name="employmentlength" id="">
                            <option value="">Employment length</option>
                            <option value="Within 6 months">Within 6 months</option>
                            <option value="Within a year">Within a year</option>
                            <option value="Within 2 years">Within 2 years</option>
                            <option value="Within 3 years">Within 3 years</option>
                            <option value="Within 4 years">Within 4 years</option>
                            <option value="Within 5 years">Within 5 years</option>
                            <option value="Within 6 years">Within 6 years</option>
                            <option value="Within 7 years">Within 7 years</option>
                            <option value="Within 8 years">Within 8 years</option>
                            <option value="Within 9 years">Within 9 years</option>
                            <option value="Within 10 years">Within 10 years</option>
                            <option value="Within 10 years">More than 10 years</option>
                        </select>
                    </div>
                    <script>
                        function typeOfEmployment(value){
                            if(value == "Contract" || value == "Temporary"){
                                document.querySelector("#typeofemployment").style.display = "block";
                            }else{
                                document.querySelector("#typeofemployment").style.display = "none";
                            }
                        }
                    </script>
                    <div class="breaker"></div>
                    <button type="button" class="button-icon-space" onclick="formNext('formemployer', 'formincome')">
                        <span>Next</span>
                        <i class="ph-arrow-right icon-exp-small"></i>
                    </button>
                </div>
                <!-- Income -->
                <div id="formincome" class="display-none animation">
                    <div class="text-align-center profile">
                        <i class="ph-wallet icon-exp-big"></i><br>
                        <div class="breaker"></div>
                        <span>Income</span>
                    </div>
                    <div class="breaker"></div>
                    <div class="progress-indicator">
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-done"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                    </div>
                    <div class="breaker"></div>
                    <div class="income">
                        <div class="display-flex-align">
                            <span>Before deductions - <span id="incomebefore">R 1000.00</span></span>
                        </div>
                        <div class="breaker"></div>
                        <input class="w-100 slider" name="incomebeforedeductions" type="range" min="1000" max="50000" value="1000" step="1000" oninput="sliderValue(this.value, 'incomebefore')"><br>
                        <div class="breaker"></div>
                        <div>
                            <span>After deductions -  <span id="incomeafter">R 1000.00</span></span>
                        </div>
                        <div class="breaker"></div>
                        <input class="w-100 slider" name="incomeafterdeductions" type="range" min="1000" max="50000" value="1000" step="1000" oninput="sliderValue(this.value, 'incomeafter')"><br>
                    </div>
                    <div class="breaker"></div>
                    <button type="button" class="button-icon-space" onclick="formNext('formincome', 'formexpenses')">
                        <span>Next</span>
                        <i class="ph-arrow-right icon-exp-small"></i>
                    </button>
                </div>
                <!-- Expenses -->
                <div id="formexpenses" class="display-none animation">
                    <div class="text-align-center profile">
                        <i class="ph-shopping-bag icon-exp-big"></i><br>
                        <div class="breaker"></div>
                        <span>Expenses</span>
                    </div>
                    <div class="breaker"></div>
                    <div class="progress-indicator">
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-done"></div>
                        <div class="progress-pending"></div>
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="groceries" name="groceries" placeholder="Groceries">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="waterandelectricity" name="waterandelectricity" placeholder="Water & electricity">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="homeinsurence" name="homeinsurence" placeholder="Home insurence">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="schoolfees" name="schoolfees" placeholder="School fees">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="travel" name="travel" placeholder="Travel to school">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="cellphone" name="cellphone" placeholder="Cellphone">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="subscriptions" name="subscriptions" placeholder="DSTV and/or other subscriptions">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="funeralpolicies" name="funeralpolicies" placeholder="Funeral policies">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="carinsurence" name="carinsurence" placeholder="Car insurence">
                    </div>
                    <div class="breaker"></div>
                    <div class="input-contain">
                        <input type="text" id="other" name="other" placeholder="Other">
                    </div>
                    <div class="breaker"></div>
                    <button type="button" class="button-icon-space" onclick="formNext('formexpenses', 'formdeclaration')">
                        <span>Next</span>
                        <i class="ph-arrow-right icon-exp-small"></i>
                    </button>
                </div>
                <!-- Declaration -->
                <div id="formdeclaration" class="display-none animation">
                    <div class="text-align-center profile">
                        <i class="ph-scroll icon-exp-big"></i><br>
                        <div class="breaker"></div>
                        <span>Declaration</span>
                    </div>
                    <div class="breaker"></div>
                    <div class="progress-indicator">
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-pending"></div>
                        <div class="progress-done"></div>
                    </div>
                    <div class="breaker"></div>
                    <div class="margin-ini">
                        <div class="display-flex">
                            <span id="checkbox" onclick="check()" class="material-symbols-sharp cursor-pointer">
                            check_box_outline_blank
                            </span>
                            <span>By continuing, i agree with to the <span class="dark">terms and conditions</span></span>
                        </div>
                    </div>
                    <script>
                        function check(){
                            if(document.querySelector("#checkbox").innerHTML !== "task_alt"){
                                document.querySelector("#checkbox").innerHTML = "task_alt";
                                document.querySelector("#checkbox").classList.add("primary-color");
                            }else{
                                document.querySelector("#checkbox").innerHTML = "check_box_outline_blank";
                                document.querySelector("#checkbox").classList.remove("primary-color");
                            }
                        }
                    </script>
                    <div class="breaker"></div>
                    <button class="button-icon-space" type="button" onclick="submitForm('applyform')">
                        <span>Submit application</span>
                        <i class="ph-paper-plane-tilt icon-exp-small"></i>
                    </button>
                </div>
            </form>
            <script>
                function sliderValue(amount, mode){
                    if(mode == "incomebefore"){
                        document.querySelector("#incomebefore").innerHTML = "R "+ parseInt(amount).toFixed(2);
                    }
                    if(mode == "incomeafter"){
                        document.querySelector("#incomeafter").innerHTML = "R "+ parseInt(amount).toFixed(2);
                    }
                    event.preventDefault();
                }
            </script>
        </div>
    @endif
    <script>
        function applicants(self){
            for (let i = 0; i < document.querySelectorAll(".focused").length; i++) {
                const element = document.querySelectorAll(".focused")[i];
                element.classList.remove("focused");
            }
            self.classList.add("focused");
        }

        function formNext(hide, show){
            document.querySelector("#" + hide).style.display = "none";
            document.querySelector("#" + show).style.display = "block";
        }
    </script>
</body>
</html>