@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection

@section('title', 'Editar contrato')
@section('content')

<div class="card card-secondary">
<div class="card-header">
  <h3 class="card-title" style="font-weight: bold;">Editar el Contrato del Sr(a): {{$contract->employee->name}} {{$contract->employee->father_name}} {{$contract->employee->mother_name}} </h3>
  <a type="button" class="close" data-dismiss="modal" href="{{route('contract.current')}}" aria-label="Close">
    <span aria-hidden="true">×</span>
  </a>
</div>
<!-- /.card-header -->
<!-- form start -->
<form data-url="{{ route('contract.update') }}" id="formEdit" method="POST">
  @csrf
  <div class="card-body">
    <div  class="row">
      <div hidden class="col-sm-4">
        <label>contract_id</label>
        <input   type="text" class="form-control" name="contract_id" value="{{$contract->contract->id}}" >
      </div>
      <div hidden class="col-sm-4">
        <label>employee_id</label>
        <input  type="text" class="form-control" name="employee_id" value="{{$contract->employee->id}}" >
      </div>
      <div class="col-sm-4">
        <label>Nombre</label>
        <input readonly type="text" class="form-control"  value="{{$contract->employee->name}}">
      </div>
      <div class="col-sm-4">
        <label >Apellido paterno</label>
        <input readonly type="text" class="form-control" value="{{$contract->employee->father_name}}">
      </div>
      <div class="col-sm-4">
        <label>Apellido materno</label>
        <input readonly type="text" class="form-control" value="{{$contract->employee->mother_name}}">
      </div>
      <div class="col-sm-4">
        <label>Inicio de contrato</label>
        <input  type="date" class="form-control" value="{{$contract->start_contract}}" id="start" name="start_contract">
      </div>
      <div class="col-sm-4">
        <label>Periodo de prueba</label>
        @if($contract->trial_period == '2000-01-02')
          <select name="trial_period" class="form-control">
            <option value="0" selected> SIN PERIODO DE PRUEBA </option>
            <option value="1">3 MESES</option>
          </select>
        @else
          <input readonly type="date" class="form-control" value="{{$contract->trial_period}}" id="trial" name="trial_period">
        @endif
      </div>
      <div class="col-sm-4">
        <label>Fin de contrato</label>
        <input  type="date" class="form-control" value="{{$contract->end_contract}}" id="end" name="end_contract">
      </div>
      <div class="col-sm-4">
          <label>Tipo de contrato</label>
          <select name="type" class="form-control">
            <option value="{{$contract->contract->type}}" selected> {{$contract->contract->type}}</option>
            <option value="COMPLETO">COMPLETO</option>
            <option value="MEDIO TIEMPO">MEDIO TIEMPO</option>
          </select>
      </div>
      <div class="col-sm-4">
          <label>Cargo</label>
          <select name="position_id" class="form-control">
            <option value="{{$contract->contract->position->id}}" selected>{{$contract->contract->position->name}} </option>
            @foreach($positions as $position)
              <option value="{{$position->id}}">{{$position->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="col-sm-4">
          <label>Área</label>
          <select name="area_id" class="form-control">
            <option value="{{$contract->contract->area->id}}" selected> {{$contract->contract->area->name}} </option>
            @foreach($areas as $area)
              <option value="{{$area->id}}">{{$area->name}}</option>
            @endforeach
          </select>
      </div>
      
      <div class="col-sm-4">
          <label>Sueldo</label>
          <input   type="number" class="form-control" value="{{$contract->contract->base_salary}}" id="base" name="base_salary">
      </div>
      
      <div class="col-sm-4">
          <label>Seguro</label>
          <select name="insurance_id" class="form-control">
            <option value="{{$contract->contract->insurance->id}}" selected> {{$contract->contract->insurance->name}} </option>
            @foreach($insurances as $insurance)
              <option value="{{$insurance->id}}">{{$insurance->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="col-sm-4">
          <label>Concepto Fijo</label>
          <select name="concept_id" class="form-control">
            <option value="{{$contract->contract->concept->id}}" selected> {{$contract->contract->concept->name}} </option>
            @foreach($concepts as $concept)
              <option value="{{$concept->id}}">{{$concept->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="col-sm-12">
        <label >Términos del contrato</label>
        <textarea  name="terms" id="terms"  class="form-control" rows="2" placeholder="Enter ...">{{$contract->contract->terms}}</textarea>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          @if ($contract->contract->document == 'sin-contrato.pdf')
            <label>No se subió el documento del contrato al sistema.(pdf)</label>
            <input accept=".pdf" name="document" type="file"  class="input-group-text btn-block">
	        @else
            <label>Actualizar el documento del contrato (pdf)</label>
      		  <a target="_blank" href="{{asset('images/contracts/'.$contract->contract->document)}}" class="btn btn-outline-secondary btn-block" type="button">
      			   <i class="far fa-file-pdf"></i>&nbsp; Ver Contrato
      		  </a>
            <input accept=".pdf" name="document" type="file" class="input-group-text btn-block" src="{{$contract->contract->document}}">
	        @endif
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-secondary">Modificar</button>
      <a type="button" class="btn btn-default float-right" href="{{route('contract.current')}}">&nbsp;<i class="fas fa-undo"></i> Atras &nbsp;</a>
    </div>
  </div>
</form>
</div>

@stop

@section('js')

<script>
  
$(document).ready(function() {
    //Modulo para editar Contrato
    $formEdit = $('#formEdit');
    $formEdit.on('submit', editData);
});

var $formEdit;

function editData() {
  event.preventDefault();
  var createUrl = $formEdit.data('url');
  $.ajax({
      url: createUrl,
      method: 'POST',
      data: new FormData(this),
      processData:false,
      contentType:false,
      success: function (data) {
          console.log(data);
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
              'El contrato ha sido modificado con éxito.',
              'success'
              )
              setTimeout( function () {
                  url = "{{route('contract.show', $contract->id)}}";
                  $(location).attr('href',url);
              }, 1500 )
          }
      }
  });
}

</script>

@endsection