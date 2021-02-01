@extends('layout')
<!DOCTYPE html>


@section('content')
<br>
<br>
<html>
    <head>
        ...
        {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
    </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right mt-2" >{{ __('Name') }}</label>

                            <div class="col-md-6 mt-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{--surname--}}
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right mt-2" >Surname</label>

                            <div class="col-md-6 mt-2">
                                <input id="surname" type="text" class="form-control " name="surname" value="{{ old('surname') }}" required autocomplete="surname">

                                
                            </div>
                        </div>

                        {{--code--}}
                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right mt-2" >code</label>

                            <div class="col-md-6 mt-2">
                                <input id="code" type="text" class="form-control " name="code" value="{{ old('code') }}" required autocomplete="code">

                                
                            </div>
                        </div>
                         
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right mt-2">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6 mt-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right mt-2">{{ __('Password') }}</label>

                            <div class="col-md-6 mt-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right mt-2">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6 mt-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{--nationality--}}
                        <div class="form-group row">
                            <label for="nationality" class="col-md-4 col-form-label text-md-right mt-2" >Nationality</label>

                            <div class="col-md-6 mt-2">
                                <input id="nationality" type="text" class="form-control " name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality">

                                
                            </div>
                        </div>
                         
                        {{--city--}}
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right mt-2" >City</label>

                            <div class="col-md-6 mt-2">
                                <input id="city" type="text" class="form-control " name="city" value="{{ old('city') }}" required autocomplete="city">

                                
                            </div>
                        </div>

                        {{--direction--}}
                        <div class="form-group row">
                            <label for="direction" class="col-md-4 col-form-label text-md-right mt-2" >Direction</label>

                            <div class="col-md-6 mt-2">
                                <input id="direction" type="text" class="form-control " name="direction" value="{{ old('direction') }}" required autocomplete="direction">

                                
                            </div>
                        </div>
                         
                        {{--phone--}}
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right mt-2" >Phone</label>

                            <div class="col-md-6 mt-2">
                                <input id="phone" type="text" class="form-control " name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-2 mt-3">
                        {!! htmlFormSnippet([
                            "theme" => "light",
                            "theme" => "light",
                            "size" => "normal",
                            "tabindex" => "3",
                            "callback" => "callbackFunction",
                            "expired-callback" => "expiredCallbackFunction",
                            "error-callback" => "errorCallbackFunction",
                        ]) !!}
                        </div>

                        <div class="form-group row mb-0 mt-2">
                            <div class="col-md-6 offset-md-4 mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</html>