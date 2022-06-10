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
    @include("components.error")
    @include("components.loader")
    <div class="position-fixed padding h-100">
        <div class="display-flex-center h-100">
            <div class="text-align-center w-100">
                <span class="material-icons-sharp icon-big">
                wifi_off
                </span>
                <div class="breaker"></div>
                <span>No <span class="primary-color">internet</span> connection</span>
                <div class="breaker"></div>
                <button>
                    <span>Try again</span>
                </button>
            </div>
        </div>
    </div>
</body>
</html>