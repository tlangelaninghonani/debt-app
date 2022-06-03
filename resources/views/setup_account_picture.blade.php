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
    @include("components.loader")
    <div class="container">
        @if(Route::getfacaderoot()->current()->uri() == "setup_account_picture")
            <span class="material-icons-sharp" onclick="redirectBack()">
            west
            </span>
        @else
            <div class="display-flex-end">
                <span class="material-icons-sharp" onclick="redirect('/home')">
                east
                </span>
            </div>
        @endif
        <div class="breaker"></div>
        <span class="slogan">Setup an <span class="slogan-primary-color">account</span> picture</span>
        <div class="breaker"></div>
        <div class="display-flex-center">
            @if($account->account_picture != "")
                <img class="profile-pic-mid" src="/accounts/accounts_pictures/{{ $account->account_picture }}" alt="">
            @else
                <img class="profile-pic-mid display-none" id="preview" alt="">
                <span class="material-icons-sharp empty-account-mid">
                account_circle
                </span>
            @endif
        </div>
        <div class="breaker"></div>
        @if($account->account_picture != "")
            <div class="display-flex-center mid-gap">
                <div class="text-align-center" onclick="upload()">
                    <span class="material-icons-sharp ">
                    cloud
                    </span><br>
                    <span>Upload</span>
                </div>
                <div class="breaker"></div>
                <form id="pictureremove" class="display-none" action="/account/picture/remove" method="POST">
                    @csrf
                    @method("POST")
                </form>
                <div class="text-align-center" onclick="submitForm('pictureremove')">
                    <span class="material-icons-sharp ">
                    delete
                    </span><br>
                    <span>Remove</span>
                </div>
            </div>
        @else
            <div class="display-flex-center mid-gap">
                <div class="text-align-center" onclick="upload()">
                    <span class="material-icons-sharp ">
                    cloud
                    </span><br>
                    <span>Upload</span>
                </div>
            </div>
        @endif
        <div class="breaker"></div>
        <form id="pictureapload" class="display-none" action="/account/picture/upload" method="POST" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <input id="file" name="picture" type="file" class="display-none" onchange="preview(event)">
            <button type="button" onclick="submitForm('pictureapload')">
                <span>Save</span>
            </button>
        </form>
    </div>
    <script>
        function upload(){
            document.querySelector("#file").click();
        }
    </script>
    @if($account->account_picture != "")
        <script>
            function preview(event){
                if((event.target.files).length > 0){
                    document.querySelector(".profile-pic-mid").src = URL.createObjectURL(event.target.files[0]);
                    document.querySelector("#pictureapload").style.display = "block";
                }
            }
        </script>
    @else
        <script>
            function preview(event){
                if((event.target.files).length > 0){
                    document.querySelector("#preview").style.display = "block";
                    document.querySelector("#preview").src = URL.createObjectURL(event.target.files[0]);
                    document.querySelector("#pictureapload").style.display = "block";
                    document.querySelector(".empty-account-mid").style.display = "none";
                }
            }
        </script>
    @endif
</body>
</html>