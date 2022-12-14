<div class="bottom-nav-home display-flex-space-between">
    <div class="text-align-center relative" onclick="redirect('/home')">
        @if(Route::getfacaderoot()->current()->uri() == "home")
            <div class="focused-nav"></div>
        @endif
        <i class="ph-house-simple icon-exp-small"></i><br>
        <span class="helvetica">Home</span>
    </div>
    <!--<div class="text-align-center relative" onclick="redirect('/meet')">
        @if(Route::getfacaderoot()->current()->uri() == "meet")
            <div class="focused-nav"></div>
        @endif
        <span class="material-symbols-sharp">
        videocam
        </span><br>
        <span class="helvetica">Meet</span>
    </div>-->
    <!-- @if($links['application']::where("account_id", Cookie::get("accountid"))->exists())
        @if($links['application']::where("account_id", Cookie::get("accountid"))->first()->submit)
            <div class="text-align-center relative" onclick="redirect('/status')">
                @if(Route::getfacaderoot()->current()->uri() == "status")
                    <div class="focused-nav"></div>
                @endif
                <span class="material-symbols-sharp">
                update
                </span><br>
                <span>Status</span>
            </div>
        @endif
        @if(! $links['application']::where("account_id", Cookie::get("accountid"))->first()->submit)
            <div class="text-align-center relative" onclick="redirect('/apply')">
                @if(Route::getfacaderoot()->current()->uri() == "apply")
                    <div class="focused-nav"></div>
                @endif
                <span class="material-symbols-sharp">
                ios_share
                </span><br>
                <span>Apply</span>
            </div> 
        @endif 
    @else
        <div class="text-align-center relative" onclick="redirect('/apply')">
            @if(Route::getfacaderoot()->current()->uri() == "apply")
                <div class="focused-nav"></div>
            @endif
            <span class="material-symbols-sharp">
            ios_share
            </span><br>
            <span>Apply</span>
        </div>
    @endif -->
    <div class="text-align-center relative" onclick="redirect('/status')">
        @if(Route::getfacaderoot()->current()->uri() == "status")
            <div class="focused-nav"></div>
        @endif
        <i class="ph-tree-structure icon-exp-small"></i><br>
        <span>Status</span>
    </div>
    <div class="text-align-center relative" onclick="redirect('/apply')">
        @if(Route::getfacaderoot()->current()->uri() == "apply")
            <div class="focused-nav"></div>
        @endif
        <i class="ph-paper-plane-tilt icon-exp-small nav-middle-icon"></i><br>
    </div> 
    <div class="text-align-center relative" onclick="redirect('/docs')">
        @if(Route::getfacaderoot()->current()->uri() == "docs")
            <div class="focused-nav"></div>
        @endif
        <i class="ph-folder-notch icon-exp-small"></i><br>
        <span class="helvetica">Docs</span>
    </div>
    <div class="text-align-center relative " onclick="redirect('/account')">
        @if(Route::getfacaderoot()->current()->uri() == "account")
            <div class="focused-nav"></div>
        @endif
        <i class="ph-user icon-exp-small"></i><br>
        <span class="helvetica">Profile</span>
    </div>
</div>