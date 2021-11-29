@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection

@section('title', 'Contratos vigentes')
@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h2 class="card-title" style="font-weight: bold;"><i class="fas fa-address-book"></i> PERSONAL CON CONTRATOS VIGENTES </h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card-body table-striped table-in-card">
        <table class="table table-bordered" id="tableNormative">
        <thead class="thead-dark">
            <tr style="font-size: .8em; text-align:center">                            
                <th scope="col">DNI</th>
                <th scope="col">Personal</th> 
                <th scope="col">Inicio Contrato</th>
                <th scope="col">Fin de Contrato</th>               
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
          @foreach ($currentContracts as $contract)
            
              <tr style="font-size: .7em; text-align:center">                            
                  <td style="font-size: 1.3em; font-weight: bold; ">
                    {{$contract->employee->dni}}
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
                    text-align: right;background-color: #e87c86;outline: none;border: 0;border-radius: 3px;padding: 0 3px;color: #fff;" type="date" readonly value="{{$contract->end_contract}}">
                  </td>
                  <td>
                    <a class="btn btn-info btn-xs" type="button" href="{{route('contract.show', $contract->id)}}">
                      <i class="far fa-eye"></i>
                    </a>
                    <a class="btn btn-secondary btn-xs" type="button" href="{{route('contract.edit', $contract->id)}}">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-xs" type="button" data-delete="{{$contract->employee_id}}" data-name="{{$contract->employee->name}}" data-father="{{$contract->employee->father_name}}" data-mother="{{$contract->employee->mother_name}}" data-start="{{$contract->start_contract}}" data-end='{{$contract->end_contract}}' data-trial="{{$contract->trial_period}}">
                      <i class="fas fa-trash-alt"></i> 
                    </a>
                  </td>
              </tr>
              
            @endforeach 
        </tbody>
        </table>  
</div> 
    </div>
    <!-- /.card-body -->
  </div>


<div id="modalDelete" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Eliminar Familiar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('contract.destroy') }}" id="formDelete" method="POST">
          @csrf
          <div class="card-body">
            <div  class="row">
              <div  class="col-sm-4">
                <label>employee_id</label>
                <input  type="text" class="form-control" name="employee_id" id="employee_id">
              </div>
              <div class="col-sm-4">
                <label>Nombre</label>
                <input readonly type="text" class="form-control" name="name" id="name">
              </div>
              <div class="col-sm-4">
                <label >Apellido paterno</label>
                <input readonly type="text" class="form-control" name="father_name" id="father">
              </div>
              <div class="col-sm-4">
                <label>Apellido materno</label>
                <input readonly type="text" class="form-control" name="mother_name" id="mother">
              </div>
              <div class="col-sm-4">
                <label >Inicio del contrato</label>
                <input readonly type="date" class="form-control" id="start">
              </div>
              <div class="col-sm-4">
                <label >Fin de periodo de prueba</label>
                <input readonly type="date" class="form-control" id="trial">
              </div>
              <div class="col-sm-4">
                <label >Fin de contrato</label>
                <input readonly type="date" class="form-control" id="end">
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-danger ">Eliminar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
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

    //delete relative
    $formDelete = $('#formDelete');
    $formDelete.on('submit', deleteRelative);
    $modalDelete = $('#modalDelete');
    $("[data-delete]" ).on('click', openModalDelete);
});

var $modalDelete;
var $formDelete;

//---------------------Modules Delete Relatives-------------------------

function openModalDelete() {
    var employee_id = $(this).data('delete');
    var name = $(this).data('name');
    var father = $(this).data('father');
    var mother = $(this).data('mother');
    var start = $(this).data('start');
    var trial = $(this).data('trial');
    var end = $(this).data('end');

    if(trial == "2000-01-02"){
      trial = "SIN PERIODO DE PRUEBA";
    }

    $modalDelete.find('[id=employee_id]').val(employee_id);
    $modalDelete.find('[id=name]').val(name);
    $modalDelete.find('[id=father]').val(father);
    $modalDelete.find('[id=mother]').val(mother);
    $modalDelete.find('[id=start]').val(start);
    $modalDelete.find('[id=trial]').val(trial);
    $modalDelete.find('[id=end]').val(end);

    $modalDelete.modal('show');
}

function deleteRelative() {
    event.preventDefault();
    // Obtener la URL
    var editUrl = $formDelete.data('url');
    $.ajax({
        url: editUrl,
        method: 'POST',
        data: new FormData(this),
        processData:false,
        contentType:false,

        success: function (data) {
          if (data != "") {
              for ( var property in data )  {
                  toastr["error"](data[property])
                  toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }
              }
          } else {
            Swal.fire(
              '¡Todo salio correctamente!',
              'El contrato ha sido CANCELADO con éxito.',
              'success'
              )
              setTimeout( function () {
                  location.reload();
              }, 1000 )
          }
      },
    });
}

</script>
@endsection