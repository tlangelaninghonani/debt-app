<div class="bottom-nav">
    <div class="bottom-nav-binder">
        <div class="text-align-center relative" onclick="redirect('/home')">
            @if(Route::getfacaderoot()->current()->uri() == "home")
                <div class="focused-nav"></div>
            @endif
            <span class="material-symbols-sharp">
            home
            </span><br>
            <span class="helvetica">Home</span>
        </div>
        <div class="text-align-center relative" onclick="redirect('/meet')">
            @if(Route::getfacaderoot()->current()->uri() == "meet")
                <div class="focused-nav"></div>
            @endif
            <span class="material-symbols-sharp">
            videocam
            </span><br>
            <span class="helvetica">Meet</span>
        </div>
        @if($links['application']::where("account_id", Cookie::get("accountid"))->exists())
            @if($links['application']::where("account_id", Cookie::get("accountid"))->first()->submit)
                <div class="text-align-center relative" onclick="redirect('/status')">
                    @if(Route::getfacaderoot()->current()->uri() == "status")
                        <!--<div class="focused-nav"></div>-->
                    @endif
                    <span class="material-symbols-sharp action-icon-primary apply-icon">
                    update
                    </span>
                </div>
            @endif
            @if(! $links['application']::where("account_id", Cookie::get("accountid"))->first()->submit)
                <div class="text-align-center relative" onclick="redirect('/apply')">
                    @if(Route::getfacaderoot()->current()->uri() == "apply")
                        <!--<div class="focused-nav"></div>-->
                    @endif
                    <span class="material-symbols-sharp action-icon-primary apply-icon">
                    ios_share
                    </span>
                </div> 
            @endif 
        @else
            <div class="text-align-center relative" onclick="redirect('/apply')">
                @if(Route::getfacaderoot()->current()->uri() == "apply")
                    <!--<div class="focused-nav"></div>-->
                @endif
                <span class="material-symbols-sharp action-icon-primary apply-icon">
                ios_share
                </span>
            </div>
        @endif
        <div class="text-align-center relative" onclick="redirect('/docs')">
            @if(Route::getfacaderoot()->current()->uri() == "docs")
                <div class="focused-nav"></div>
            @endif
            <span class="material-symbols-sharp">
            folder
            </span><br>
            <span class="helvetica">Docs</span>
        </div>
        <div class="text-align-center relative " onclick="redirect('/account')">
            @if(Route::getfacaderoot()->current()->uri() == "account")
                <div class="focused-nav"></div>
            @endif
            <span class="material-symbols-sharp">
            account_circle
            </span><br>
            <span class="helvetica">Profile</span>
        </div>
    </div>
</div>