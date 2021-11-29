@extends('adminlte::page')
@section('css')
@endsection
@section('plugins.Ekko-lightbox',true)
@section('title', 'Empleado')
@section('plugins.Datatables',true)

@section('content')
<h3 style="text-align: center;font-weight: bold;">CARGA FAMILIAR DE: {{$employee->name}} {{$employee->father_name}} {{$employee->mother_name}}</h3>
<br>
<div class="row">
  <div class="col-sm-4">
    <a data-create="{{$employee->id}}" class="btn btn-success btn-block" type="button">
        <i class="fas fa-user-plus"></i> Agregar familiar a personal
    </a>
  </div>
  <div class="col-sm-4">
    </div>
  <div class="col-sm-4">
    <a class="btn btn-info btn-block" href="{{route('employee.show')}}" type="button">
        <i class="fas fa-undo"></i> Retroceder
    </a>
  </div>
</div>
<br>
<hr>
<h3 style="font-weight: bold;">Lista de familiares:</h3>
<div class="row">
  <div class="col-sm-12">
  <div class="card-body table-striped table-in-card">
      <table class="table table-bordered" id="tableNormative">
          <thead class="thead-dark" >
              <tr style="font-size: .8em; text-align:center;">                            
                  <th scope="col">#</th>
                  <th scope="col">Nombres y Apellidos</th> 
                  <th scope="col">DNI</th>
                  <th scope="col">Documento</th>
                  <th scope="col">Parentesco</th>
                  <th scope="col">Edad</th>               
                  <th scope="col"> Fecha de nacimiento</th>
                  <th scope="col">Acciones</th>
              </tr>
          </thead>

          <tbody>
            
            @foreach ($relatives as $relative)
            <tr style="font-size: .7em; text-align:center">                            
                <td class="dtr-control sorting_1" style="font-size: 1.5em; font-weight: bold; ">
                  {{$nro=$nro+1}}
                </td>
                
                <td style="font-size: 1.5em;font-weight: bold;">
                  {{$relative-> name}} {{$relative-> father_name}} {{$relative-> mother_name}} 
                </td>
                <td style="font-size: 1.5em;font-weight: bold;">
                  {{$relative-> dni}}
                </td>
                <td style="font-size: 1.5em;font-weight: bold;">
                  @if ($relative->document == 'familiar-sin-documento.pdf')
                      <label>Sin documento de DNI</label>
                  @else
                      <a target="_blank" href="{{asset('images/relatives/'.$relative->document)}}" class="btn btn-outline-secondary btn-block btn-xs" type="button">
                        <i class="far fa-file-pdf"></i>&nbsp; Ver DNI
                      </a>
                  @endif
                </td>
                <td style="font-size: 1.5em;font-weight: bold;">
                  {{$relative-> relationship}}
                </td>
                <td style="font-size: 1.5em;font-weight: bold; background: #f2bdcf;">
                  {{ \Carbon\Carbon::parse($relative->birth_date)->age }}
                </td>
                <td style="font-size: 1.5em;font-weight: bold;">
                  {{$relative-> birth_date}}
                </td>
                <td>
                  <a class="btn btn-warning btn-xs" data-edit="{{$relative->id}}" data-employee="{{$employee->id}}" data-name="{{$relative->name}}" data-father="{{$relative-> father_name}}" data-mother="{{$relative-> mother_name}}" data-dni="{{$relative-> dni}}" data-relationship="{{$relative->relationship}}" data-birth="{{$relative->birth_date}}" data-document="{{$relative->document}}">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a class="btn btn-danger btn-xs" data-delete="{{$relative->id}}" data-name="{{$relative->name}}" data-father="{{$relative-> father_name}}" data-mother="{{$relative-> mother_name}}" data-dni="{{$relative-> dni}}" data-relationship="{{$relative->relationship}}" data-birth="{{$relative->birth_date}}">
                    <i class="fas fa-trash-alt"></i> 
                  </a>

                </td>
            </tr>
            @endforeach    
          </tbody>
      </table>  
  </div> 
  </div>
