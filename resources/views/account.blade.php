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
        <div class="text-align-center">
            <img src="/svg/account_circle.svg" class="ill-svg-cust" alt=""><br>
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
                <input type="text" id="firstname" name="firstname" autocomplete="off" value="{{ $account->first_name }}" placeholder="Type your first name">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="lastname" name="lastname" autocomplete="off" value="{{ $account->last_name }}" placeholder="Type your last name">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="text" id="phonenumber" name="phonenumber" autocomplete="off" value="{{ $account->phone_number }}" placeholder="Type your phone number">
            </div>
            <div class="breaker"></div>
            <div class="input-contain" style="padding-right: var(--padding)">
                <input type="text" id="email" name="emailaddress" autocomplete="off" value="{{ $account->email_address }}" placeholder="Type your email address">
                <span class="side-message">Optional</span>
            </div>
            <div class="breaker"></div>
            <span class="slogan">Update your <span class="slogan-primary-color">password</span></span>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="password" id="password" name="password" autocomplete="off" value="" placeholder="Type your password">
            </div>
            <div class="breaker"></div>
            <div class="input-contain">
                <input type="password" id="confirmpassword" name="confirmpassword" autocomplete="off" value="" placeholder="Repeat your password">
            </div>
            <div class="breaker"></div>
            <button type="button" class="button-icon-space" onclick="submitForm('updateform')">
                <span>Update changes</span>
                <span class="material-symbols-sharp">
                update
                </span>
            </button>
        </form>
    </div>
    @include("components.nav_bottom")
</body>
</html>