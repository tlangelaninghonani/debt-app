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
    @include("components.error")
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
            <span class="material-symbols-sharp icon-big">
            find_in_page
            </span>
            <div class="breaker"></div>
            <span>Please <span class="primary-color-exp">review</span> your <span class="primary-color">documents</span> before submitting</span>
            <div class="breaker"></div>
        </div>
        <form id="uplaoddocsform" action="/upload_docs" method="POST" enctype="multipart/form-data">
            @csrf
            @method("POST")
            @if($docs)
                <div class="display-flex-align">
                    <span class="material-symbols-sharp">
                    contact_page
                    </span>
                    <span class="my-font-align">Certified copy of your Identity</span>
                </div>
                <div class="display-flex-align">
                    <span class="material-symbols-sharp">
                    description
                    </span>
                    <span class="my-font-align">Latest Payslip</span>
                </div>
                <div class="display-flex-align">
                    <span class="material-symbols-sharp">
                    account_balance
                    </span>
                    <span class="my-font-align">3 months Bank statement</span>
                </div>
                <div class="breaker"></div>
                <div class="display-flex-align">
                    <div class="doc-left">
                        <div class="display-flex-align nowrap">
                            <span class="material-symbols-sharp">
                            cloud_done
                            </span>
                            <input type="file" id="identity" name="identity" class="display-none" onchange="preview('identitypreview', event)" accept="application/pdf">
                            <div>
                                <span>Identity uploaded</span><br>
                                <span>{{ $docs->date_uploaded }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="display-flex-center w-100">
                        <div class="text-align-center" onclick="upload('identity')">
                            <span class="material-symbols-sharp ">
                            cloud_sync
                            </span><br>
                            <span>Re-Upload</span>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
                <div class="display-flex-space-between">
                    <div class="display-flex-center w-100">
                        <div class="text-align-center" onclick="upload('payslip')">
                            <span class="material-symbols-sharp ">
                            cloud_sync
                            </span><br>
                            <span>Upload</span>
                        </div>
                    </div>
                    <div class="doc-right">
                        <div class="display-flex-align nowrap">
                            <span class="material-symbols-sharp">
                            cloud_done
                            </span>
                            <input type="file" id="payslip" name="payslip" class="display-none" onchange="preview('payslippreview', event)" accept="application/pdf">
                            <div>
                                <span>Payslip uploaded</span><br>
                                <span>{{ $docs->date_uploaded }}</span>
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
                            <input type="file" id="statement" name="statement" class="display-none" onchange="preview('statementpreview', event)" accept="application/pdf">
                            <div>
                                <span>Bank statement uploaded</span><br>
                                <span>{{ $docs->date_uploaded }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="display-flex-center w-100">
                        <div class="text-align-center" onclick="upload('statement')">
                            <span class="material-symbols-sharp ">
                            cloud_sync
                            </span><br>
                            <span>Upload</span>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
                <button class="button-icon-space">
                    <span class="my-font-align">Re-Submit documents</span>
                    <span class="material-symbols-sharp">
                    drive_file_move
                    </span>
                </button> 
            @else
                <div class="display-flex-align">
                    <div class="doc-left">
                        <div class="display-flex-align nowrap">
                            <span class="material-symbols-sharp">
                            contact_page
                            </span>
                            <input type="file" id="identity" name="identity" class="display-none" onchange="preview('identitypreview', event)" accept="application/pdf">
                            <div>
                                <span>Upload Identity</span><br>
                                <span>Certified copy of your ID</span>
                            </div>
                        </div>
                    </div>
                    <div class="display-flex-center w-100">
                        <div class="text-align-center" onclick="upload('identity')">
                            <span class="material-symbols-sharp ">
                            cloud_upload
                            </span><br>
                            <span>Upload</span>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
                <div class="display-flex-space-between">
                    <div class="display-flex-center w-100">
                        <div class="text-align-center" onclick="upload('payslip')">
                            <span class="material-symbols-sharp ">
                            cloud_upload
                            </span><br>
                            <span>Upload</span>
                        </div>
                    </div>
                    <div class="doc-right">
                        <div class="display-flex-align nowrap">
                            <span class="material-symbols-sharp">
                            description
                            </span>
                            <input type="file" id="payslip" name="payslip" class="display-none" onchange="preview('payslippreview', event)" accept="application/pdf">
                            <div>
                                <span>Upload Payslip</span><br>
                                <span>Latest Payslip</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
                <div class="display-flex-align">
                    <div class="doc-left">
                        <div class="display-flex-align nowrap">
                            <span class="material-symbols-sharp">
                            account_balance
                            </span>
                            <input type="file" id="statement" name="statement" class="display-none" onchange="preview('statementpreview', event)" accept="application/pdf">
                            <div>
                                <span>Upload Bank statement</span><br>
                                <span>3 months Bank statement</span>
                            </div>
                        </div>
                    </div>
                    <div class="display-flex-center w-100">
                        <div class="text-align-center" onclick="upload('statement')">
                            <span class="material-symbols-sharp">
                            cloud_upload
                            </span><br>
                            <span>Upload</span>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
                <button class="button-icon-space">
                    <span class="my-font-align">Submit documents</span>
                    <span class="material-symbols-sharp">
                    drive_file_move
                    </span>
                </button> 
            @endif
            <script>
                function upload(fileId){
                    document.querySelector("#"+fileId).click();
                }
            </script>
        </form>
    </div>
    @include("components.nav_bottom")
</body>
</html>