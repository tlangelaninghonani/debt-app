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
    <div class="popup-binder"></div>
    <div class="popup">
        <div id="debts" class="display-none">
            <div class="display-flex-space-between">
                <span class="slogan">Debts</span>
                <span class="material-symbols-sharp my-font-align" onclick="showHidePopup('debts', 'none')">
                arrow_drop_down
                </span>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-center">
                <div class="debts position-relative" style="border-radius: 55% 45% 51% 49% / 47% 18% 82% 53% ">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp icon-mid">
                        whatshot
                        </span><br>
                        <div class="breaker"></div>
                        <span class="number-big nowrap">60%</span><br>
                        <span>Looking good</span>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between">
                <div class="display-flex">
                    <span class="material-symbols-sharp icon-mid">
                    domain
                    </span><br>
                    <div>
                        <span class="slogan">Capitec</span><br>
     
                        <span>Balance outstanding - <span class="primary-color">R 20 000.00</span></span><br>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between">
                <div class="display-flex">
                    <span class="material-symbols-sharp icon-mid">
                    domain
                    </span><br>
                    <div>
                        <span class="slogan">Volkswagen</span><br>
                 
                        <span>Balance outstanding - <span class="primary-color">R 150 000.00</span></span><br>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between">
                <div class="display-flex">
                    <span class="material-symbols-sharp icon-mid">
                    domain
                    </span><br>
                    <div>
                        <span class="slogan">Mjinga Finance</span><br>
                    
                        <span>Balance outstanding - <span class="primary-color">R 10 000.00</span></span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("components.menu")
    @include("components.loader")
    <div class="observer"></div>
    <div class="header-home">
        @include("components.header_banner_background")
    </div>
    <div class="home-container">
        <div class="greeting">
            <span class="slogan">Good morning <br> Tlangelani</span>
        </div>
        <div class="home-content">
            <div>
                <div class="installment">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp icon-big">
                        task_alt
                        </span><br>
                        <div class="breaker"></div>
                        <span>Reduced to</span><br>
                        <span class="number-big">R 5 600.00</span><br>
                        <span>From <span>R 10 000.00</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="float-bottom display-flex-center">
            <div class="button-style">
                <div class="text-align-center">
                    <span class="material-symbols-sharp">
                    component_exchange
                    </span><br>
                    <span>Update</span> 
                </div>
                <div class="text-align-center">
                    <span class="material-symbols-sharp">
                    call
                    </span><br>
                    <span>Contact us</span> 
                </div>
                <div class="text-align-center" onclick="showHidePopup('debts', 'block')">
                    <span class="material-symbols-sharp">
                    domain
                    </span><br>
                    <span>Debts</span> 
                </div>
            </div>
            <!--<div class="text-align-center">
                <span class="material-symbols-sharp action-icon-opacity">
                domain
                </span><br>
                <span>Debts</span>
            </div>-->
        </div>
    </div>
    @include("components.nav_bottom_home")
</body>
</html>