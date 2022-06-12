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
    <div class="observer"></div>
    <div class="header display-flex-space-between">
        <span class="header-title">Home</span>
        <div class="display-flex-align mid-gap">
            <span class="material-icons-sharp" onclick="refreshPage()">
            refresh
            </span>
            <!--<span class="material-icons-sharp">
            notifications
            </span>-->
            <span class="material-icons-sharp" onclick="menu('open')">
            more_horiz
            </span>
        </div>
    </div>
    <div class="container view-bottom">
        <div class="display-flex-align gap">
            @if($account->account_picture != "")
                <img class="profile-pic-small" src="/accounts/accounts_pictures/{{ $account->account_picture }}" alt="">
            @else
                <span class="material-icons-sharp empty-account">
                account_circle
                </span>
            @endif
            <div>
                <span class="slogan-small"><span class="slogan-small-color">Hi</span>, {{ $account->first_name." ".$account->last_name }}</span><br>
                <span>Your status - <span>Application</span></span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex-space-between">
            <div class="installment">
                <div>
                    <span class="nowrap">Overall installment plan</span><br>
                    <span class="number-mid nowrap">R 8 000.00</span><br>
                    <span>From <span>R 15 000.00</span></span>
                </div>
            </div>
            <div class="text-align-center w-100 position-relative">
                <span class="material-icons-sharp edit-plan">
                edit
                </span>
                <span class="material-icons-sharp icon-mid">
                store
                </span>
                <br>
                <span>Visit your nearest <span class="primary-color">branch</span> to edit your plan</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex-space-between">
            <a href="tel:0158120127" class="text-align-center">
                <span class="material-icons-sharp action-icon-margin">
                call
                </span><br>
                <span>Call</span>
            </a>
            <div class="text-align-center">
                <span class="material-icons-sharp action-icon-margin">
                whatsapp
                </span><br>
                <span>WhatsApp</span>
            </div>
            <div class="text-align-center" onclick="redirect('/statuses')">
                <span class="material-icons-sharp action-icon-margin">
                update
                </span><br>
                <span>Statuses</span>
            </div>
            <div class="text-align-center" onclick="redirect('/sign_out')">
                <span class="material-icons-sharp action-icon-margin">
                power_settings_new
                </span><br>
                <span>Sign out</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div>
            <span class="slogan">Indebted to</span>
            <div class="breaker"></div>
            <div class="display-flex">
                <span class="material-icons-sharp icon-mid">
                apartment
                </span>
                <div>
                    <span class="title-small">Capitec Bank Limited</span><br>
                    <span>Indebt of <span class="dark">R 180 000.00</span></span><br>
                    <span>Installment - <span class="dark">R 2 000.00</span></span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex">
                <span class="material-icons-sharp icon-mid">
                apartment
                </span>
                <div>
                    <span class="title-small">Mjinga Finance</span><br>
                    <span>Indebt of <span class="dark">R 50 000.00</span></span><br>
                    <span>Installment - <span class="dark">R 1 000.00</span></span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex">
                <span class="material-icons-sharp icon-mid">
                maps_home_work
                </span>
                <div>
                    <span class="title-small">The Helping Hand Debt Counsellors</span><br>
                    <span>Aftercare of <span class="dark">R 1 000.00 &#183; PM</span></span><br>
                </div>
            </div>
        </div>
    </div>
    @include("components.nav_bottom")
</body>
</html>