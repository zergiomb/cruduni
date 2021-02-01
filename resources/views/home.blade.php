@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('User information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                {{--profile user view and update name--}}
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                {{--profile user view and update surname--}}
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Surname') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('surname') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" id="input-surname" type="text" placeholder="{{ __('Surname') }}" value="{{ old('surname', auth()->user()->surname) }}" required="true" aria-required="true"/>
                        @if ($errors->has('surname'))
                          <span id="name-error" class="error text-danger" for="input-surname">{{ $errors->first('surname') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>


                   {{--profile user view and update code--}}
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Code') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('code') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" id="input-code" type="text" placeholder="{{ __('Code') }}" value="{{ old('code', auth()->user()->code) }}" required="true" aria-required="true"/>
                        @if ($errors->has('code'))
                          <span id="name-error" class="error text-danger" for="input-code">{{ $errors->first('code') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

               

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                    {{--profile user view and update nationality--}}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Nationality') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('nationality') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" id="input-nationality" type="text" placeholder="{{ __('Nationality') }}" value="{{ old('nationality', auth()->user()->nationality) }}" required="true" aria-required="true"/>
                            @if ($errors->has('nationality'))
                              <span id="name-error" class="error text-danger" for="input-nationality">{{ $errors->first('nationality') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>

                          {{--profile user view and update city--}}
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('City') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="{{ __('City') }}" value="{{ old('city', auth()->user()->city) }}" required="true" aria-required="true"/>
                        @if ($errors->has('city'))
                          <span id="name-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                      {{--profile user view and update direction--}}
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Direction') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('direction') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('direction') ? ' is-invalid' : '' }}" name="direction" id="input-direction" type="text" placeholder="{{ __('Direction') }}" value="{{ old('direction', auth()->user()->direction) }}" required="true" aria-required="true"/>
                        @if ($errors->has('direction'))
                          <span id="name-error" class="error text-danger" for="input-direction">{{ $errors->first('direction') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                      {{--profile user view and update phone--}}
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('Phone') }}" value="{{ old('phone', auth()->user()->phone) }}" required="true" aria-required="true"/>
                        @if ($errors->has('phone'))
                          <span id="name-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>


              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                      @if ($errors->has('old_password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection