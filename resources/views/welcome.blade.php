<script>
     if(! navigator.onLine){
        window.location.href = "/offline";
    }
</script>
<!DOCTYPE html>
<html lang="en">
@include('components.address_bar_color')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="{{ $links['desktopCss'] }}">
    <script src="{{ $links['desktopJs'] }}"></script>
    <link rel="stylesheet" href="https://use.typekit.net/bxs7qjl.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pulltorefreshjs/0.1.22/index.umd.js" integrity="sha512-c08RNGquBScVDxl/Yf50kga+4ZEI/xuqjBxwFUTFjnRn4Zoz1qcd2m5e/E+Pi+2b0O+lwDPz+J9N3ZzHTbnxHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title></title>
</head>
@include("components.loader")
<div class="menu" id="menu">
    <div class="container">
        <div class="display-flex-end">
            <i class="ph-x icon-exp-small" onclick="menu('close')"></i>
        </div>
        <div class="display-flex-align">
            <i class="ph-headset icon-exp-small"></i>
            <span class="my-font-align">Contact us</span>
        </div>
    </div>
</div>
<body> 
    <!--<div class="float-top-left">
        <span class="material-icons-sharp" onclick="menu('open')">
        more_horiz
        </span> 
    </div>-->
    <!--<div class="top-banner-welcome">
        <div class="logo-background-mobile-binder">
            <div class="logo-background-mobile">
                @include("components.logo")
            </div>
        </div>
    </div>-->
    <div class="header">
        <span>Welcome</span>
        @include("components.find_a_branch")
        <i class="ph-dots-three-outline icon-exp-small" onclick="menu('open')"></i>
    </div>
    <div>
        <div class="container">
            <div class="text-align-center">
                <img src="/smart_logo.png" class="logo-svg" alt="" onclick="changeLogo(this);"><br>
                <script>
                    function changeLogo(self){

                        if(self.src.includes("/smart_logo.png")){

                            self.src = "/svg/logo.png";
                        }else{

                            self.src = "/smart_logo.png";
                        }
                    }
                </script>
                <div class="breaker"></div>
                <span class="slogan">The <span class="slogan primary-color">Helping Hand</span> Debt Counsellors</span>
                <div class="breaker"></div>
                <span>Do you feel as if you've bitten off more than you can chew? <span class="bold">The <span class="">Helping Hand</span> Debt Councellors</span> can offer you a debt solution that works.</span>
            </div>
            <!-- <div class="breaker"></div>
            <div class="margin-ini-exp">
                <div class="display-flex-align mid-gap">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp ">
                        groups
                        </span><br>
                        <span class="bold">10 000 <br> plus</span><br>
                        <span>Active <br> Clients</span>
                    </div>
                    <div class="text-align-center">
                        <span class="material-symbols-sharp ">
                        draft
                        </span><br>
                        <span class="bold">15 000 <br> plus</span><br>
                        <span>Submitted <br> applications</span>
                    </div>
                    <div class="text-align-center">
                        <span class="material-symbols-sharp ">
                        my_location
                        </span><br>
                        <span class="bold">50 <br> plus</span><br>
                        <span>Presentation <br> locations</span>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-center">
                <span class="material-symbols-sharp">
                airplay
                </span> 
                <span>Learn more from our <span class="bold">Website</span></span>
            </div> -->
            <div class="breaker"></div>
            <button class="button-icon-space" onclick="redirect('/sign_in')">
                <span>Get started</span>
                <i class="ph-arrow-right icon-exp-small"></i>
            </button>
            <form id="confirmaccountform" action="/confirm_account" method="POST" class="display-none">
                @csrf
                @method("POST")
            </form>
            @if(Cookie::has("signed"))
                <div class="breaker"></div>
                <div class="div-ini-normal-not-right position-relative" onclick="submitForm('confirmaccountform')">
                    <div class="display-flex-align">
                        <i class="ph-user icon-exp-small"></i>
                        <div>
                            <span>Tlangelani nghonani</span><br>
                            <span>067 722 8944</span>
                        </div>
                    </div>
                    <i class="ph-shield-check icon-exp-small"></i>
                </div> 
            @endif
            <div class="breaker"></div>
            <div class="display-flex-center">
                <i class="ph-circle-wavy-check icon-exp-small"></i>
                <span class="my-font-align">Registered debt counsellors - 645654</span>
            </div>
        </div>
    </div>
</body>
</html>