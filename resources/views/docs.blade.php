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
    @if(Session::has("success"))
        <div class="applied" id="applied">
            <div class="text-align-center w-100">
                <span class="material-symbols-sharp icon-big">
                done
                </span>
                <div class="breaker"></div>
                <span>Successfully applied</span>
                <div class="breaker"></div>
                <div class="display-flex-end" onclick="redirect('/apply')">
                    <button class="display-flex-center">
                        <span>Done</span>
                    </button>
                </div>
            </div>
        </div>
        {{ Session::forget("success") }}
    @endif
    <div class="header">
        @include("components.header")
    </div>
    <div class="container view-bottom">
        <div class="text-align-center">
            <img src="/svg/42.svg" class="ill-svg" alt=""><br>
            <div class="breaker"></div>
            <span>Please review your <span class="primary-color">documents</span> before submitting</span>
            <div class="breaker"></div>
        </div>
        <form id="uplaoddocsform" action="/upload_docs" method="POST" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <div class="display-flex-align">
                <div class="doc-left">
                    <div class="display-flex-align nowrap">
                        <span class="material-symbols-sharp">
                        cloud_done
                        </span>
                        <div>
                            <span>Document uploaded</span><br>
                            <span>11 - November - 2022</span>
                        </div>
                    </div>
                </div>
                <div class="display-flex-center w-100">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp">
                        cloud_sync
                        </span><br>
                        <span>Re-Upload</span>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-space-between">
                <div class="display-flex-center w-100">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp">
                        cloud_sync
                        </span><br>
                        <span>Re-Upload</span>
                    </div>
                </div>
                <div class="doc-right">
                    <div class="display-flex-align nowrap">
                        <span class="material-symbols-sharp">
                        cloud_done
                        </span>
                        <div>
                            <span>Document uploaded</span><br>
                            <span>11 - November - 2022</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-align">
                <div class="doc-left">
                    <div class="display-flex-align nowrap">
                        <span class="material-symbols-sharp">
                        cloud_done
                        </span>
                        <div>
                            <span>Document uploaded</span><br>
                            <span>11 - November - 2022</span>
                        </div>
                    </div>
                </div>
                <div class="display-flex-center w-100">
                    <div class="text-align-center">
                        <span class="material-symbols-sharp">
                        cloud_sync
                        </span><br>
                        <span>Re-Upload</span>
                    </div>
                </div>
            </div>
            <div class="docs display-none">
                <span class="slogan">Copy of your identity</span>
                <div class="breaker"></div>
                <div class="display-flex-space-between mid-gap">
                    <div class="display-flex-align">
                        <span class="material-symbols-sharp">
                        folder
                        </span>
                        <span id="identitypreview">Upload a <span class="primary-color">certified</span> copy of your identity</span>
                    </div>
                    <input type="file" id="identity" name="identity" class="display-none" onchange="preview('identitypreview', event)" accept="application/pdf">
                    <div>
                        <span class="material-symbols-sharp action-icon" onclick="upload('identity')">
                        cloud
                        </span>
                    </div>
                </div>
                <div class="breaker"></div>
                <span class="slogan">Copy of your payslip</span>
                <div class="breaker"></div>
                <div class="display-flex-space-between mid-gap">
                    <div class="display-flex-align">
                        <span class="material-symbols-sharp">
                        folder
                        </span>
                        <span id="payslippreview">Upload a <span class="primary-color">3 months certified</span> copy of your payslip</span>
                    </div>
                    <input type="file" id="payslip" name="payslip" class="display-none" onchange="preview('payslippreview', event)" accept="application/pdf">
                    <div>
                        <span class="material-symbols-sharp action-icon" onclick="upload('payslip')">
                        cloud
                        </span>
                    </div>
                </div>
                <div class="breaker"></div>
                <span class="slogan">Copy of your bank statement</span>
                <div class="breaker"></div>
                <div class="display-flex-space-between mid-gap">
                    <div class="display-flex-align">
                        <span class="material-symbols-sharp">
                        folder
                        </span>
                        <span id="statementpreview">Upload a <span class="primary-color">3 months certified</span> copy of your bank statement</span>
                    </div>
                    <input type="file" id="statement" name="statement" class="display-none" onchange="preview('statementpreview', event)" accept="application/pdf">
                    <div>
                        <span class="material-symbols-sharp action-icon" onclick="upload('statement')">
                        cloud
                        </span>
                    </div>
                </div>
            </div>
            <script>
                function upload(fileId){
                    document.querySelector("#"+fileId).click();
                }
                function preview(previewId, event){
                    if((event.target.files).length > 0){
                        document.querySelector("#"+previewId).innerHTML = event.target.files[0].name;
                    }
                }
            </script>
            <div class="breaker"></div>
            <div class="display-flex-center">
                <div class="add-doc">
                    <span class="material-symbols-sharp">
                    add
                    </span>
                    <span class="my-font-align">Add document</span>
                </div>
            </div>
            <!--<button type="button" onclick="submitForm('uplaoddocsform')" class="button-icon-space">
                <span>Upload documents</span>
                <span class="material-symbols-sharp">
                upload
                </span>
            </button>-->
        </form>
    </div>
    @include("components.nav_bottom")
</body>
</html>