@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection
@section('title', 'Contratos')
<!--para traer plugins de adminite section('plugins.Sweetalert2',true) ya activamos el plugin no necesitamos invocalarlo-->

@section('content')



<div class="card card-success">
    <div class="card-header">
      <h2 class="card-title" style="font-weight: bold;"><i class="fas fa-address-book"></i> REGISTRAR CONTRATO - PERSONAL SIN CONTRATO VIGENTE</h2>
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
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
          @foreach ($contractStates as $contract)
            @if (!empty($contract->employee->dni) )
                <tr style="font-size: .7em; text-align:center">                            
                    <td style="font-size: 1.3em; font-weight: bold; ">
                      {{$contract->employee->id}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{$contract->employee->name}} {{$contract->employee->mother_name}} {{$contract->employee->father_name}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{$contract->employee->dni}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{$contract->employee->phone}}
                    </td>
                    <td>
                      <a class="btn btn-secondary btn-xs" type="button" data-create="{{$contract->employee->id}}" data-dni="{{$contract->employee->dni}}" data-name="{{$contract->employee->name}}" data-father="{{$contract->employee->father_name}}" data-mother="{{$contract->employee->mother_name}}">
                        <i class="fas fa-file-signature"></i> Generar contrato 
                      </a>
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
<br>
    

<!--soft employee-->

<div id="modalCreate" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Registrar Contrato</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('contract.store') }}" id="formCreate" method="POST">
          @csrf
          <div class="card-body">
            <div  class="row">
              <div hidden  class="col-sm-4">
                <label>employee_id</label>
                <input  type="text" class="form-control" name="employee_id" id="employe_id">
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
                <label>Inicio de contrato</label>
                <input type="date" class="form-control" name="start_contract">
              </div>
              <div class="col-sm-4">
                <label>Fin de contrato</label>
                <input type="date" class="form-control" name="end_contract">
              </div>
              <div class="col-sm-4">
                  <label>¿Agregar periodo de prueba?</label>
                  <select name="trial_period" class="form-control">
                    <option value="" selected> Seleccione... </option>
                    <option value="0">NO</option>
                    <option value="1">3 MESES DE PRUEBA</option>
                  </select>
              </div>
              <div class="col-sm-4">
                  <label>Tipo de contrato</label>
                  <select name="type" class="form-control" name="type">
                    <option value="" selected> Seleccione... </option>
                    <option value="COMPLETO">COMPLETO</option>
                    <option value="MEDIO TIEMPO">MEDIO TIEMPO</option>
                  </select>
              </div>
              <div class="col-sm-4">
                  <label>Cargo</label>
                  <select name="position_id" class="form-control">
                    <option value="" selected> Seleccione... </option>
                    @foreach($positions as $position)
                      <option value="{{$position->id}}">{{$position->name}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="col-sm-4">
                  <label>Área</label>
                  <select name="area_id" class="form-control">
                    <option value="" selected> Seleccione... </option>
                    @foreach($areas as $area)
                      <option value="{{$area->id}}">{{$area->name}}</option>
                    @endforeach
                  </select>
              </div>
              
              <div class="col-sm-4">
                  <label>Sueldo</label>
                  <input  type="number" class="form-control" name="base_salary">
              </div>
              
              <div class="col-sm-4">
                  <label>Seguro</label>
                  <select name="insurance_id" class="form-control">
                    <option value="" selected> Seleccione... </option>
                    @foreach($insurances as $insurance)
                      <option value="{{$insurance->id}}">{{$insurance->name}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="col-sm-4">
                  <label>Concepto Fijo</label>
                  <select name="concept_id" class="form-control">
                    <option value="" selected> Seleccione... </option>
                    @foreach($concepts as $concept)
                      <option value="{{$concept->id}}">{{$concept->name}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="col-sm-12">
                <label >Términos del contrato</label>
                <textarea name="terms" class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Subir contrato(pdf)</label>
                  <input accept=".pdf" name="document" type="file"  class="input-group-text btn-block">
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">

            <button type="submit" class="btn btn-secondary">Registrar</button>
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
        "emptyTable": "No hay personal sin contrato vigente",
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
    $formCreate = $('#formCreate');
    $formCreate.on('submit', createEmployee);
    $modalCreate = $('#modalCreate');
    $("[data-create]" ).on('click', openModalCreate);

});

var $modalCreate;
var $formCreate;


//---------------------Modules Delete Relatives-------------------------

function openModalCreate() {
    var employe_id = $(this).data('create');
    var name = $(this).data('name');
    var father = $(this).data('father');
    var mother = $(this).data('mother');

    $modalCreate.find('[id=employe_id]').val(employe_id);
    $modalCreate.find('[id=name]').val(name);
    $modalCreate.find('[id=father]').val(father);
    $modalCreate.find('[id=mother]').val(mother);

    $modalCreate.modal('show');
}
function createEmployee() {
    event.preventDefault();
    // Obtener la URL
    var editUrl = $formCreate.data('url');
    console.log("Entra accccaaa");
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
              'Se ha creado contrato con éxito.',
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