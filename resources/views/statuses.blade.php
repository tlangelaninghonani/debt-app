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
        <span class="material-icons-sharp" onclick="redirectBack()">
        arrow_back
        </span>
        <span class="header-title">Statuses</span>
        <div class="display-flex-align mid-gap" style="padding-top: 2px">
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
    <div class="container">
        <div class="display-flex mid-gap highlight">
            <span class="number-big nowrap">A</span>
            <div>
                <span class="slogan-small">Application</span>
                <div class="breaker"></div>
                <span>Applied for Debt Counselling and being assessed</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">A1</span>
            <div>
                <span class="slogan-small">Voluntary withdrawal</span>
                <div class="breaker"></div>
                <span>Voluntary withdrawal by consumer prior to being declared over-indebted</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">B</span>
            <div>
                <span class="slogan-small">Rejection</span>
                <div class="breaker"></div>
                <span>Assessment has resulted in a rejection</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">C</span>
            <div>
                <span class="slogan-small">Over-indebtness</span>
                <div class="breaker"></div>
                <span>Assessment has resulted in a decision that the consumer is over-indebted</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">D3</span>
            <div>
                <span class="slogan-small">Court</span>
                <div class="breaker"></div>
                <span>Formal debt re-structuring through the courts has commenced </span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">D4</span>
            <div>
                <span class="slogan-small">Court order granted</span>
                <div class="breaker"></div>
                <span>Formal debt re-structuring is completed, and a court order granted </span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">F1</span>
            <div>
                <span class="slogan-small">Mortgage</span>
                <div class="breaker"></div>
                <span>All restructured debts have been settled except the mortgage agreement </span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">F2</span>
            <div>
                <span class="slogan-small">Debt restructure completed</span>
                <div class="breaker"></div>
                <span>All restructured debts have been settled </span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">G</span>
            <div>
                <span class="slogan-small">Rescinded debt review</span>
                <div class="breaker"></div>
                <span>Magistrate rescinded the debt review court order</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">G1</span>
            <div>
                <span class="slogan-small">Application rejected</span>
                <div class="breaker"></div>
                <span>Application for debt review rejected by Magistrate - not over indebted</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">I</span>
            <div>
                <span class="slogan-small">Consumer deceased</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="display-flex mid-gap">
            <span class="number-big nowrap">J</span>
            <div>
                <span class="slogan-small">Consumer sequestrated</span>
            </div>
        </div>
        <div class="breaker"></div>
    </div>
</body>
</html>