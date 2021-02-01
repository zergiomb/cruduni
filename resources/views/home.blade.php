@extends('layout')

@section('content')
    
    
    <div class="container">
    <h1>@lang('Home')
    <br>
    
   
    @auth
    {{ auth()->user()->name}}
    @endauth
   </h1>
    @endsection

     </div>
