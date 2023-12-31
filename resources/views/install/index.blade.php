
@extends('layouts.skeleton')
@push('stylesheet')
@endpush
@section('app')
<div class="container">
  <div class="page-heading mt-5">
    <section class="section" id="part-1">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
          <div class="pricing">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header text-center">
                    <h4 class="card-title">Instalación</h4>
                    <p class="text-center">Nunca había sido tan fácil crear un sitio en linea</p>
                  </div>
                  <img src="{{ asset('base/assets/rawrshop/shop.gif') }}" class="shadow rounded" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="card shadow">
                  <div class="card-header text-center p-1">
                    <h4 class="card-title mt-2">Crea tu sitio profesional</h4>
                    <p class="text-center">Diseña a tu medida, gestiona a lo grande y vende como un 🦄</p>
                    <h1 class="">Rawrshop</h1>
                  </div>
                  <div class="card-body">
                    <ul>
                      <li><i class="bi bi-check-circle"></i>Crea tu página web, tienda o portafolio</li>
                      <li><i class="bi bi-check-circle"></i>Personalizalo como tu quieras</li>
                      <li><i class="bi bi-check-circle"></i>Muy fácil de usar</li>
                      <li><i class="bi bi-check-circle"></i>Totalmente gratuito</li>
                      <li><i class="bi bi-check-circle"></i>
                        Incorpora tus redes
                        <i class="bi bi-facebook text-primary me-2"></i>
                        <i class="bi bi-youtube text-danger me-2"></i>
                        <i class="bi bi-whatsapp text-success me-2"></i>
                        <i class="bi bi-instagram me-2" id="insta"></i>
                        <i class="bi bi-linkedin text-primary me-2"></i>
                        <i class="bi bi-phone text-info me-2"></i>
                      </li>
                      <li><i class="bi bi-check-circle"></i>Obtén un 100% en posicionamiento en buscadores, optimización en motores de búsqueda y SEO</li>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary btn-block" id="button_next"><strong>CONTINUAR</strong></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body row">
                    <div class="media d-flex justify-content-center ">
                      <div class="avatar me-3">
                        {{-- <img src="https://media-exp1.licdn.com/dms/image/C4D03AQHcRvv5OGrdLw/profile-displayphoto-shrink_400_400/0/1578931582275?e=1635984000&v=beta&t=fDDLolRdMTBD3cFRZDUsGgxqlO2FhpQ5dS0J2uYFYus" alt="" srcset=""> --}}
                      </div>
                      <div class="">
                        <h6 class="mb-0">
                          Benjamin Mora
                        </h6>
                        <span class="text-xs">benja.mora.torres@gmail.com</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="part-2" hidden>
      <div class="row match-height">
        <div class="col-12 col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">
                <i class="fa fa-store-alt me-2"></i>
                Instalación de página web
              </h4>
              <p>Crea tu página web en simples pasos</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{ asset('base/assets/rawrshop/shop.gif') }}" class="img-fluid shadow bg-body rounded" alt="">
                </div>
                <div class="col-md-6">
                  <form action="{{ route('install.store') }}" method="post" class="form-horizontal form-submit">
                    @csrf
                    <div class="form-body" id="form-1">
                      <div class="row">
                        <h4 class="card-title">
                          <i class="fa fa-user me-2"></i>
                          Mi perfil de usuario
                        </h4>
                        <p>Ingresa tus datos para crear tu usuario</p>

                        <div class="col-md-4">
                          <label for="inputName">Nombre<small class="text-danger">*</small></label>
                        </div>
                        <div class="col-md-8 form-group">
                          <input type="text" id="inputName" maxlength="20" class="form-control" name="nombre" required>
                          <div class="invalid-feedback">
                            Debe tener más de 4 caracteres
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="inputEmail">Correo<small class="text-danger">*</small></label>
                        </div>

                        <div class="col-md-8 form-group">
                          <input type="email" id="inputEmail" class="form-control" name="correo" required>
                          <div class="invalid-feedback">
                            Debe ingresar un correo válido.
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="inputPass">Contraseña<small class="text-danger">*</small></label>
                        </div>
                        <div class="col-md-8 form-group">
                          <input type="password" id="inputPass" class="form-control" name="password" required>
                          <div class="invalid-feedback">
                            Debe tener un mínimo de 8 caracteres
                          </div>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                          <button type="button" class="btn btn-primary me-1 mb-1" onclick="handleChangeFormNext()"><strong>SIGUIENTE</strong></button>
                        </div>
                      </div>
                    </div>
                    <div class="form-body" id="form-2" hidden>
                      <div class="row">
                        <h4 class="card-title">
                          <i class="fa fa-store-alt me-2"></i>
                          Instalación de página web
                        </h4>
                        <p>Crea tu página web en simples pasos</p>
                        <div class="col-md-4">
                          <label for="select_tipo">Tipo de página</label>
                        </div>
                        <div class="col-md-8 form-group">
                          <select id="select_tipo" class="form-control" name="tipo" required>
                            @foreach ($tipos as $key => $value)
                              <option value="{{ $key }}" {{ $key=='shop' ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="nombrePaginaInput">Nombre página<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-8 form-group">
                          <input type="text" id="nombrePaginaInput" class="form-control" name="nombre_pagina" required>
                        </div>
                        <div class="col-md-4">
                          <label for="input-rubro">Rubro<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-8 form-group">
                          <input type="text" id="input-rubro" class="form-control" name="rubro" required>
                        </div>
                        <div class="col-md-4">
                          <label for="input-descripcion">Descripción<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-8 form-group">
                          <input type="text" id="input-descripcion" class="form-control" name="descripcion" required>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                          <button type="button" class="btn btn-danger me-1 mb-1" onclick="handleChangeFormBack()"><strong>ATRÁS</strong></button>
                          <button type="submit" class="btn btn-primary me-1 mb-1"><strong>GUARDAR</strong></button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
@push('javascript')
<script>
  let step = 1;
  let form_step = 1;

  let button = document.getElementById("button_next");
  let buttonForm = document.getElementById("button_form_next");
  let buttonFormBack = document.getElementById("button_form_back");
  button.onclick = handleChange;
  buttonForm.onclick = handleChangeForm;
  buttonFormBack.onclick = handleChangeFormBack;

  function handleChange(evt) {
    changeSteps("part-", step, true);
    step++;
  }

  function handleChangeFormNext(evt) {
    if (validateFromOne()) {
      changeSteps("form-", form_step, true);
      form_step++;
    }
  }

  function handleChangeFormBack(evt) {
    changeSteps("form-",form_step, false);
    form_step--;
  }

  function changeSteps(name, s, next) {
    let partOne = document.getElementById(name + s);
    let partTwo = document.getElementById(name + (s + 1));
    if (!next) {
      partOne = document.getElementById(name + 2);
      partTwo = document.getElementById(name + 1);
    }
    partOne.setAttribute("hidden", true);
    partTwo.removeAttribute("hidden");
  }

  function validateEmail(input) {
    var re = /\S+@\S+\.\S+/;
    return re.test(input);
  }

  function validateFromOne() {
    let name = document.getElementById('inputName');
    let email = document.getElementById('inputEmail');
    let pass = document.getElementById('inputPass');

    name.classList.remove('is-invalid');
    email.classList.remove('is-invalid');
    pass.classList.remove('is-invalid');

    if (name.value.length < 4) {
      name.classList.add('is-invalid');
    }

    if (email.value.length < 8) {
      if (!validateEmail(email)) {
        email.classList.add('is-invalid');
      }
    }

    if (pass.value.length <= 8) {
      pass.classList.add('is-invalid');
    }

    if (name.value.length>4 && email.value.length>8 && pass.value.length>=8) {
      return true;
    }
    return false;
  }

  // changeSteps("part-");
</script>
@endpush
