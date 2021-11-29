@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection

@section('title', 'Personal dados de baja')
@section('content')
<div class="card card-danger disabled ">
    <div class="card-header">
      <h2 class="card-title" style="font-weight: bold;"><i class="fas fa-address-book"></i> LISTA DE PERSONAL DADOS DE BAJA</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
      <div class="card-body table-striped table-in-card">
<table class="table table-bordered" id="tableNormative">
<thead class="thead-dark">
    <tr style="font-size: .8em; text-align:center">                            
        <th scope="col">Código</th>
        <th scope="col">Nombres y Apellidos</th> 
        <th scope="col">DNI</th>
        <th scope="col"><i class="fas fa-phone-alt"></i> Teléfono</th>               
        <th scope="col"> Correo</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>

<tbody>
  @foreach ($employees as $employee)
      <tr style="font-size: .7em; text-align:center">                            
          <td style="font-size: 1.3em; font-weight: bold; ">
            {{$employee->id}}
          </td>
          <td style="font-size: 1.3em;font-weight: bold;">
            {{$employee->name}} {{$employee->father_name}} {{$employee->mother_name}}
          </td>
          <td style="font-size: 1.3em;font-weight: bold;">
            {{$employee->dni}}
          </td>
          <td style="font-size: 1.3em;font-weight: bold;">
            {{$employee->phone}}
          </td>
          <td style="font-size: 1.3em;font-weight: bold;">
            {{$employee->email}}
          </td>
          <td>
            <a class="btn btn-success btn-xs" type="button" data-restore="{{$employee->id}}" data-dni="{{$employee->dni}}" data-name="{{$employee->name}}" data-father="{{$employee->father_name}}" data-mother="{{$employee->mother_name}}" data-phone="{{$employee->phone}}" data-email="{{$employee->email}}">
              <i class="fas fa-trash-restore-alt"></i> Restaurar
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
<br>

<!--soft employee-->

<div id="modalRestore" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Restaurar Personal</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('employee.restore') }}" id="formRestore" method="POST">
          @csrf
          <div class="card-body">
            <div  class="row">
              <div hidden class="col-sm-4">
                <label>employee_id</label>
                <input  type="text" class="form-control" name="id" id="employe_id">
              </div>
              <div class="col-sm-4">
                <label>Nombre</label>
                <input readonly type="text" class="form-control" id="name">
              </div>
              <div class="col-sm-4">
                <label >Apellido paterno</label>
                <input readonly type="text" class="form-control"  id="father">
              </div>
              <div class="col-sm-4">
                <label>Apellido materno</label>
                <input readonly type="text" class="form-control"  id="mother">
              </div>
              <div class="col-sm-4">
                <label >DNI</label>
                <input readonly type="number" class="form-control" id="dni">
              </div>
              <div class="col-sm-4">
                <label >Email</label>
                <input readonly type="text" class="form-control" id="email">
              </div>
              <div class="col-sm-4">
                <label >Telefono/Celular</label>
                <input readonly type="number" class="form-control" id="phone">
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">

            <button type="submit" class="btn btn-success ">Restaurar</button>
            <button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancelar</button>
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

    //Restore employee
    $formRestore = $('#formRestore');
    $formRestore.on('submit', restoreEmployee);
    $modalRestore = $('#modalRestore');
    $("[data-restore]" ).on('click', openModalRestore);

});

//---------------------Modules Delete Relatives-------------------------

function openModalRestore() {
    var employe_id = $(this).data('restore');
    var name = $(this).data('name');
    var father = $(this).data('father');
    var mother = $(this).data('mother');
    var dni = $(this).data('dni');
    var phone = $(this).data('phone');
    var email = $(this).data('email');

    $modalRestore.find('[id=employe_id]').val(employe_id);
    $modalRestore.find('[id=name]').val(name);
    $modalRestore.find('[id=father]').val(father);
    $modalRestore.find('[id=mother]').val(mother);
    $modalRestore.find('[id=dni]').val(dni);
    $modalRestore.find('[id=phone]').val(phone);
    $modalRestore.find('[id=email]').val(email);

    $modalRestore.modal('show');
}

function restoreEmployee() {
    event.preventDefault();
    // Obtener la URL
    var restoreUrl = $formRestore.data('url');
    $.ajax({
        url: restoreUrl,
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
              'El empleado ha sido restaurado con éxito.',
              'success'
              )
              setTimeout( function () {
                  location.reload();
              }, 1000 )
          }
      },
    });
}
//----------------------------------------------------------------

</script>
@endsection