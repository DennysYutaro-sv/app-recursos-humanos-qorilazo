@extends('adminlte::page')
@section('css')
@endsection
@section('plugins.Ekko-lightbox',true)
@section('title', 'Empleado')
<!--para traer plugins de adminite section('plugins.Sweetalert2',true) ya activamos el plugin no necesitamos invocalarlo-->

@section('content')
<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title" style="font-weight: bold;"><i class="fas fa-file-alt"></i> Registro del Personal </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form data-url="{{ route('employee.store') }}" id="formCreate" method="POST">
      @csrf
      <div class="card-body">
          <div class="row">
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre</label>
                  <input id="n" type="text" name="name" class="form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Apellido Paterno</label>
                  <input type="text" name="father_name" class="form-control" id="f" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Apellido Materno</label>
                  <input type="text" name="mother_name" class="form-control" id="m" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>DNI</label>
                  <input type="number" name="dni" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-sm-4">
                  <label>Género</label>
                  <select name="gender" class="form-control">
                    <option value="" selected> Seleccione... </option>
                    <option value="0">FEMENINO</option>
                    <option value="1">MASCULINO</option>
                  </select>
              </div>

              <div class="col-sm-4">
                  <label>Fecha de nacimiento</label>
                  <div class="input-group">
                  <input type="date" class="form-control" name="birth_date" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                  </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Profesión</label>
                  <select class="form-control" id="" name="profession_id">
                    <option value=""> Seleccione... </option>
                      @foreach($professions as $profession)
                        <option value="{{ $profession->id }}">{{ $profession->profession_name }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Carga Familiar</label>
                  <select name="family_burden" class="form-control">
                    <option value="" selected> Seleccione... </option>
                    <option value="0" >NO</option>
                    <option value="1">SI</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Licencia de conducir</label>
                  <select name="license" class="form-control">
                    <option value="" selected>Seleccione...</option>
                    <option value="0">NO</option>
                    <option value="1">SI</option>
                  </select>
                </div>
              </div>
              
              <div class="col-sm-8">
                <!-- text input -->
                <div class="form-group">
                  <label>Telefono/Celular</label>
                  <input type="text" name="phone" class="form-control" placeholder="">
                </div>
              </div>
              
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Agencia donde permanecera</label>
                  <select class="form-control" id="agency" name="agency_id">
                    <option value=""> Seleccione... </option>
                      @foreach($agencies as $agency)
                        <option value="{{ $agency->id }}">{{ $agency->agency_name }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Dirección de residencia</label>
                  <input name="address" type="text" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Referencia</label>
                  <input name="reference" type="text" class="form-control" placeholder="">
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Departamento</label>
                  <select class="form-control" id="department" name="department_id">
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
                  <select class="form-control" id="province" name="province_id">
                          <option value=""> Seleccione </option>
                      </select>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Distrito</label>
                  <select class="form-control" id="district" name="district_id">
                          <option value=""> Seleccione </option>
                      </select>
                  </select>
                </div>
              </div>
              
              <div class="col-sm-12">
                <hr>
              </div>
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Curriculum(pdf)</label>
                  <input accept=".pdf" name="curriculum" type="file" id="cv" class="input-group-text btn-block"  name="curriculum">
                </div>
              </div>
              <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Antecedentes(pdf)</label>
                  <input accept=".pdf" name="criminal_record" type="file" id="ap" class="input-group-text btn-block"  name="criminal_record">
                </div>
              </div>
              <div class="col-sm-3">
              </div>
              <div class="col-sm-6">
                <div class="form-group ">
                  <label>Fotografía del personal(jpg,png,jpeg.) </label>

                  <input accept="image/*" name="photo" type="file" id="imgInp" class="input-group-text btn-block imgNew" >
                  <button id="btnDelete" type="button" class="btn float-right bg-gradient-danger btn-xs" data-toggle="tooltip" data-placement="right" title="Eliminar imagen subida"><i class="fas fa-power-off"></i></button>
                  <br>
                  <div class="control-image">
                    <img id="blah" src="{{asset('vendor/adminlte/dist/img/employee.png')}}" width="120px" height="150px" style="display:block;margin:auto;" alt="Tu imagen" class="img-fluid" />
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
              </div>
              <div class="col-sm-3">
              </div>
              <div class="col-sm-3">
                <button type="submit" class="btn btn-success btn-block">Registrar</button>
              </div>
              <div class="col-sm-3">
                <button type="button" class="btn btn-danger btn-block">Declinar</button>
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
    //--------------------------------------------------
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
    //Modulo para guardar un reglamo
    $formCreate = $('#formCreate');
    $formCreate.on('submit', sendData);
  });
  var $formCreate;

        function sendData() {
        event.preventDefault();
        var createUrl = $formCreate.data('url');
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
                    'Nuevo personal registrado con éxito.',
                    'success'
                    )
                    setTimeout( function () {
                        url = "{{route('employee.show')}}";
                        $(location).attr('href',url);
                    }, 1200 )
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