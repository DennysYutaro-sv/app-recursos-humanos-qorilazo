@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection

@section('title', 'Agencias - Mantenedor')
@section('content')
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title" style="font-weight: bold;"><i class="fas fa-university"></i> Lista de locales de la Coopac</h3>
    <a class="btn btn-success btn-xs float-right" data-create={{1}} type="button">
      <i class="fas fa-plus-square"></i> Registar nuevo local
    </a>
  </div>
  <div class="card-body">
  	<form>
  	<div class="row">
	  	<div class="col-sm-12">
		  <div class="card-body table-striped table-in-card"> 
		      <table class="table display table-striped table-bordered" id="tableNormative">
		          <thead class="thead-dark" >
		              <tr style="font-size: .85em;">                            
		                  <th scope="col">#</th>
		                  <th scope="col">LOCAL</th> 
		                  <th scope="col">DIRECCIÓN</th>
		                  <th scope="col">DEPARTAMENTO</th>
                      <th scope="col">PROVINCIA</th>
                      <th scope="col">DISTRITO</th>
                      <th scope="col">ACCIONES</th>
		              </tr>
		          </thead>

		          <tbody>
		            
		            @foreach ($agencies as $agency)
		            <tr style="font-size: .7em; ">                            
		                <td class="dtr-control sorting_1" style="font-size: 1.3em; font-weight: bold; text-align:center ">
		                  {{$nro=$nro+1}}
		                </td>
		                
		                <td style="font-size: 1.3em;font-weight: bold;">
		                  {{ $agency->agency_name}}
		                </td>
		                <td style="font-size: 1.3em;font-weight: bold;">
		                  {{ $agency->agency_address}}
		                </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{ $agency->departamento->name_departamento}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{ $agency->provincia->name_provincia}}
                    </td>
                    <td style="font-size: 1.3em;font-weight: bold;">
                      {{ $agency->distrito->name_distrito}}
                    </td>
		                <td style="font-size: 1.3em;font-weight: bold; text-align:center">
		                  <a class="btn btn-warning btn-xs" data-edit="{{$agency->id}}" data-name="{{$agency->agency_name}}" data-address="{{$agency->agency_address}}">
		                    <i class="fas fa-edit"></i>
		                  </a>
		                </td>
		            </tr>
		            @endforeach    
		          </tbody>
		      </table>  
		  </div> 
		  </div>
	</div>
	</form>
  </div>
</div>


<!--store new profession-->
<div id="modalCreate" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Registrar nuevo local</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('agency.store') }}" id="formCreate" method="POST">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <label>Nombre del local</label>
                <input type="text" class="form-control" name="agency_name">
              </div>
              <div class="col-sm-12">
					<div class="form-group">
						<label>Dirección</label>
						<input type="text" class="form-control" name="agency_address">
					</div>
				</div>
        <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Departamento</label>
                  <select class="form-control" id="department" name="departamento_id">
                    <option value=""> Seleccione </option>
                      @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name_departamento }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
        <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Provincia</label>
                  <select class="form-control" id="province" name="provincia_id">
                          <option value=""> Seleccione </option>
                      </select>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Distrito</label>
                  <select class="form-control" id="district" name="distrito_id">
                          <option value=""> Seleccione </option>
                      </select>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-success ">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!--edit profession-->
