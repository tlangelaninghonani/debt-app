<!DOCTYPE html>
<html lang="en">
@include('components.address_bar_color')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <img src="/svg/127.svg" class="ill-svg" alt=""><br>
                <span class="slogan">Submitted</span>
                <div class="breaker"></div>
                <span>Application successfully submitted</span>
                <div class="breaker"></div>
                <div class="text-align-center">
                    <span class="material-symbols-sharp action-icon" style="border-radius: 34% 66% 68% 32% / 52% 58% 42% 48% " onclick="redirect('/apply')">
                    done
                    </span>
                </div>
            </div>
        </div>
        {{ Session::forget("success") }}
    @endif
    <div class="header">
        @include("components.header")
    </div>
    @if($application)
        <div class="container-not-top view-bottom">
            <div class="text-align-center">
                <img src="/svg/267.svg" class="ill-svg" alt=""><br>
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
                        <span class="material-symbols-sharp action-icon" style="border-radius: 34% 66% 68% 32% / 52% 58% 42% 48% ">
                        edit
                        </span><br>
                        <span>Edit</span>
                    </div>
                    <div class="text-align-center">
                        <span class="material-symbols-sharp action-icon-primary" style="border-radius: 65% 35% 37% 63% / 64% 59% 41% 36%  " onclick="submitForm('submitform')">
                        ios_share
                        </span><br>
                        <span>Submit</span>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-not-top view-bottom">
            <div class="text-align-center">
                <img src="/svg/233.svg" class="ill-svg" alt=""><br>
                <span>We will be with you <span class="primary-color">all</span> the way</span>
                <div class="breaker"></div>
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
            <span class="slogan">Personal</span><br>
            <div class="breaker"></div>
            <form id="applyform" action="/apply" method="POST">
                @csrf
                @method("POST")
                <div class="input-contain">
                    <input type="number" id="idnumber" name="idnumber" placeholder="Type your ID number">
                </div>
                <div class="breaker"></div>
                <select name="maritalstatus" id="">
                    <option>Marital status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Married in property">Married in property</option>
                    <option value="Divorced">Divorced</option>
                </select>
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
                <span class="slogan">Residential</span><br>
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
                    <input type="text" id="town" name="town" placeholder="Type your town name">
                </div>
                <div class="breaker"></div>
                <span class="slogan">Employer</span><br>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="text" id="employerfullname" name="employerfullname" placeholder="Type your employer full name">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="text" id="companyname" name="companyname" placeholder="Type a company name">
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
                    <input type="text" id="companytown" name="companytown" placeholder="Type a company town name">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="number" id="companytel" name="companytel" placeholder="Type a company contact">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="text" id="positionheld" name="positionheld" placeholder="Type your position">
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
                <span class="slogan">Income before deductions</span>
                <div class="breaker"></div>
                <div>
                    <span>Around <span class="dark" id="incomebefore">R 1000.00</span></span>
                </div>
                <div class="breaker"></div>
                <input class="w-100 slider" name="incomebeforedeductions" type="range" min="1000" max="50000" value="1000" step="1000" oninput="sliderValue(this.value, 'incomebefore')"><br>
                <div class="breaker"></div>
                <span class="slogan">Income after deductions</span><br>
                <div class="breaker"></div>
                <div>
                    <span>Around <span class="dark" id="incomeafter">R 1000.00</span></span>
                </div>
                <div class="breaker"></div>
                <input class="w-100 slider" name="incomeafterdeductions" type="range" min="1000" max="50000" value="1000" step="1000" oninput="sliderValue(this.value, 'incomeafter')"><br>
                <div class="breaker"></div>
                <div>
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
                    <span class="material-symbols-sharp">
                    ios_share
                    </span>
                </button>
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
    </script>
    @include("components.nav_bottom")
</body>
</html>