@if(Route::getfacaderoot()->current()->uri() == "apply")
    <div class="display-flex-align mid-gap">
        <script>
            function redirectBack(){

                if(visiblePart.length === 0){

                    loader();
                    history.back();
                }else{

                   formNext(formVisibilityState, visiblePart[visiblePart.length - 1], true, true);
                }
            }
        </script>
        <i class="ph-arrow-left icon-exp-small" onclick="redirectBack()"></i>
        <i class="ph-house-simple icon-exp-small" onclick="redirect('/home')"></i>
    </div>
    <span class="header-title">Apply</span>
@endif
@if(Route::getfacaderoot()->current()->uri() == "account")
    <span class="header-title">Account</span>
@endif
@if(Route::getfacaderoot()->current()->uri() == "meet")
    <span class="header-title">Meet</span>
@endif
@if(Route::getfacaderoot()->current()->uri() == "home")
    <span class="header-title">Home</span>
@endif
@if(Route::getfacaderoot()->current()->uri() == "status")
    <span class="header-title">Status</span>
@endif
@if(Route::getfacaderoot()->current()->uri() == "docs")
    <span class="header-title">Docs</span>
@endif
@if(Route::getfacaderoot()->current()->uri() == "branches")
    <i class="ph-arrow-left icon-exp-small" onclick="redirectBack()"></i>
    <span class="header-title">Branches</span>
@endif
@if(Route::getfacaderoot()->current()->uri() == "apply")
    <div class="display-flex-align mid-gap">
        <i class="ph-arrows-clockwise icon-exp-small" onclick="refreshPage()"></i>
        <i class="ph-bell icon-exp-small" ></i>
        <i class="ph-dots-three-outline icon-exp-small" onclick="menu('open')"></i>
    </div>
@else
    <div class="display-flex-align mid-gap">
        <i class="ph-bell icon-exp-small" ></i>
        <i class="ph-dots-three-outline icon-exp-small" onclick="menu('open')"></i>
    </div>
@endif
