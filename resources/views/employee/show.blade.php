@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection
@section('title', 'Lista de personal activo')
<!--para traer plugins de adminite section('plugins.Sweetalert2',true) ya activamos el plugin no necesitamos invocalarlo-->

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h2 class="card-title" style="font-weight: bold;"><i class="fas fa-address-book"></i> LISTA DE PERSONAL REGISTRADO</h2>
      <a class="btn btn-success btn-xs float-right" href="{{route('employee.index')}}" type="button">
          <i class="fas fa-user-plus"></i> Registar nuevo personal
        </a>
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
                <th scope="col"> Agencia</th>
                <th scope="col"> Familia</th>
                <th scope="col">Fotografía</th>
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
                    {{$employee->agency->agency_name}}
                  </td>
                  <td style="font-size: 1.3em;font-weight: bold;">
                    @if(($employee->family_burden) == 0)
                      <a class="btn btn-warning btn-xs disabled">
                        NO <i class="fas fa-user-lock"></i> 
                      </a>
                    @else
                      <a href="{{route('employee.relative.index', $employee->id)}}" class="btn btn-warning btn-xs ">
                        SI <i class="fas fa-user-plus"></i>
                      </a>
                    @endif
                  </td>
                  <td>
                      @if(($employee->photo) == 'employee.png')
                      <a href="{{ asset('employee.png') }}" data-toggle="lightbox" class="btn btn-outline-secondary btn-block btn-xs">
                        <i class="far fa-image"></i>
                      </a>
                      @else
                        <a href="{{asset('images/employees/'.$employee->photo)}}" data-toggle="lightbox" class="btn btn-outline-secondary btn-block btn-xs">
                          <i class="far fa-image"></i>
                        </a>
                      @endif
                  </td>
                  <td>
                    <a class="btn btn-info btn-xs" href="{{route('employee.see', $employee->id)}}" type="button">
                      <i class="far fa-eye"></i>
                    </a>
                    <a class="btn btn-secondary btn-xs" href="{{route('employee.edit', $employee->id)}}" type="button">
                      <i class="fas fa-user-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-xs" type="button" data-delete="{{$employee->id}}" data-dni="{{$employee->dni}}" data-name="{{$employee->name}}" data-father="{{$employee->father_name}}" data-mother="{{$employee->mother_name}}" data-phone="{{$employee->phone}}" data-agency="{{$employee->agency->agency_name}}">
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
<br>
    

<!--soft employee-->

<div id="modalDelete" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Desea dar de baja a empleado:</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('employee.destroy') }}" id="formDelete" method="POST">
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
                <label >Agencia donde labora</label>
                <input readonly type="text" class="form-control" id="agency">
              </div>
              <div class="col-sm-4">
                <label >Telefono/Celular</label>
                <input readonly type="number" class="form-control" id="phone">
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">

            <button type="submit" class="btn btn-danger ">Eliminar</button>
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

    //Soft delete employee
    $formDelete = $('#formDelete');
    $formDelete.on('submit', deleteEmployee);
    $modalDelete = $('#modalDelete');
    $("[data-delete]" ).on('click', openModalDelete);

});

var $modalDelete;
var $formDelete;


//---------------------Modules Delete Relatives-------------------------

function openModalDelete() {
    var employe_id = $(this).data('delete');
    var name = $(this).data('name');
    var father = $(this).data('father');
    var mother = $(this).data('mother');
    var dni = $(this).data('dni');
    var phone = $(this).data('phone');
    var agency = $(this).data('agency');

    $modalDelete.find('[id=employe_id]').val(employe_id);
    $modalDelete.find('[id=name]').val(name);
    $modalDelete.find('[id=father]').val(father);
    $modalDelete.find('[id=mother]').val(mother);
    $modalDelete.find('[id=dni]').val(dni);
    $modalDelete.find('[id=phone]').val(phone);
    $modalDelete.find('[id=agency]').val(agency);

    $modalDelete.modal('show');
}
function deleteEmployee() {
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
              'El empleado ha sido dado de baja con éxito.',
              'success'
              )
              setTimeout( function () {
                  location.reload();
              }, 1000 )
          }
      },
    });
}
//-------------------------------------------------------------------------

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
});

</script>


@endsection