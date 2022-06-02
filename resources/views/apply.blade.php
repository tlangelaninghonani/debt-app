<!DOCTYPE html>
<html lang="en">
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
    <div class="applied" id="applied">
        <div class="text-align-center w-100">
            <span class="material-icons-sharp icon-big">
            done
            </span>
            <br><br><br>
            <span>Successfully applied</span>
            <p>
                <div class="display-flex-end" style="padding-top: 15px" onclick="(redirect('/home'))">
                    <button class="display-flex-center">
                        <span>Done</span>
                    </button>
                </div>
            </p>
        </div>
    </div>
    <div class="observer"></div>
    <div class="header display-flex-space-between">
        <div class="display-flex-align mid-gap">
            <span class="header-title">Apply</span>
        </div>
        <div class="display-flex-align mid-gap">
            <span class="material-icons-sharp" onclick="refreshPage()">
            refresh
            </span>
            <span class="material-icons-sharp">
            notifications
            </span>
            <span class="material-icons-sharp" onclick="menu('open')">
            more_horiz
            </span>
        </div>
    </div>
    <div class="top-banner-apply">
        <div class="banner-content-apply">
            <span class="slogan">We will be with you <span class="slogan-primary-color">all</span> the way</span>
        </div>
    </div>
    <div class="container view-bottom">
        <div class="display-flex-space-around">
            <div class="focused to-focus" onclick="applicants(this)">
                <span>Main applicant</span>
            </div>
            <div class="to-focus" onclick="applicants(this)">
                <span>Spouce</span>
            </div>
        </div>
        <div class="breaker"></div>
        <span class="slogan">Personal</span><br>
        <div class="breaker"></div>
        <form action="/apply" method="POST">
            @csrf
            @method("POST")
            <div class="input-contain">
                <input type="number" id="alternativephonenumber" name="alternativephonenumber" placeholder="Type your alternative Phone number">
            </div>
            <div class="breaker"></div>
            <select name="maritalstatus" id="">
                <option>Marital status *</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Married in property">Married in property</option>
                <option value="Divorced">Divorced</option>
            </select>
            <div class="breaker"></div>
            <select name="numberofdependants" id="">
                <option>Number of dependants *</option>
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
                <option>Province *</option>
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
                <input type="text" id="town" name="town" placeholder="Type your Town name *">
            </div>
            <div class="breaker"></div>
            <span class="slogan">Employer</span><br>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="employerfullname" name="employerfullname" placeholder="Type your employer Full name *">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="companyname" name="companyname" placeholder="Type a company Name *">
            </div>
            <div class="breaker"></div>
            <select name="companyprovince" id="">
                <option>Company province *</option>
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
                <input type="text" id="companytown" name="companytown" placeholder="Type a company Town name *">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="number" id="companytel" name="companytel" placeholder="Type a company Tel *">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="positionheld" name="positionheld" placeholder="Type your Position held *">
            </div>
            <div class="breaker"></div>
            <select name="typeofemployment" id="" onchange="typeOfEmployment(this.value)">
                <option>Type of employment *</option>
                <option value="Permanent">Permanent</option>
                <option value="Temporary">Temporary</option>
                <option value="Contract">Contract</option>
            </select>
            <div id="typeofemployment" class="display-none">
                <div class="breaker"></div>
                <select name="employmentlength" id="">
                    <option>Employment length *</option>
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
                </select>
            </div>
            <script>
                function typeOfEmployment(value){
                    if(value == "Contract"){
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
            <span class="slogan">Copy of your Identity</span>
            <div class="breaker"></div>
            <div class="display-flex-space-between mid-gap">
                <span>Upload a <span class="kanit">certified</span> copy of your Identity *</span>
                <div>
                    <span class="material-icons-sharp action-icon">
                    drive_folder_upload
                    </span>
                </div>
            </div>
            <div class="breaker"></div>
            <span class="slogan">Copy of your Payslip</span>
            <div class="breaker"></div>
            <div class="display-flex-space-between mid-gap">
                <span>Upload a <span class="kanit">3 months certified</span> copy of your Payslip *</span>
                <div>
                    <span class="material-icons-sharp action-icon">
                    drive_folder_upload
                    </span>
                </div>
            </div>
            <div class="breaker"></div>
            <span class="slogan">Copy of your Bank Statement</span>
            <div class="breaker"></div>
            <div class="display-flex-space-between mid-gap">
                <span>Upload a <span class="kanit">3 months certified</span> copy of your Bank Statement *</span>
                <div>
                    <span class="material-icons-sharp action-icon">
                    drive_folder_upload
                    </span>
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <div class="display-flex">
                    <span id="checkbox" onclick="check()" class="material-icons-sharp cursor-pointer">
                    check_box_outline_blank
                    </span>
                    <span>By continuing, i agree with the <span class="kanit">terms and conditions</span></span>
                </div>
            </div>
            <script>
                function check(){
                    document.querySelector("#checkbox").innerHTML = "task_alt";
                    document.querySelector("#checkbox").classList.add("primary-color");
                }
            </script>
            <div class="breaker"></div>
            <div class="display-flex-end">
                <button class="display-flex-center">
                    <span>Submit application</span>
                </button>
            </div>
        </form>
        <script>
            function sliderValue(amount, mode){
                if(mode == "incomebefore"){
                    document.querySelector("#incomebefore").innerHTML = "R "+parseInt(amount).toFixed(2);
                }
                if(mode == "incomeafter"){
                    document.querySelector("#incomeafter").innerHTML = "R "+parseInt(amount).toFixed(2);
                }
                event.preventDefault();
            }
        </script>
    </div>
    <script>
        //observer.observe(document.querySelector(".observer"));
    </script>
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