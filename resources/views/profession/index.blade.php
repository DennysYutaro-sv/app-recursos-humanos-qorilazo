@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection

@section('title', 'Profesiones - Mantenedor')
@section('content')
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title" style="font-weight: bold;"><i class="fas fa-user-tie"></i> Lista de profesiones</h3>
    <a class="btn btn-success btn-xs float-right" data-create={{1}} type="button">
      <i class="fas fa-plus-square"></i> Registar nueva profesión
    </a>
  </div>
  <div class="card-body">
  	<form>
  	<div class="row">
	  	<div class="col-sm-12">
		  <div class="card-body table-striped table-in-card">
		      <table class="table table-bordered" id="tableNormative">
		          <thead class="thead-dark" >
		              <tr style="font-size: .8em; text-align:center;">                            
		                  <th scope="col">#</th>
		                  <th scope="col">Profesión</th> 
		                  <th scope="col">Descripción</th>
		                  <th scope="col">Acción</th>
		              </tr>
		          </thead>

		          <tbody>
		            
		            @foreach ($professions as $profession)
		            <tr style="font-size: .7em; text-align:center">                            
		                <td class="dtr-control sorting_1" style="font-size: 1.5em; font-weight: bold; ">
		                  {{$nro=$nro+1}}
		                </td>
		                
		                <td style="font-size: 1.5em;font-weight: bold;">
		                  {{ $profession->profession_name}}
		                </td>
		                <td style="font-size: 1.5em;font-weight: bold;">
		                  {{ $profession->description}}
		                </td>
		                <td style="font-size: 1.5em;font-weight: bold;">
		                  <a class="btn btn-warning btn-xs" data-edit="{{$profession->id}}" data-name="{{$profession->profession_name}}" data-description="{{$profession->description}}">
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
          <h3 class="card-title">Registrar Profesión</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('profession.store') }}" id="formCreate" method="POST">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4" hidden>
                <label>id</label>
                <input  type="text" class="form-control" name="id">
              </div>
              <div class="col-sm-12">
                <label>Nombre de profesión</label>
                <input type="text" class="form-control" name="profession_name">
              </div>
              <div class="col-sm-12">
					<div class="form-group">
						<label>Descripción</label>
						<textarea class="form-control" rows="2" name="description"></textarea>
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
          <h3 class="card-title">Editar Profesión</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="{{ route('profession.update') }}" id="formEdit" method="POST">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4" hidden>
                <label>id</label>
                <input  type="text" class="form-control" name="id" id="id">
              </div>
              <div class="col-sm-12">
                <label>Nombre de profesión</label>
                <input type="text" class="form-control" name="profession_name" id="profession">
              </div>
              <div class="col-sm-12">
          <div class="form-group">
            <label>Descripción</label>
            <textarea class="form-control" rows="2" name="description" id="description"></textarea>
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
	//Store a new profession
    $formCreate = $('#formCreate');
    $formCreate.on('submit', storeProfession);
    $modalCreate = $('#modalCreate');
    $("[data-create]" ).on('click', openModalProfession);

    //update relative
    $formEdit = $('#formEdit');
    $formEdit.on('submit', updateProfession);
    $modalEdit = $('#modalEdit');
    $("[data-edit]" ).on('click', openModalEdit);
});

var $modalCreate;
var $formCreate;

var $modalEdit;
var $formEdit;

//---------------------Modules Store professions-------------------------
function openModalProfession() {
  $modalCreate.modal('show');
}

function storeProfession() {
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
              'Nuevo profesión registrada con éxito.',
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
    var profession = $(this).data('name');
    var description = $(this).data('description');

    $modalEdit.find('[id=id]').val(id);
    $modalEdit.find('[id=profession]').val(profession);
    $modalEdit.find('[id=description]').val(description);

    $modalEdit.modal('show');
}
function updateProfession() {
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
              'La profesión ha sido modificado con éxito.',
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