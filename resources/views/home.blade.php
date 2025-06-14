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
    <div class="popup-binder"></div>
    <div class="popup">
        <div id="debts" class="display-none">
            <div class="display-flex-space-between">
                <span>Debts</span>
                <span class="material-symbols-sharp my-font-align" onclick="showHidePopup('debts', 'none')">
                arrow_drop_down
                </span>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-center">
                <div class="circle-badge position-relative">
                    <div class="text-align-center">
                        <i class="ph-chart-pie-slice icon-exp-big"></i><br>
                        <div class="breaker"></div>
                        <span class="number-big nowrap">60%</span><br>
                        <span>Looking good</span>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="text-align-center">
                <span>Your debts</span>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between debt">
                <div class="display-flex-align">
                    <i class="ph-folder-notch-minus icon-exp-small"></i><br>
                    <div class="my-font-align">
                        <span class="bold">Capitec</span><br>
           
                        <span>Balance outstanding - <span class="bold">R 20 000.00</span></span><br>
                    </div>
                </div>
                <div class="debt-progress">
                    <span>12%</span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between debt">
                <div class="display-flex-align">
                    <i class="ph-folder-notch-minus icon-exp-small"></i><br>
                    <div class="my-font-align">
                        <span class="bold">Volkswagen</span><br>
                  
                        <span>Balance outstanding - <span class="bold">R 150 000.00</span></span><br>
                    </div>
                </div>
                <div class="debt-progress">
                    <span>50%</span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between debt">
                <div class="display-flex-align">
                    <i class="ph-folder-notch-minus icon-exp-small"></i><br>
                    <div class="my-font-align">
                        <span class="bold">Absa</span><br>
          
                        <span>Balance outstanding - <span class="bold">R 10 000.00</span></span><br>
                    </div>
                </div>
                <div class="debt-progress">
                    <span>35%</span>
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
        <div class="home-content">
            <div class="h-100"> 
                <div class="greeting">
                    <i class="ph-hand-waving icon-exp-mid"></i>
                    <div>
                        <span class="slogan">Hello there</span><br>
                        <span>Tlangelani</span>
                    </div> 
                </div>
            </div>
            <div class="display-flex-center h-100">
                <div class="installment">
                    <div class="text-align-center">
                        <i class="ph-check-square-offset icon-exp-big"></i><br>
                        <div class="breaker"></div>
                        <span>Reduced to</span><br>
                        <span class="number-big">R 5 600.00</span><br>
                        <span>From <span>R 10 000.00</span></span>
                    </div>
                    <div class="installment-tag">
                        <span>68%</span>
                    </div>
                </div>
            </div>
            <div class="h-100" style="display: flex; align-items: flex-end; justify-content: center">
                <div class="button-style-white opacity button-style-auto-wdith">
                    <div class="text-align-center">
                        <i class="ph-headset icon-exp-small"></i><br>
                        <span>Contact us</span> 
                    </div>
                    <div class="text-align-center" onclick="showHidePopup('debts', 'block')">
                        <i class="ph-folder-notch-minus icon-exp-small"></i><br>
                        <span>Your debts</span> 
                    </div>
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