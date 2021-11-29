@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection

@section('title', 'Detalles de contrato')
@section('content')

<div class="card card-info">
        <div class="card-header">
          <h3 class="card-title" style="font-weight: bold;">Detalles del Contrato del Sr(a): {{$contract->employee->name}} {{$contract->employee->father_name}} {{$contract->employee->mother_name}} </h3>
          <a type="button" class="close" data-dismiss="modal" href="{{route('contract.current')}}" aria-label="Close">
            <span aria-hidden="true">×</span>
          </a>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form data-url="#" id="formShow" method="POST">
          <div class="card-body">
            <div  class="row">
              <div hidden class="col-sm-4">
                <label>employee_id</label>
                <input  type="text" class="form-control" name="employee_id" value="{{$contract->employee->id}}" id="employe_id">
              </div>
              <div class="col-sm-4">
                <label>Nombre</label>
                <input readonly type="text" class="form-control" id="name" value="{{$contract->employee->name}}">
              </div>
              <div class="col-sm-4">
                <label >Apellido paterno</label>
                <input readonly type="text" class="form-control" value="{{$contract->employee->father_name}}" id="father">
              </div>
              <div class="col-sm-4">
                <label>Apellido materno</label>
                <input readonly type="text" class="form-control" value="{{$contract->employee->mother_name}}" id="mother">
              </div>
              <div class="col-sm-4">
                <label>Inicio de contrato</label>
                <input readonly type="date" class="form-control" value="{{$contract->start_contract}}" id="start" name="">
              </div>
              <div class="col-sm-4">
                <label>Periodo de prueba</label>
                @if($contract->trial_period == '2000-01-02')
                  <input readonly type="text" class="form-control" value="Sin periodo de Prueba" id="trial" name="">
                @else
                  <input readonly type="date" class="form-control" value="{{$contract->trial_period}}" id="trial" name="">
                @endif
              </div>
              <div class="col-sm-4">
                <label>Fin de contrato</label>
                <input readonly type="date" class="form-control" value="{{$contract->end_contract}}" id="end" name="">
              </div>
              <div class="col-sm-4">
                  <label>Tipo de contrato</label>
                  <input readonly type="text" class="form-control" value="{{$contract->contract->type}}" id="type" name="">
              </div>
              <div class="col-sm-4">
                  <label>Cargo</label>
                  <input readonly type="text" class="form-control" value="{{$contract->contract->position->name}}" id="position" name="">
              </div>
              <div class="col-sm-4">
                  <label>Área</label>
                  <input readonly type="text" class="form-control" value="{{$contract->contract->area->name}}" id="area" name="">
              </div>
              
              <div class="col-sm-4">
                  <label>Sueldo</label>
                  <input readonly  type="number" class="form-control" value="{{$contract->contract->base_salary}}" id="base" name="base_salary">
              </div>
              
              <div class="col-sm-4">
                  <label>Seguro</label>
                  <input readonly type="text" class="form-control" value="{{$contract->contract->insurance->name}}" id="insurance" name="">
              </div>
              <div class="col-sm-4">
                  <label>Concepto Fijo</label>
                  <input readonly type="text" class="form-control" value="{{$contract->contract->concept->name}}" id="concept" name="">
              </div>
              <div class="col-sm-12">
                <label >Términos del contrato</label>
                <textarea readonly name="terms" id="terms"  class="form-control" rows="2" placeholder="Enter ...">{{$contract->contract->terms}}</textarea>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Documento del contrato</label>
                  @if ($contract->contract->document == 'sin-contrato.pdf')
                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="No se subió el documento del contrato al sistema.">
			      @else
		      		<a target="_blank" href="{{asset('images/contracts/'.$contract->contract->document)}}" class="btn btn-outline-secondary btn-block" type="button">
		      			<i class="far fa-file-pdf"></i>&nbsp; Ver Contrato
		      		</a>
			      @endif
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-group">
                <label> &nbsp;</label>
                <a type="button" class="btn btn-info btn-block" href="{{route('contract.current')}}"> <i class="fas fa-undo"></i> Atras</a>
              </div>
            </div>
          </div>
        </form>
      </div>

@stop

@section('js')


@endsection