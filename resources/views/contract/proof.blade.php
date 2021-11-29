@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection

@section('title', 'Periodos de prueba')
@section('content')

<div class="card card-danger disabled">
    <div class="card-header">
      <h2 class="card-title" style="font-weight: bold;"><i class="fas fa-address-book"></i> PERSONAL CON CONTRATOS EN PERIODO DE PRUEBA </h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card-body table-striped table-in-card">
        <table class="table table-bordered" id="tableNormative">
        <thead class="thead-dark">
            <tr style="font-size: .8em; text-align:center">                            
                <th scope="col">Código</th>
                <th scope="col">Personal</th> 
                <th scope="col">Inicio Contrato</th>
                <th scope="col">Fin de periodo de Prueba</th>
                <th scope="col">Fin de Contrato</th>               
            </tr>
        </thead>

        <tbody>
          @foreach ($proofContracts as $contract)
            @if (!empty($contract->employee->dni) )
              <tr style="font-size: .7em; text-align:center">                            
                  <td style="font-size: 1.3em; font-weight: bold; ">
                    {{$contract->employee->id}}
                  </td>
                  <td style="font-size: 1.3em;font-weight: bold;">
                    {{$contract->employee->name}} {{$contract->employee->mother_name}} {{$contract->employee->father_name}}
                  </td>
                  <td style="font-size: 1.3em;font-weight: bold;">
                    <input style="font-weight: bold;
                    text-align: right;background-color: #59a9ff;outline: none;border: 0;border-radius: 3px;padding: 0 3px;color: #fff;" type="date" readonly value="{{$contract->start_contract}}">
                  </td>
                  <td style="font-size: 1.3em;font-weight: bold;">
                    <input style="font-weight: bold;
                    text-align: right;background-color: #ffd65e;outline: none;border: 0;border-radius: 3px;padding: 0 3px;color: #000;" type="date" readonly value="{{$contract->trial_period}}">
                  </td>
                  <td style="font-size: 1.3em;font-weight: bold;">
                  	<input style="font-weight: bold;
                    text-align: right;background-color: #e87c86;outline: none;border: 0;border-radius: 3px;padding: 0 3px;color: #fff;" type="date" readonly value="{{$contract->end_contract}}">
                  </td>
              </tr>   
              @endif
            @endforeach 
        </tbody>
        </table>  
</div> 
    </div>
    <!-- /.card-body -->
  </div>

@stop

@section('js')
<script>
$(document).ready(function () {

    $('#tableNormative').DataTable({
      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando [_START_ a _END_] total de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": " ",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    });
});

</script>
@endsection