
<div class="bg-img cover-background theme-overlay border-radius-5 sm-margin-30px-bottom mb-3" data-overlay-dark="8"
    data-background="img/bg/bg2.jpg">
    <div class="card mb-3 position-relative z-index-9">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-4 my-auto mx-sm-auto mx-md-auto sm-margin-10px-top text-center">
                <img src="/{{ $foto }}" alt="profile" class="border-radius-100 margin-15px-left img-fluid" style="max-width: 100px; max-height: 100px;" />
            </div>
            <div class="col-12 col-md-8">
                <div class="card-body text-center text-md-left">
                    <span class="text-dark font-size18 my-0 sm-margin-15px-bottom">
                        <b class="mb-0">{{ $nombre }}</b> <br> 
                        {{ $role }}
                    </span>
                    <p class="text-muted my-0">
                        <i class="fa fa-phone"></i>
                        <a href="https://api.whatsapp.com/send?phone=+549{{ $telefono }}&text=Hola%20{{ $nombre }}%20me%20contacto%20por%20..." target="_blank" class="text-muted">
                            (+54) 9 {{ $telefono }}
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="card-footer p-0 mt-0 text-center">
                    <small class="text-muted font-weight-500 my-0 text-center font-size16">
                        <i class="fas fa-envelope-open"></i>
                        <a href="mailto:{{ $email }}" class="text-muted">
                            {{ $email }}
                        </a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