<div id="modalEdit" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Editar Área</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('agency.update') }}" id="formEdit" method="POST">
          @csrf
          <div class="card-body">
            <div class="row">
              <input hidden type="text" name="id" value="" id="id">
              <div class="col-sm-12">
                <label>Nombre del local</label>
                <input type="text" class="form-control" name="agency_name" id="agency_name">
              </div>
              <div class="col-sm-12">
          <div class="form-group">
            <label>Dirección</label>
            <input id="address" type="text" class="form-control" name="agency_address">
          </div>
        </div>
        <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Departamento</label>
                  <select class="form-control" id="department1" name="departamento_id">
                    <option value=""> Seleccione </option>
                      @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name_departamento }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
        <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Provincia</label>
                  <select class="form-control" id="province1" name="provincia_id">
                          <option value=""> Seleccione </option>
                      </select>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Distrito</label>
                  <select class="form-control" id="district1" name="distrito_id">
                          <option value=""> Seleccione </option>
                      </select>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-warning ">Modificar</button>
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
      "lengthMenu": "",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar:",
      "searchPlaceholder":    "Dato para buscar",
      "zeroRecords": "No se han encontrado coincidencias.",
      "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
      }
  },
  "iDisplayLength": 50,

  });

  //Module department - province -district
    $('#department').on('change',function(){
        var department_id = $(this).val();
        //console.log(departamento_id)
        if(($.trim('department_id') != '') && (department_id != "")){
            $.get('provinces',{department_id:department_id},function(provinces){
                $('#province').empty();
                $('#province').append("<option value=''>Seleccionar</option>");
                $('#district').empty();
                $('#district').append("<option value=''>Seleccionar</option>");
                $.each(provinces,function(index, value){
                    $('#province').append("<option value='"+ index +"'>"+ value +"</option>");
                });
            });
        }
        else{
            $('#province').empty();
            $('#province').append("<option value=''>Seleccionar</option>");
            $('#district').empty();
            $('#district').append("<option value=''>Seleccionar</option>");
        }
    });

    $('#province').on('change',function(){
        var province_id = $(this).val();
        if($.trim(('province_id') != '') && (province_id != "")){
            $.get('districts',{province_id:province_id},function(districts){
                $('#district').empty();
                $('#district').append("<option value=''>Seleccionar</option>");
                $.each(districts,function(index, value){
                    $('#district').append("<option value='"+ index +"'>"+ value +"</option>");
                });
            });
        }
        else{
            $('#district').empty();
            $('#district').append("<option value=''>Seleccionar</option>");
        }
    });


    //Module department - province -district
    $('#department1').on('change',function(){
        var department_id = $(this).val();
        //console.log(departamento_id)
        if(($.trim('department_id') != '') && (department_id != "")){
            $.get('provinces',{department_id:department_id},function(provinces){
                $('#province1').empty();
                $('#province1').append("<option value=''>Seleccionar</option>");
                $('#district1').empty();
                $('#district1').append("<option value=''>Seleccionar</option>");
                $.each(provinces,function(index, value){
                    $('#province1').append("<option value='"+ index +"'>"+ value +"</option>");
                });
            });
        }
        else{
            $('#province1').empty();
            $('#province1').append("<option value=''>Seleccionar</option>");
            $('#district1').empty();
            $('#district1').append("<option value=''>Seleccionar</option>");
        }
    });

    $('#province1').on('change',function(){
        var province_id = $(this).val();
        if($.trim(('province_id') != '') && (province_id != "")){
            $.get('districts',{province_id:province_id},function(districts){
                $('#district1').empty();
                $('#district1').append("<option value=''>Seleccionar</option>");
                $.each(districts,function(index, value){
                    $('#district1').append("<option value='"+ index +"'>"+ value +"</option>");
                });
            });
        }
        else{
            $('#district1').empty();
            $('#district1').append("<option value=''>Seleccionar</option>");
        }
    });

	
	//Store a new profession
    $formCreate = $('#formCreate');
    $formCreate.on('submit', storeAgency);
    $modalCreate = $('#modalCreate');
    $("[data-create]" ).on('click', openModalAgency);

    //update relative
    $formEdit = $('#formEdit');
    $formEdit.on('submit', updateAgency);
    $modalEdit = $('#modalEdit');
    $("[data-edit]" ).on('click', openModalEdit);
});

var $modalCreate;
var $formCreate;

var $modalEdit;
var $formEdit;

//---------------------Modules Store professions-------------------------
function openModalAgency() {
  $modalCreate.modal('show');
}

function storeAgency() {
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
              'Nuevo local registrado con éxito.',
              'success'
              )
              setTimeout( function () {
                  location.reload();
              }, 1000 )
          }
      }
  });
}


//---------------------Modules Update Relatives-------------------------

function openModalEdit() {
    var id = $(this).data('edit');
    var agency = $(this).data('name');
    var address = $(this).data('address');


    $modalEdit.find('[id=id]').val(id);
    $modalEdit.find('[id=agency_name]').val(agency);
    $modalEdit.find('[id=address]').val(address);

    $modalEdit.modal('show');
}
function updateAgency() {
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
              'El local ha sido modificado con éxito.',
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

</script>
@endsection