</div>


<!--store new relative-->
<div id="modalCreate" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Registrar Familiar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('employee.relative.store') }}" id="formCreate" method="POST">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4" hidden>
                <label>employee_id</label>
                <input  type="text" class="form-control" name="employee_id" id="employee_id">
              </div>
              <div class="col-sm-4">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
              <div class="col-sm-4">
                <label >Apellido paterno</label>
                <input type="text" class="form-control" name="father_name">
              </div>
              <div class="col-sm-4">
                <label>Apellido materno</label>
                <input type="text" class="form-control" name="mother_name">
              </div>
              <div class="col-sm-4">
                <label >DNI</label>
                <input type="number" class="form-control" name="dni">
              </div>
              <div class="col-sm-4">
                <label>Relación</label>
                <select name="relationship" class="form-control">
                  <option value="" selected>Seleccione...</option>
                  <option value="ESPOSO(A)">ESPOSO(A)</option>
                  <option value="HIJO(A)">HIJO(A)</option>
                  <option value="HIJASTRO(A)">HIJASTRO(A)</option>
                  <option value="SOBRINO(A)">SOBRINO(A)</option>
                </select>
              </div>
              <div class="col-sm-4">
                  <label>Fecha de nacimiento</label>
                  <div class="input-group">
                  <input type="date" class="form-control" name="birth_date" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                  </div>
                </div>

              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Documento de DNI(pdf)</label>
                  <input accept=".pdf" name="document" type="file" class="input-group-text btn-block">
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-success ">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!--update relative-->

<div id="modalEdit" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title" style="font-weight: bold;">Editar Familiar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('employee.relative.update') }}" id="formEdit" method="POST">
          @csrf
          <div class="card-body">
            <div  class="row">
              <div hidden class="col-sm-4">
                <label>relative_id</label>
                <input type="text" class="form-control" name="relative_id" id="relative_id">
              </div>
              <div hidden class="col-sm-4">
                <label>employee_id</label>
                <input type="text" class="form-control" name="employee_id" id="employee_id">
              </div>
              <div class="col-sm-4">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name" id="name" >
              </div>
              <div class="col-sm-4">
                <label >Apellido paterno</label>
                <input type="text" class="form-control" name="father_name" id="father" >
              </div>
              <div class="col-sm-4">
                <label>Apellido materno</label>
                <input type="text" class="form-control" name="mother_name" id="mother">
              </div>
              <div class="col-sm-4">
                <label >DNI</label>
                <input type="number" class="form-control" name="dni" id="dni">
              </div>
              <div class="col-sm-4">
                <label>Relación</label>
                <select name="relationship" class="form-control" id="relationship">
                  <option value="" >Seleccione...</option>
                  <option value="ESPOSO(A)">ESPOSO(A)</option>
                  <option value="HIJO(A)">HIJO(A)</option>
                  <option value="HIJASTRO(A)">HIJASTRO(A)</option>
                  <option value="SOBRINO(A)">SOBRINO(A)</option>
                </select>
              </div>
              <div class="col-sm-4">
                  <label>Fecha de nacimiento</label>
                  <div class="input-group">
                  <input type="date" class="form-control" name="birth_date" id="birth" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                  </div>
                </div>
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Documento de DNI(pdf)</label>
                  <input accept=".pdf" name="document" type="file" id="document" class="input-group-text btn-block">
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-warning " style="font-weight: bold;">Modificar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--delete relative-->

