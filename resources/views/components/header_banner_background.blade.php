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
    <span class="material-symbols-sharp" onclick="redirectBack()">
    west
    </span>
    <span class="header-title">Branches</span>
@endif
<div class="display-flex-align mid-gap">
    <span class="material-symbols-sharp action-icon-opacity" onclick="refreshPage()">
    refresh
    </span>
    <!--<span class="material-symbols-sharp">
    notifications
    </span>-->
    <span class="material-icons-sharp action-icon-opacity" style="border-radius: 70% 30% 35% 65% / 52% 31% 69% 48% " onclick="menu('open')">
    more_horiz
    </span>
</div>