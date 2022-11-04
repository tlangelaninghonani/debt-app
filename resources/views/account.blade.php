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
    @include("components.error")
    <div class="header">
        @include("components.header")
    </div>
    <div class="container view-bottom">
        <div class="position-relative radius">
            <div class="text-align-center">
                <div class="display-flex-center mid-gap">
                    @if($account->account_picture != "")
                        <img class="profile-pic-mid" src="/accounts/accounts_pictures/{{ $account->account_picture }}" alt="">
                        <div>
                            <div class="text-align-center" onclick="redirect('/setup_account_picture')">
                                <span class="material-symbols-sharp ">
                                edit
                                </span><br>
                                <span>Edit</span>
                            </div>
                        </div>
                    @else
                        <div class="text-align-center">
                            <img src="/svg/account_circle.svg" class="ill-svg-img" alt="" style="width: 180px !important"><br>
                        </div>
                        <!--<div>
                            <div class="text-align-center" onclick="redirect('/setup_account_picture')">
                                <span class="material-symbols-sharp ">
                                cloud
                                </span><br>
                                <span>Upload</span>
                            </div>
                        </div>-->
                    @endif
                </div>
                <div class="breaker"></div>
                <div>
                    <span class="slogan">{{ $account->first_name." ".$account->last_name }}</span><br>
                    <span>Phone number - <span class="dark">{{ $account->phone_number }}</span></span><br>
                    <span>Email address - <span class="dark">{{ $account->email_address }}</span></span><br>
                </div>
            </div>
            <div class="breaker"></div>
            <span class="slogan">Personal</span>
            <div class="breaker"></div>
            <form id="updateform" action="/account/update" method="POST">
                @csrf
                @method("POST")
                <div class="input-contain">
                    <input type="text" id="firstname" name="firstname" autocomplete="off" value="{{ $account->first_name }}" placeholder="Type your First name">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="text" id="lastname" name="lastname" autocomplete="off" value="{{ $account->last_name }}" placeholder="Type your Last name">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="text" id="phonenumber" name="phonenumber" autocomplete="off" value="{{ $account->phone_number }}" placeholder="Type your Phone number">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="text" id="email" name="emailaddress" autocomplete="off" value="{{ $account->email_address }}" placeholder="Type your Email address">
                </div>
                <div class="breaker"></div>
                <span class="slogan">Change your <span class="slogan-primary-color">password</span></span>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="password" id="password" name="password" autocomplete="off" value="" placeholder="Type your Password">
                </div>
                <div class="breaker"></div>
                <div class="input-contain">
                    <input type="password" id="confirmpassword" name="confirmpassword" autocomplete="off" value="" placeholder="Repeat your password">
                </div>
                <div class="breaker"></div>
                <button type="button" class="primal-color display-flex-center" onclick="submitForm('updateform')">
                    <span>Update changes</span>
                </button>
            </form>
        </div>
    </div>
    @include("components.nav_bottom")
</body>
</html>