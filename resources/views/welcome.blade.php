@extends('layouts.apinicio')
@section('estilo')

<style>

    
    .cabecera_search{
        width: 100%;
    }

    .titulo_DNI{
        border-bottom:1px solid #3f3f3f;
        padding: 1em;
    }

    .formulario{
        padding: 2em 1em 1em 1em ;
        display: flex;
        flex-flow: wrap row;
        justify-content: space-around;
    }
    .form{
        width: 80%;
        display: flex;
        flex-wrap: row;
        justify-content: center;
    }

    .buscador__DNI{
        width: 40%;
        display: flex;
        justify-content: center;
    }
</style>

@endsection
@section('script')

<script>



    // solo permite usar 8 digitos
    var input=  document.getElementById('DNI');
        input.addEventListener('input',function(){
        if (this.value.length > 8) 
            this.value = this.value.slice(0,8); 
        })
    
    //cargar las variables
    window.addEventListener("load", function() {
        formulario.DNI.addEventListener("keypress", soloNumeros, false);
    });

    //Solo permite introducir numeros.
    function soloNumeros(e){
        var key = window.event ? e.which : e.keyCode;
        if (key < 48 || key > 57) {
            e.preventDefault();
        }
    }
</script>

@endsection
@section('content')
        <div class="cabecera_search flex-center">
            
            <div class="titulo_DNI content">
                <div class="title m-b-md">
                    <h4><i class="icon-list-ul"></i> INGRESE SU NÚMERO DE DNI</h4>
                </div>                
            </div>

            <!-- mensjaje -->
                @if(\Session::has('warnign'))
                <div class=" alert alert-danger " style="margin-top: 1em;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>

                <p> {{ \Session::get('warnign') }} </p>
                </div>
                @endif
                @if(\Session::has('success'))
                <div class=" alert alert-success " style="margin-top: 1em;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>

                <p> {{ \Session::get('success') }} </p>
                </div>
                @endif
            {{-- fin de mensaje --}}

            <div class="formulario">
                <form action=" {{ url('search') }} " method="get" class="form" id="formulario" name="formulario">

                    <div class="row col-md-12" style="border: 1px solid red;">

                        <div class="form-group input-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Entrega de Equipo
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">Devolución de Equipo
                            </label>
                        </div>
                    
                        <div class="row col-md-12" style="display:flex;">
                            <div class="buscador__DNI form-group col-md-12">
                                <div class="input-group" style="width: 100%;">
                                    <input type="text" class="form-control col-md-12" name="DNI" id="DNI" value="" placeholder="DNI  " autocomplete="off" max="99999999" required>
                                </div>
                            </div>
                            <div class="form-grup">
                                <button type="submit" class="btn btn-danger" name=""><i class="icon-search"></i> Buscar</button>
                                
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
            

            <div class="text">
                <p>Estimado usario la siguiente plataforma es solo para uso de Entrega / Deposicion de equipos moviles</p>
            </div>

            <div class="footer_search content">
                <div class="content">

                </div>
            </div>

        </div>

       

@endsection

