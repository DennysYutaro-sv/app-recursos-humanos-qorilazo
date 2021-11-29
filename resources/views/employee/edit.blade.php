@extends('adminlte::page')
@section('css')
@endsection
@section('plugins.Ekko-lightbox',true)
@section('title', 'Empleado')

@section('content')
<div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title" style="font-weight: bold;"><i class="fas fa-file-alt"></i> Modificar personal </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form data-url="{{ route('employee.update',$employee->id) }}" id="formEdit" method="POST">
      @csrf
      <div class="card-body">
          <div class="row">
            <input hidden type="text" value="{{$employee->id}}" name="employee_id">
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre</label>
                  <input id="n" type="text" name="name" class="form-control" value="{{$employee->name}}" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Apellido Paterno</label>
                  <input type="text" name="father_name" class="form-control" id="f" value="{{$employee->father_name}}" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Apellido Materno</label>
                  <input type="text" name="mother_name" class="form-control" id="m" value="{{$employee->mother_name}}" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>DNI</label>
                  <input type="number" name="dni" class="form-control" value="{{$employee->dni}}" placeholder="">
                </div>
              </div>
              <div class="col-sm-4">
                  <label>Género</label>
                  <select name="gender" class="form-control">
                    @if($employee->gender == 0)
                      <option value="{{$employee->gender}}" selected>FEMENINO</option>
                      <option value="1">MASCULINO</option>
                    @else
                      <option value="{{$employee->gender}}" selected>MASCULINO</option>
                      <option value="0">FEMENINO</option>
                    @endif
                  </select>
              </div>

              <div class="col-sm-4">
                  <label>Fecha de nacimiento</label>
                  <div class="input-group">
                  <input type="date" value="{{$employee->birth_date}}"  class="form-control" name="birth_date" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                  </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Profesión</label>
                  <select class="form-control" id="" name="profession_id">
                    <option value="{{$employee->profession_id}}"> {{$employee->profession->profession_name}} </option>
                      @foreach($professions as $profession)
                        <option value="{{ $profession->id }}">{{ $profession->profession_name }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="" value="{{$employee->email}}">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Telefono/Celular</label>
                  <input type="text" name="phone" class="form-control" placeholder="" value="{{$employee->phone}}">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Carga Familiar</label>
                  <select name="family_burden" class="form-control">
                    @if($employee->family_burden == 0)
                      <option value="{{$employee->family_burden}}" selected> NO </option>
                      <option value="1">SI</option>
                    @else
                      <option value="{{$employee->family_burden}}" selected> SI </option>
                      <option value="0" >NO</option>
                    @endif
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Licencia de conducir</label>
                  <select name="license" class="form-control">
                    @if($employee->license == 0)
                      <option value="{{$employee->license}}" selected> NO </option>
                      <option value="1">SI</option>
                    @else
                      <option value="{{$employee->license}}" selected> SI </option>
                      <option value="0">NO</option>
                    @endif
                  </select>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <label>Agencia donde permanecera</label>
                  <select class="form-control" id="agency" name="agency_id">
                    <option value="{{$employee->agency_id}}"> {{$employee->agency->agency_name}} </option>
                      @foreach($agencies as $agency)
                        <option value="{{ $agency->id }}">{{ $agency->agency_name }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                  <label>Dirección de residencia</label>
                  <input name="address" type="text" class="form-control" placeholder="" value="{{$employee->address}}">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Referencia/Observaciones</label>
                  <input name="reference" type="text" class="form-control" placeholder="" value="{{$employee->reference}}">
                </div>
              </div>
              <div hidden class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Departamento</label>
                  <input type="text" readonly name="department_id" value="{{$employee->department_id}}">
                </div>
              </div>
              <div hidden class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Provincia</label>
                  <input type="text" readonly name="province_id" value="{{$employee->province_id}}">
                </div>
              </div>
              <div hidden class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Distrito</label>
                  <input type="text" readonly name="district_id" value="{{$employee->district_id}}">
                </div>
              </div>
              
              <div class="col-sm-12">
                <hr>
              </div>
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  @if($employee->curriculum == 'personal-sin-cv.pdf')
                    <label>No tiene CV (.pdf)</label>
                    <input accept=".pdf" name="curriculum" type="file" id="cv" class="input-group-text btn-block"  name="curriculum">
                  @else
                    <label>Actualizar CV (.pdf)</label>
                    <a target="_blank" href="{{asset('images/curriculums/'.$employee->curriculum)}}" class="btn btn-outline-secondary btn-block" type="button">
                      <i class="far fa-file-pdf"></i>&nbsp; Ver CV
                    </a>
                    <input accept=".pdf" name="curriculum" type="file" id="cv" class="input-group-text btn-block" src="{{$employee->curriculum}}">
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  
                  @if($employee->criminal_record == 'personal-sin-certificado-de-antecedentes-penales.pdf')
                    <label>No se subio sus antecedentes(pdf)</label>
                    <input accept=".pdf,.docx" name="criminal_record" type="file" id="ap" class="input-group-text btn-block"  name="criminal_record">
                  @else
                    <label>Actualizar sus antecedentes (pdf)</label>
                    <a target="_blank" href="{{asset('images/criminal-record/'.$employee->criminal_record)}}" class="btn btn-outline-secondary btn-block" type="button">
                      <i class="far fa-file-pdf"></i>&nbsp; Ver Antecedentes
                    </a>
                    <input accept=".pdf" name="criminal_record" type="file" class="input-group-text btn-block" src="{{$employee->criminal_record}}">
                  @endif
                </div>
              </div>
              <div class="col-sm-3">
              </div>
              <div class="col-sm-6">
                <div class="form-group ">
                  <label>Fotografía del personal(jpg,png,jpeg.) </label>
                    @if($employee->photo == "employee.png")
                      <input accept="image/*" name="photo" type="file" id="imgInp" class="input-group-text btn-block imgNew" >
                      <button id="btnDelete" type="button" class="btn float-right bg-gradient-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Eliminar imagen subida"><i class="fas fa-power-off"></i></button>
                      <br>
                      <div class="control-image">
                      <img id="blah" src="{{asset('vendor/adminlte/dist/img/employee.png')}}" width="140px" height="160px" style="display:block;margin:auto;" alt="Tu imagen" class="img-fluid" />
                      </div>
                    @else
                      <input src="{{$employee->photo}}" accept="image/*" name="photo" type="file" id="imgInp" class="input-group-text btn-block imgNew" >
                      <button id="btnDelete" type="button" class="btn float-right bg-gradient-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Eliminar imagen subida"><i class="fas fa-power-off"></i></button>
                      <br>
                      <div class="control-image">
                        <img id="blah" src="{{asset('images/employees/'.$employee->photo)}}" width="140px" height="160px" style="display:block;margin:auto;" alt="Tu imagen" class="img-fluid"/>
                      </div>
                    @endif
                </div>
              </div>
              <div class="col-sm-3">
              </div>
              <div class="col-sm-3">
              </div>
              <div class="col-sm-3">
                <button type="submit" class="btn btn-secondary btn-block">Modificar</button>
              </div>
              <div class="col-sm-3">
                <a type="button" class="btn btn-danger btn-block" href="{{route('employee.show')}}">Atras</a>
              </div>
              <div class="col-sm-3">
              </div>
              <div class="col-sm-12">
                <hr>
              </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <label>Area de TIC - dennys.sullcahuaman.valdez@gmail.com</label>
      </div>
    </form>
  </div>
@stop

@section('js')

<script>
  $(document).ready(function() {
    //Funcion para controlar la eliminacion de imgs
    $(function() {
      $('#btnDelete').click(function deleteImage(){
        let delImg = document.querySelector(".control-image");
        let imgNew = document.querySelector(".imgNew");
        //console.log(delImg);
        delImg.innerHTML  = `<img id="blah" src="{{asset('vendor/adminlte/dist/img/employee.png')}}" width="120px" height="150px" style="display:block;margin:auto;" alt="Tu imagen" class="img-fluid" />`;
        imgNew.value = "";
      });
    });
    
    //Modulo para guardar un reglamo
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
              'El personal ha sido modificado con éxito.',
              'success'
              )
              setTimeout( function () {
                  url = "{{route('employee.see', $employee->id)}}";
                  $(location).attr('href',url);
              }, 1500 )
          }
      }
  });
}
</script>


<script>


//Para la fotografia del personal
function readImage (input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#blah').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imgInp").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    readImage(this);
  });
</script>

@endsection