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
@include("components.error")
@include("components.loader")
<body>
        <div class="w-100">
        <!--<div class="top-banner-sign-up">
            <div class="logo-background-mobile-binder">
                <div class="logo-background-mobile">
                    @include("components.logo")
                </div>
            </div>
        </div>-->
        <div class="header-normal">
           <div class="display-flex-space-between">
            <span class="material-symbols-sharp" onclick="redirectBack()">
                west
                </span>
                <span class="my-font-align">Register</span>
                <span class="material-symbols-sharp" onclick="refreshPage()">
                refresh
                </span>
           </div>
           <div class="breaker"></div>
            <div>
                @include("components.find_a_branch") 
            </div>
        </div>
        <div class="container">
            <div class="top-design">
                <div class="w-100">
                    <img src="/smart_logo.png" class="logo-svg" alt=""><br>
                    <div class="breaker"></div>
                    <span>We will be <span class="">with you</span> all the way</span>
                </div>
            </div>
            <div class="breaker"></div>
            <span class="slogan">Personal</span>
            <div class="breaker"></div>
            <form id="signupform" action="/sign_up" method="POST">
                @csrf
                @method("POST")
                <div class="input-contain">
                    <input type="text" id="firstname" name="firstname" autocomplete="off" value="" placeholder="Type your first name">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="text" id="lastname" name="lastname" autocomplete="off" value="" placeholder="Type your last name">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="number" id="phonenumber" name="phonenumber" autocomplete="off" value="" placeholder="Type your phone number">
                </div>
                <div class="breaker"></div>
                <div class="input-contain" style="padding-right: var(--padding)">
                    <input type="email" id="email" name="emailaddress" autocomplete="off" value="" placeholder="Type your email address">
                    <span class="side-message">Optional</span>
                </div>
                <div class="breaker"></div>
                <div class="gender-display">
                    <div class="gender text-align-center display-flex-center" id="male" onclick="selectGender('male')">
                        <div class="display-none" id="maleselected">
                            <span class="material-symbols-sharp">
                            done
                            </span>
                        </div>
                        <div>
                            <span class="material-symbols-sharp icon-small action-icon-style">
                            man
                            </span><br>
                            <span>Male</span>
                        </div>
                    </div>
                    <div class="gender text-align-center display-flex-center" id="female" onclick="selectGender('female')">
                        <div class="display-none" id="femaleselected">
                            <span class="material-symbols-sharp">
                            done
                            </span>
                        </div>
                        <div>
                            <span class="material-symbols-sharp icon-small action-icon-style">
                            woman
                            </span><br>
                            <span>Female</span>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
                <div class="display-flex-center" id="other" onclick="selectGender('other')">
                    <span class="material-symbols-sharp">
                    account_circle
                    </span>
                    <span class="my-font-align">Rather not say</span>
                    <div class="display-none" id="otherselected">
                        <span class="material-symbols-sharp">
                        done
                        </span>
                    </div>
                </div>
                <input type="hidden" id="gender" name="gender">
                <script>
                    function selectGender(gender){

                        document.querySelector("#maleselected").classList.remove("tag-top-right");
                        document.querySelector("#femaleselected").classList.remove("tag-top-right");
                        document.querySelector("#otherselected").classList.remove("tag-normal");

                        if(gender === "male"){

                            document.querySelector("#maleselected").classList.add("tag-top-right");
                            document.querySelector("#gender").value = gender.charAt(0).toUpperCase() + gender.slice(1);
                        }else if(gender === "female"){

                            document.querySelector("#femaleselected").classList.add("tag-top-right");
                            document.querySelector("#gender").value = gender.charAt(0).toUpperCase() + gender.slice(1);
                        }else{

                            document.querySelector("#otherselected").classList.add("tag-normal");
                            document.querySelector("#gender").value = gender.charAt(0).toUpperCase() + gender.slice(1);
                        }
                    }
                </script>
                <!--<div class="input-contain">
                    <select name="gender" id="gender" class="w-100">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>-->
                <div class="breaker"></div>
                <span class="slogan">Setup a <span class="slogan primary-color">password</span></span><br>
                <div class="breaker"></div>
                <span>Password should be at least <span class="primary-color-exp">6 </span>characters long</span>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="password" id="password" name="password" autocomplete="off" value="" placeholder="Type your password">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="password" id="confirmpassword" name="confirmpassword" autocomplete="off" value="" placeholder="Repeat your password">
                </div>
                <div class="breaker"></div>
                <div class="display-flex-space-between mid-gap">
                    <button type="button" class="button-icon-space" onclick="submitForm('signupform')">
                        <span>Sign up</span>
                        <span class="material-symbols-sharp">
                        east
                        </span>
                    </button>
                </div>
                <div class="breaker"></div>
                <div class="text-align-center">
                    <span class="nowrap" onclick="redirect('/sign_in')">Sign <span>in</span> instead</span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>