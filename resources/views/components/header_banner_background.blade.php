@if(Route::getfacaderoot()->current()->uri() == "apply")
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
<div class="display-flex-align mid-gap">
    <i class="ph-arrows-clockwise icon-exp-small" onclick="refreshPage()"></i>
    <i class="ph-bell icon-exp-small" ></i>
    <i class="ph-dots-three-outline icon-exp-small" onclick="menu('open')"></i>
</div>