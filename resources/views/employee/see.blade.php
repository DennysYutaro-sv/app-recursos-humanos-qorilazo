@extends('adminlte::page')
@section('plugins.Datatables',true)
@section('plugins.Ekko-lightbox',true)
@section('css')

@endsection
@section('title', 'Lista de personal')
<!--para traer plugins de adminite section('plugins.Sweetalert2',true) ya activamos el plugin no necesitamos invocalarlo-->

@section('content')
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title" style="font-weight: bold;"><i class="fas fa-file-alt"></i> Datos del personal</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
      <div class="card-body">
          <div class="row">
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre</label>
                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->name}}">
                </div>
                <div class="form-group">
                  <label>Apellido materno</label>
                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->mother_name}}">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Apellido paterno</label>
                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->father_name}}">
                </div>
                <div class="form-group">
                  <label>DNI</label>
                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->dni}}">
                </div>
              </div>

              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  @if(($employee->photo) == 'employee.png')
                  	<img src="{{ asset('employee.png') }}" style="width: 140px; height: 160px;" class="img-thumbnail rounded  mx-auto d-block">
	                @else
	                  <img src="{{asset('images/employees/'.$employee->photo)}}" style="width: 140px; height: 160px;" class="img-thumbnail rounded  mx-auto d-block">
	                @endif
                </div>
              </div>
              
              <div class="col-12 col-sm-12">
            <div class="card card-info card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Datos personales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Contratos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Carga Familiar</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                     <div class="row">
			              <div class="col-sm-9">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Correo electrónico</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->email}}">
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Telefono/Celular</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->phone}}">
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Agencia donde labora</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->agency->agency_name}}">
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Fecha de nacimiento</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->birth_date}}">
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Edad</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{ $edad }}">
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Género</label>
			                  @if ($employee->gender == 0)
			                  	<input style="background-color: #fff;" type="text" class="form-control" readonly value="FEMENINO">
			                  @else
			                  	<input style="background-color: #fff;" type="text" class="form-control" readonly value="MASCULINO">
					          @endif
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Profesión</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->profession->profession_name}}">
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Licencia de conducir</label>
			                  @if ($employee->license == 0)
			                  	<input style="background-color: #fff;" type="text" class="form-control" readonly value="NO">
			                  @else
			                  	<input style="background-color: #fff;" type="text" class="form-control" readonly value="SI">
					          @endif
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Curriculum vitae</label>
			                  @if ($employee->curriculum == 'personal-sin-cv.pdf')
					                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="No se subió su curriculum al sistema.">
									      @else
									      		<a target="_blank" href="{{asset('images/curriculums/'.$employee->curriculum)}}" class="btn btn-outline-secondary btn-block" type="button">
									      			<i class="far fa-file-pdf"></i>&nbsp; Ver CV
                  					</a>
									      @endif
							    </a>
			                </div>
			              </div>
			              <div class="col-sm-3">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Antecedentes penales</label>
			                  @if ($employee->criminal_record == 'personal-sin-certificado-de-antecedentes-penales.pdf')
					                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="No se subió sus antecedentes al sistema.">
									      @else
									      		<a target="_blank" href="{{asset('images/criminal-record/'.$employee->criminal_record)}}" class="btn btn-outline-secondary btn-block" type="button">
									      			<i class="far fa-file-pdf"></i>&nbsp; Ver Antecedentes
									      		</a>
									      @endif
							    
			                </div>
			              </div>
			              <div class="col-sm-8">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Dirección de residencia</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->address}}">
			                </div>
			              </div>
			              <div class="col-sm-4">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Referencia</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->reference}}">
			                </div>
			              </div>
			              <div class="col-sm-4">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Departamento</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->department->name_departamento}}">
			                </div>
			              </div>
			              <div class="col-sm-4">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Provincia</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->province->name_provincia}}">
			                </div>
			              </div>
			              <div class="col-sm-4">
			                <!-- text input -->
			                <div class="form-group">
			                  <label>Distrito</label>
			                  <input style="background-color: #fff;" type="text" class="form-control" readonly value="{{$employee->district->name_distrito}}">
			                </div>
			              </div>

		              </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                     <div class="row">
		              <div class="col-sm-12">
		                <!-- text input -->
		                <div class="form-group">
			              
			              <div class="col-sm-3">
		                  	</div>
		                  	<label>Lista de contratos:</label>
							  <div class="col-sm-12">
							  <div class="card-body table-striped table-in-card">
							      <table class="table table-bordered" id="tableNormative">
							          <thead class="thead-dark" >
							              <tr style="font-size: .8em; text-align:center;">                            
							                  <th scope="col">#</th>
							                  <th scope="col">Nombres y Apellidos</th> 
							                  <th scope="col">Inicio</th>
							                  <th scope="col">Fin</th>
							                  <th scope="col">Salario</th>               
							                  <th scope="col">Observacion</th>
							              </tr>
							          </thead>

							          <tbody>
							            
							            @foreach ($contracts as $contract)
							            <tr style="font-size: .7em; text-align:center">                            
							                <td class="dtr-control sorting_1" style="font-size: 1.2em; font-weight: bold; ">
							                  {{$nro1=$nro1+1}}
							                </td>
							                
							                <td style="font-size: 1.2em;font-weight: bold;">
							                  {{$contract->employee-> name}} {{$contract->employee-> father_name}} {{$contract->employee-> mother_name}} 
							                </td>
							                <td style="font-size: 1.2em;font-weight: bold;">
							                	<input style="font-weight: bold;
                    text-align: right;background-color: #59a9ff;outline: none;border: 0;border-radius: 3px;padding: 0 3px;color: #fff;" type="date" readonly value="{{$contract-> start_contract}}">
							                  
							                </td>
							                <td style="font-size: 1.2em;font-weight: bold;">
							                	<input style="font-weight: bold;
                    text-align: right;background-color: #e87c86;outline: none;border: 0;border-radius: 3px;padding: 0 3px;color: #fff;" type="date" readonly value="{{$contract-> end_contract}}">
							                  
							                </td>
							                <td style="font-size: 1.2em;font-weight: bold; background: #f2bdcf;">
							                  {{ $contract-> base_salary }}
							                </td>
							                <td style="font-size: 1.2em;font-weight: bold;">
							                  {{$contract-> observation}}
							                </td>
							            </tr>
							            @endforeach    
							          </tbody>
							      </table>  
							  </div> 
							  </div>
		                </div>
		              </div>
		             </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                     <div class="row">
		              <div class="col-sm-12">
		                <!-- text input -->
		                <div class="form-group">
		                  @if ($employee->family_burden == 0)
		                  	<label>No tiene carga familiar...</label>
		                  @else
		                  <h5 style="font-size: 2em; text-align: center; font-weight: bold;">Este personal tiene carga familiar</h5>
			              
			              <div class="col-sm-3">
		                  	</div>
		                  	<label>Lista de familiares:</label>
							  <div class="col-sm-12">
							  <div class="card-body table-striped table-in-card">
							      <table class="table table-bordered" id="tableNormative">
							          <thead class="thead-dark" >
							              <tr style="font-size: .8em; text-align:center;">                            
							                  <th scope="col">#</th>
							                  <th scope="col">Nombres y Apellidos</th> 
							                  <th scope="col">DNI</th>
							                  <th scope="col">Parentesco</th>
							                  <th scope="col">Edad</th>               
							                  <th scope="col"> Fecha de nacimiento</th>
							              </tr>
							          </thead>

							          <tbody>
							            
							            @foreach ($relatives as $relative)
							            <tr style="font-size: .7em; text-align:center">                            
							                <td class="dtr-control sorting_1" style="font-size: 1.2em; font-weight: bold; ">
							                  {{$nro=$nro+1}}
							                </td>
							                
							                <td style="font-size: 1.2em;font-weight: bold;">
							                  {{$relative-> name}} {{$relative-> father_name}} {{$relative-> mother_name}} 
							                </td>
							                <td style="font-size: 1.2em;font-weight: bold;">
							                  {{$relative-> dni}}
							                </td>
							                <td style="font-size: 1.2em;font-weight: bold;">
							                  {{$relative-> relationship}}
							                </td>
							                <td style="font-size: 1.2em;font-weight: bold; background: #f2bdcf;">
							                  {{ \Carbon\Carbon::parse($relative->birth_date)->age }}
							                </td>
							                <td style="font-size: 1.2em;font-weight: bold;">
							                  {{$relative-> birth_date}}
							                </td>
							            </tr>
							            @endforeach    
							          </tbody>
							      </table>  
							  </div> 
							  </div>
							<a href="{{route('employee.relative.index', $employee->id)}}" class="btn btn-success btn-xs float-right">
	                          Agregar familiar <i class="fas fa-user-plus"></i>
	                        </a>

				          @endif
		                </div>
		              </div>
		             </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
      </div>
      <!-- /.card-body -->
      <div class="col-sm-2">
        <!-- text input -->
        <div class="form-group">
        	<label> &nbsp;</label>
          <a class="btn btn-info btn-block" href="{{route('employee.show')}}" type="button">
		        <i class="fas fa-undo"></i> Atras
		    </a>
        </div>
      </div>
      <div class="card-footer">
        <label>Area de TIC - dennys.sullcahuaman.valdez@gmail.com</label>
      </div>
  </div>
</div>

<!--Modal para mostrar cv de empleado-->
<div class="modal fade" id="modalCv" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content bg-info">
      <div class="modal-header">
        <h4 class="modal-title">Info Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="450px" src="{{asset('images/curriculums/'.$employee->curriculum)}}" frameborder="0"></iframe>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-light">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!--Modal para mostrar criminal record de empleado-->
<div class="modal fade" id="modalRecord" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content bg-info">
      <div class="modal-header">
        <h4 class="modal-title">Info Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="450px" src="{{asset('images/curriculums/'.$employee->criminal_record)}}" frameborder="0"></iframe>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-light">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@stop

@section('js')

<script>
$(document).ready(function() {
	//Show cv employee
  $modalCv = $('#modalCv');
  $("[data-cv]" ).on('click', openModalRecord);

  //Show record employee
  $modalRecord = $('#modalRecord');
  $("[data-record]" ).on('click', openModalRecord);

});
var $modalCv;
var $modalRecord;

function openModalCv() {
  $modalCv.modal('show');
}

function openModalRecord() {
  $modalRecord.modal('show');
}

</script>


@endsection