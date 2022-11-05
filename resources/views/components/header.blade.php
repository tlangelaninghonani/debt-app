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
@if(Route::getfacaderoot()->current()->uri() == "branches")
    <span class="material-symbols-sharp" onclick="redirectBack()">
    arrow_back
    </span>
    <span class="header-title">Branches</span>
@endif
<div class="display-flex-align mid-gap">
    <span class="material-symbols-sharp" onclick="refreshPage()">
    refresh
    </span>
    <span class="material-symbols-sharp">
    notifications
    </span>
    <span class="material-icons-sharp" onclick="menu('open')">
    more_horiz
    </span>
</div>