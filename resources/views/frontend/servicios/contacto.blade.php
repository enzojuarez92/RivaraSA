<!-- start help -->
{{-- <div class="bg-img cover-background theme-overlay border-radius-5 margin-30px-bottom sm-margin-25px-bottom"
    data-overlay-dark="8" data-background="img/bg/bg2.jpg">
    <div
        class="position-relative z-index-9 text-center padding-50px-tb md-padding-40px-tb sm-padding-30px-tb padding-30px-lr">

        
        <div
            class="border-radius-100 width-150px height-150px d-inline-block overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
            <img src="{{ asset($foto) }}" alt="" class="border-radius-100 width-150px height-150px" />
        </div>

        <h6 class="text-white font-weight-600 margin-5px-bottom">
            {{ $nombre }}
        </h6>
        <p class="text-white font-weight-500">
            {{ $role }}
        </p>

        <div class="bg-white separator-line-horrizontal-full opacity3 margin-20px-bottom sm-margin-15px-bottom"></div>
        <ul class="text-center no-padding no-margin">
            <li class="text-white margin-5px-bottom">
                <i class="fa fa-phone text-white margin-15px-right"></i>
                <a href="tel:" class="text-white">
                    {{ $telefono }}
                </a>
            </li>
            <li class="text-white">
                <i class="fas fa-envelope-open text-white margin-15px-right"></i>
                <a href="mailto:{{ $email }}" class="text-white">
                    {{ $email }}
                </a>
            </li>
        </ul>

    </div>
</div> --}}
<!-- end help -->
<div class="bg-img cover-background theme-overlay border-radius-5 sm-margin-30px-bottom mb-3" data-overlay-dark="8"
    data-background="img/bg/bg2.jpg">
    <div class="card sm-text-center mb-3 position-relative z-index-9">
        <div class="row no-gutters">
            <div class="col-12 col-md-3 my-auto sm-margin-15px-top">
                <img src="{{ asset($foto) }}" width="80" height="80" alt="profile" class="border-radius-100 m-2" />
            </div>
            <div class="col-12 col-md-9 ml-0">
                <div class="card-body">
                    <span class="text-dark font-size18 my-0 sm-margin-15px-bottom">
                        <b class="mb-0">{{ $nombre }}</b> <br> 
                        {{ $role }}
                    </span>
                    <p class="text-muted my-0">
                        <i class="fa fa-phone"></i>
                        <a href="tel:" class="text-muted">
                            {{ $telefono }}
                        </a>
                    </p>
                    {{-- <p class="text-muted my-0">
                        <i class="fas fa-envelope-open"></i>
                        <a href="mailto:{{ $email }}" class="text-muted">
                            {{ $email }}
                        </a>
                    </p> --}}
                </div>
            </div>
            <div class="card-footer w-100 d-flex justify-content-center p-0 mt-0">
                <small class="text-muted font-weight-600 my-0">
                    <i class="fas fa-envelope-open"></i>
                    <a href="mailto:{{ $email }}" class="text-muted">
                        {{ $email }}
                    </a>
                </small>
            </div>
        </div>
    </div>
</div>
