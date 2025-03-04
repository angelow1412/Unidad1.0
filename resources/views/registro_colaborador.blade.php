@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-4">
            <div class="card">
              <div class="card-header align-center text-center">
                <div class="row">
                      <div class="col-md-3 text-left">
                        <button type="submit" class="btn btn-primary " onclick="location.href='{{ route('ListaColaboradores',['empresa'=>$nombre_empresa])}}'"> Regresar</button>
                      </div>

                      <div class="col-md-6">
                        <h3>{{ __('Registrar') }}</h3>
                      </div>
                      <div class="col-md-3">
                      </div>
                </div>

              </div>

                <div class="card-body  ">
                    <form method="POST" action="{{ route('RegistrarColaborador') }}">
                        @csrf

                        <div class="form-group row ">
                          <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Empresa') }}</label>
                            <div  class="p-3 text-md-right">
                                <select class="form-select form-control col-md-10" aria-label="Default select example" name='nombre_empresa'>
                                  <option selected hidden disabled>Selecciona</option>
                                  @foreach($empresas as $empresa)
                                    <option value="{{ $empresa->empresa }}">{{ $empresa->empresa }}</option>
                                  @endforeach
                                </select>
                              </div>


                            <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Nombre') }} <span class="text-red">*</span></label>

                            <div class="p-1 col-md-6">
                                <input id="ipt_nombre" type="text" class="form-control " name="nombre" value="{{ old('nombre') }}"  autofocus>

                            </div>
                            <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Apellido Paterno') }} <span class="text-red">*</span></label>

                            <div class="p-1 col-md-6">
                                <input id="ipt_apellido_paterno" type="text" class="form-control " name="apellido_paterno" value="{{ old('apellido_paterno') }}"  autofocus>

                            </div>
                            <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Apellido Materno') }}</label>

                            <div class="p-2 col-md-6">
                                <input id="ipt_apellido_materno" type="text" class="form-control " name="apellido_materno" value="{{ old('apellido_materno') }}"  autofocus>

                            </div>
                              <label for="name" class="p-3 col-md-4 col-form-label text-md-center" >{{ __('Area Empresarial') }} <span class="text-red">*</span></label>
                                <div  class="p-3 text-md-right">
                                    <select class="form-select form-control col-md-10" aria-label="Default select example" name='area_empresarial'>
                                      <option selected hidden disabled>Selecciona</option>
                                      @foreach($areas as $area_empresarial)
                                        <option value="{{ $area_empresarial->area_empresarial }}">{{ $area_empresarial->area_empresarial }} </option>
                                      @endforeach
                                    </select>
                                  </div>

                            <label for="name" class="p-2 col-md-4 col-form-label text-md-center">{{ __('Puesto') }} <span class="text-red">*</span></label>
                              <div  class="p-2 text-md-right">
                                  <select class="form-select form-control col-md-12" aria-label="Default select example" name='puesto'>
                                    <option selected hidden disabled>Selecciona</option>
                                    @foreach($puestos as $puesto)
                                      <option value="{{ $puesto->puesto }}">{{ $puesto->puesto }}</option>
                                    @endforeach
                                  </select>
                                </div>
                            <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Telefono (10 digitos)') }}</label>
                            <div class="p-1 col-md-6">
                                <input id="ipt_telefono" type="text" class="form-control " name="telefono" value="{{ old('telefono') }}"  autofocus>

                            </div>
                            <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Correo') }} <span class="text-red">*</span></label>
                            <div class="p-1 col-md-6">
                                <input id="ipt_correo" type="text" class="form-control " name="correo" value="{{ old('correo') }}"  autofocus>
                            </div>

                            <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Contraseña') }} <span class="text-red">*</span></label>

                            <div class="p-1 col-md-6">
                                <input id="ipt_contrasenia" type="text" class="form-control " name="contrasenia" value="{{ old('contrasenia') }}"  autofocus>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-3 ">
                            </div>
                            <div class="col-md-4 text-right">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Registrar') }}
                              </button>
                            </div>
                            <div class="col-md-5 ">
                              <span class="text-red">*</span><h7>Estos datos son obligatorios</h7>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
