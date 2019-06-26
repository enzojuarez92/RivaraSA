        <!-- GRID SIDEBAR -->
        <!--===============================================================-->
        <div class="col-sm-4 grid-sidebar">
          <div class="row-heading row-heading-mt-40">
            <div class="col-sm-12">
              <h3 class="title-sm text-uppercase hr-left text-theme">Suscribite</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <p class="lead text-theme">Suscribite a nuestro Newsletter</p>
              <div class="input-group text-theme">
                <form action="{{ route('contacto.registro') }}" method="post">
                @csrf
                <input type="email" name="email" required class="form-control input-lg" placeholder="E-mail">
                <span class="input-group-btn">
                  <a href='#' class="btn btn-primary input-lg btn-z-index" data-toggle='modal' data-target='#registroNews'>
                    <i class="fa fa-paper-plane"></i> Suscribirme
                  </a>
                </span>
                <div class='modal fade' tabindex='-1' role='dialog' id='registroNews'>
                    <div class='modal-dialog modal-lg' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                ¿Como nos conocio?
                            </div>
                            <div class='modal-body'>
                              <select class="form-control" name="conocio" id="">
                                <option value="">Seleccionar</option>
                                @foreach ($conocio as $c)
                                    <option value="{{ $c->id }}">{{ $c->titulo }}</option>
                                @endforeach
                              </select>
                                <button style="margin-top: 5px" type="submit" class="btn btn-primary input-lg btn-z-index"><i class="fa fa-paper-plane"></i>Confirmar Suscripción</button>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
              </div>
            </div>
          </div>
          {{-- relacionados --}}
          @if (isset($relacionados) and $relacionados->count() > 0)
          <div class="row-heading row-heading-mt-40">
            <div class="col-sm-12">
              <h3 class="title-sm text-uppercase hr-left text-theme">Proyectos Relacionados</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              @foreach ($relacionados as $r)
              <a href="{{ $r->link() }}">
                <img class="img-responsive img-sidebar-sm pull-left" src="{{ asset($r->imagen()) }}" alt="{{ $r->url }}">
              </a>
              <h3 class="title-xs text-theme-xs display-inline-block"><a href="{{ $r->link() }}">{{ $r->title }}</a></h3>
              <p class="text-theme-xs"> <i class="fa fa-tag"></i> {{ $r->category->name }}</p>
              <p class="text-theme-xs"><small>{{ $r->created_at }}</small>
              </p>
              <hr class="hr-divider-xs">                  
              @endforeach
            </div>
          </div>
          @endif
          {{-- fin relacionados --}}
          {{-- tags --}}
          <div class="row-heading row-heading-mt-40">
            <div class="col-sm-12">
              <h3 class="title-sm text-uppercase hr-left text-theme">Tags</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-tags">
              <div class="text-theme">
                @foreach ($tags as $t)
                <a class="btn btn-xs btn-default" href="{{ $t->linkProjects() }}"><i class="fa fa-tags"></i>{{ $t->name }}</a>
                @endforeach
              </div>
            </div>
          </div>
          {{-- fin tags --}}
        {{-- tipos de proyecto --}}
        <div class="row-heading row-heading-mt-40">
          <div class="col-sm-12">
            <h3 class="title-sm text-uppercase hr-left text-theme"> Tipos de proyecto</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-tags">
            <div class="text-theme">
              @foreach ($types as $t)
              <a class="btn btn-xs btn-default" href="{{ $t->linkProjects() }}"><i class="fa fa-folder"></i>{{ $t->name }}</a>
              @endforeach
            </div>
          </div>
        </div>
        {{-- fin tipos de proyecto --}}
      
        </div>
        <!-- GRID SIDEBAR END -->
        <!--===============================================================-->
