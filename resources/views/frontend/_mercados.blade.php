<!-- start service section -->
<section id="servicios">
    <div class="container">

        <div class="section-heading">
            <h3 class="title-style2">@lang('home.mercados')</h3>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="horizontaltab">
                    <ul class="resp-tabs-list hor_1">
                        <li> PIZARRA</li>
                        <li> ROFEX</li>
                        <li> MATBA</li>
                        <li> CHICAGO</li>
                    </ul>
                    <div class="resp-tabs-container hor_1" id="markets-tables">
                        <div>
                            <table class="table table-striped table-responsive">
                                <thead>
                                    @foreach ($tables['pizarra']['encabezado'] as $item)
                                    <tr>
                                        @foreach ($item as $item2)
                                        <th>{{ $item2 }}</th>
                                        @endforeach
                                    </tr>                                        
                                    @endforeach
                                </thead>
                                <tbody>
                                    @foreach ($tables['pizarra']['body'] as $item)
                                        <tr>
                                            @foreach ($item as $item2)
                                                <td class="{{ ($item2 < 0) ? 'text-danger' : '' }}">{{ $item2 }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    @foreach ($tables['rofex']['encabezado'] as $item)
                                    <tr>
                                        @foreach ($item as $item2)
                                        <th>{{ $item2 }}</th>
                                        @endforeach
                                    </tr>                                        
                                    @endforeach
                                </thead>
                                <tbody>
                                    @foreach ($tables['rofex']['body'] as $item)
                                    <tr>
                                        @foreach ($item as $item2)
                                        <td class="{{ ($item2 < 0) ? 'text-danger' : '' }}">{{ $item2 }}</td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    @foreach ($tables['matba']['encabezado'] as $item)
                                    <tr>
                                        @foreach ($item as $item2)
                                        <th>{{ $item2 }}</th>
                                        @endforeach
                                    </tr>                                        
                                    @endforeach
                                </thead>
                                <tbody>
                                    @foreach ($tables['matba']['body'] as $item)
                                    <tr>
                                        @foreach ($item as $item2)
                                        <td class="{{ ($item2 < 0) ? 'text-danger' : '' }}">{{ $item2 }}</td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    @foreach ($tables['chicago']['encabezado'] as $item)
                                    <tr>
                                        @foreach ($item as $item2)
                                        <th>{{ $item2 }}</th>
                                        @endforeach
                                    </tr>                                        
                                    @endforeach
                                </thead>
                                <tbody>
                                    @foreach ($tables['chicago']['body'] as $item)
                                    <tr>
                                        @foreach ($item as $item2)
                                        <td class="{{ ($item2 < 0) ? 'text-danger' : '' }}">{{ $item2 }}</td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>
<!-- end service section -->

@push('scripts')

    {{-- --}}

    <script>
    
        var tables; // Testing

       $(document).ready(function() {
            // $.ajax({
            //     url: 'https://markets-api.herokuapp.com/plain',
            //     type:  'GET'
            // })
            // .done(resp => {
            //     if(resp.code != 200)
            //         throw new Error("La api se encuentra caída.")
                    
            //     tables = resp.tables

            //     let htmlTables = '';
            //     let pos = 0;

            //     for(var table in tables) {

            //         htmlTables += `<h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none white; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span></h2>`

            //         if(pos == 0)
            //             htmlTables += `<div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">`
            //         else
            //             htmlTables += `<div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-${pos}">`

            //         htmlTables += tables[table].replace(/fondo-blanco/g, '')
            //         htmlTables += `</div>`

            //         pos++;
            //     }

            //     $('#markets-tables').html(htmlTables)
            // })
            // .fail(async error => {
            //     console.log(`Error al obtener los Mercados: ${error.message}`)
            // })
        })

    </script>

@endpush
