<!-- start service section -->
<section id="servicios">
    <div class="container">

        <div class="section-heading">
            <h3 class="title-style2">Mercados</h3>
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
                        @if($tables)
                            @foreach ($tables as $table)
                                <div>
                                    {!! $table !!}
                                </div>
                            @endforeach
                        @else
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>12/12/2000</th>
                                        <th>ROSARIO</th>
                                        <th>DÁRSENA</th>
                                        <th>QUEQUÉN</th>
                                        <th>B. BLANCA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trigo</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Maíz</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Girasol</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Soja</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Sorgo</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>12/12/2000</th>
                                        <th>U$S</th>
                                        <th>DIF.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>DOLAR '08/19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>DOLAR '07/19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>SOJA '06/19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>12/12/2000</th>
                                        <th>U$S</th>
                                        <th>DIF.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SOJA AGO'19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>SOJA JUL'19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>MAIZ SEP''19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>MAIZ JUL'19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>TRIGO SEP'19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>TRIGO JUL'19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>12/12/2000</th>
                                        <th>U$S</th>
                                        <th>DIF.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ACE SOJA JUL 19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>HAR SOJA JUL 19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>MAIZ JUL 19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>TRIGO JUL 19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>SOJA JUL 19</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
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
