<div class="navbar-default">

    <!-- start top search -->
    <div class="top-search bg-theme">
        <div class="container">
            <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                <div class="input-group">
                    <span class="input-group-addon cursor-pointer">
                        <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                    </span>
                    <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                    <span class="input-group-addon close-search"><i class="fas fa-times font-size18 line-height-28 margin-5px-top"></i></span>
                </div>
            </form>
        </div>
    </div>
    <!-- end top search -->
    <div class="container">
        <div class="row text-center p-4">
            <div class="col-12">
                            <!-- start logo -->
                            <a href="{{ route('home') }}" class="navbar-brand"><img id="logo" src="{{ asset(LOGO) }}" alt="logo"></a>
                            <!-- end logo -->
            </div>
        </div>
    </div>
</div>

