@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Material Dashboard')])

@section('content')

<html>
    <head>
        ...
        {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
    </head>

  <div class="container" style="height: auto;">
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <form class="form" method="POST" action="{{ route('register') }}">
          @csrf

          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title"><strong>{{ __('Register') }}</strong></h4>
              <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
            </div>
            <div class="card-body ">
              <p class="card-description text-center">{{ __('Enter your data ') }}</p>

              {{--name--}}
              <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                </div>
                @if ($errors->has('name'))
                  <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                    <strong>{{ $errors->first('name') }}</strong>
                  </div>
                @endif
              </div>

              {{--surname--}}
              <div class="bmd-form-group mt-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="surname" class="form-control" placeholder="{{ __('Surname...') }}" value="{{ old('surname') }}" required autocomplete="surname">
                </div>
                
              </div>
              

              {{--code--}}
              <div class="bmd-form-group mt-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="code" class="form-control" placeholder="{{ __('Code...') }}" value="{{ old('code') }}" required autocomplete="code">
                </div>
                
              </div>



              
              <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                </div>
                @if ($errors->has('email'))
                  <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                    <strong>{{ $errors->first('email') }}</strong>
                  </div>
                @endif
              </div>
              <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" required>
                </div>
                @if ($errors->has('password'))
                  <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                    <strong>{{ $errors->first('password') }}</strong>
                  </div>
                @endif
              </div>
              <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
                </div>
                @if ($errors->has('password_confirmation'))
                  <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </div>
                @endif
              </div>

              {{--nationality--}}
              <div class="bmd-form-group mt-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="nationality" class="form-control" placeholder="{{ __('nationality...') }}" value="{{ old('nationality') }}" required autocomplete="nationality">
                </div>
                
              </div>

              {{--city--}}
              <div class="bmd-form-group mt-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="city" class="form-control" placeholder="{{ __('City...') }}" value="{{ old('city') }}" required autocomplete="city">
                </div>
                
              </div>

              {{--direction--}}
              <div class="bmd-form-group mt-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="direction" class="form-control" placeholder="{{ __('Direction...') }}" value="{{ old('direction') }}" required autocomplete="direction">
                </div>
                
              </div>

              {{--phone--}}
              <div class="bmd-form-group mt-2">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="phone" class="form-control" placeholder="{{ __('Phone...') }}" value="{{ old('phone') }}" required autocomplete="phone">
                </div>
              </div>

              {{--select rol id--}}

              <div class="form-group mt-2">
                <label for="rol_id">Select your role</label>
                <select name="rol_id" class="form-control selectpicker" data-style="btn btn-link" id="rol_id">
                        <option selected disabled> </option>
                        <option value="1">Admin</option>
                        <option value="2">Student</option>
                </select>
              </div>

                {{--select campus id--}}
              <div class="form-group mt-5">
                <label for="campu_id">Select your campus</label>
                <select name="campu_id" class="form-control selectpicker" data-style="btn btn-link" id="campu_id">
                         <option selected disabled> </option>
                        <option value="1">Bogota</option>
                        <option value="2">Medellin</option>
                        <option value="3">Cali</option>
                        <option value="4">Cartagena</option>
                </select>
              </div>

               {{--select faculty id--}}
               <div class="form-group mt-5">
                <label for="faculie_id">Select your faculty</label>
                <select name="faculie_id" class="form-control selectpicker" data-style="btn btn-link" id="faculie_id">
                         <option selected disabled> </option>
                        <option value="1">Matematica</option>
                        <option value="2">Humanidades</option>
                        <option value="3">Ingenieria</option>
                        <option value="4">Medicina</option>
                        <option value="5">Agronomia</option>
                </select>
              </div>





              
                   {{-- @foreach ($rols as $rol)
                    <option value="{{$rol->id}}">{{$rol->rolname}}</option>
                    @endforeach--}}
             

              {{--visible chack by reCaptcha--}}
              <div class="form-check mr-auto ml-3 mt-3">
                {!! htmlFormSnippet() !!}
                            @error('g-recaptcha-response')
                                <span class="invalid-feedback" role="alert" style="display: block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
              </div>
            </div>
            <div class="card-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Create account') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</html>

  @endsection
