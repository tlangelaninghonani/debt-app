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
    @include("components.error")
    <div class="header">
        @include("components.header")
    </div>
    <div class="container-not-top view-bottom">
        <!-- <div class="text-align-center">
            <span class="material-symbols-sharp icon-big">
            account_circle
            </span>
        </div> -->
        <div class="profile">
            <div class="text-align-center">
                <i class="ph-user icon-exp-big"></i><br>
                <div class="breaker"></div>
                <div>
                    <span>{{ $account->first_name." ".$account->last_name }}</span><br>
                    <span>{{ $account->phone_number }}</span>
                </div>
            </div>
        </div>
        <div class="breaker"></div>
        <span class="slogan">Personal</span>
        <div class="breaker"></div>
        <form id="updateform" action="/account/update" method="POST">
            @csrf
            @method("POST")
            <div class="input-contain">
                <input type="text" id="firstname" name="firstname" value="{{ $account->first_name }}" placeholder="first name">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="lastname" name="lastname" value="{{ $account->last_name }}" placeholder="Last name">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="phonenumber" name="phonenumber" value="{{ $account->phone_number }}" placeholder="Phone number">
            </div>
            <div class="breaker"></div>
            <div class="input-contain" style="padding-right: var(--padding)">
                <input type="text" id="email" name="emailaddress" value="{{ $account->email_address }}" placeholder="Email address">
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
                        <i class="ph-gender-male icon-exp-mid"></i><br>
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
                        <i class="ph-gender-female icon-exp-mid"></i><br>
                        <span>Female</span>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-center" id="other" onclick="selectGender('other')">
                <i class="ph-user icon-exp-small"></i>
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
            <div class="breaker"></div>
            <span class="slogan">Update your <span class="slogan primary-color">password</span></span>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="password" id="password" name="password" value="" placeholder="password">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="password" id="confirmpassword" name="confirmpassword" value="" placeholder="Repeat your password">
            </div>
            <div class="breaker"></div>
            <button type="button" class="button-icon-space" onclick="submitForm('updateform')">
                <span>Update changes</span>
                <i class="ph-clock-clockwise icon-exp-small"></i>
            </button>
        </form>
    </div>
    @include("components.nav_bottom")
</body>
</html>