<div id="modalDelete" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Eliminar Familiar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('employee.relative.delete') }}" id="formDelete" method="POST">
          @csrf
          <div class="card-body">
            <div  class="row">
              <div hidden class="col-sm-4">
                <label>relative_id</label>
                <input  type="text" class="form-control" name="relative_id" id="relative_id">
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
                <label >DNI</label>
                <input readonly type="number" class="form-control" name="dni" id="dni">
              </div>
              <div class="col-sm-4">
                <label>Relación</label>
                <select disabled="true" name="relationship" class="form-control" id="relationship">
                  <option value="" selected>Seleccione...</option>
                  <option value="ESPOSO(A)">ESPOSO(A)</option>
                  <option value="HIJO(A)">HIJO(A)</option>
                  <option value="HIJASTRO(A)">HIJASTRO(A)</option>
                  <option value="SOBRINO(A)">SOBRINO(A)</option>
                </select>
              </div>
              <div class="col-sm-4">
                  <label>Fecha de nacimiento</label>
                  <div class="input-group">
                  <input readonly type="date" class="form-control" name="birth_date" id="birth" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                  </div>
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
    //Store a new relative
    $formCreate = $('#formCreate');
    $formCreate.on('submit', storeRelative);
    $modalCreate = $('#modalCreate');
    $("[data-create]" ).on('click', openModalCreate);

    //update relative
    $formEdit = $('#formEdit');
    $formEdit.on('submit', updateRelative);
    $modalEdit = $('#modalEdit');
    $("[data-edit]" ).on('click', openModalEdit);

    //delete relative
    $formDelete = $('#formDelete');
    $formDelete.on('submit', deleteRelative);
    $modalDelete = $('#modalDelete');
    $("[data-delete]" ).on('click', openModalDelete);

});

var $modalCreate;
var $formCreate;

var $modalEdit;
var $formEdit;

var $modalDelete;
var $formDelete;

//---------------------Modules Store Relatives-------------------------
function openModalCreate() {
  var employee_id = $(this).data('create');
  $modalCreate.find('[id=employee_id]').val(employee_id);
  $modalCreate.modal('show');
}

function storeRelative() {
  event.preventDefault();
  var createUrl = $formCreate.data('url');
  $.ajax({
      url: createUrl,
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
              'Nuevo familiar registrado con éxito.',
              'success'
              )
              setTimeout( function () {
                  location.reload();
              }, 1000 )
          }
      }
  });
}
//---------------------------------------------------------------------

//---------------------Modules Update Relatives-------------------------

function openModalEdit() {
    var relative_id = $(this).data('edit');
    var employee_id = $(this).data('employee');
    var name = $(this).data('name');
    var father = $(this).data('father');
    var mother = $(this).data('mother');
    var dni = $(this).data('dni');
    var relationship = $(this).data('relationship');
    var birth = $(this).data('birth');
    var document = $(this).data('document');

    $modalEdit.find('[id=relative_id]').val(relative_id);
    $modalEdit.find('[id=employee_id]').val(employee_id);
    $modalEdit.find('[id=name]').val(name);
    $modalEdit.find('[id=father]').val(father);
    $modalEdit.find('[id=mother]').val(mother);
    $modalEdit.find('[id=dni]').val(dni);
    $modalEdit.find('[id=relationship]').val(relationship);
    $modalEdit.find('[id=birth]').val(birth);
    $modalEdit.find('[id=document]').attr('src', document);

    $modalEdit.modal('show');
}
function updateRelative() {
    event.preventDefault();
    // Obtener la URL
    var editUrl = $formEdit.data('url');
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
              'El familiar ha sido modificado con éxito.',
              'success'
              )
              setTimeout( function () {
                  location.reload();
              }, 1000 )
          }
      },
    });
}

//---------------------------------------------------------------------

//---------------------Modules Delete Relatives-------------------------

function openModalDelete() {
    var relative_id = $(this).data('delete');
    var name = $(this).data('name');
    var father = $(this).data('father');
    var mother = $(this).data('mother');
    var dni = $(this).data('dni');
    var relationship = $(this).data('relationship');
    var birth = $(this).data('birth');

    $modalDelete.find('[id=relative_id]').val(relative_id);
    $modalDelete.find('[id=name]').val(name);
    $modalDelete.find('[id=father]').val(father);
    $modalDelete.find('[id=mother]').val(mother);
    $modalDelete.find('[id=dni]').val(dni);
    $modalDelete.find('[id=relationship]').val(relationship);
    $modalDelete.find('[id=birth]').val(birth);

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
              'El familiar ha sido eliminado con éxito.',
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