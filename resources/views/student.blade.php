@extends('layout')
@section('title','Students')


    @section('content')
    
    
    <div class="container">
    <h1>@lang('Home')
    <br>
    
   
    @auth
    {{ auth()->user()->name}}
    @endauth

    </h1>
    @forelse ($users as $userItem)
   
        <li>
        {{$userItem->name }}
    
         {{$userItem->surname }}
        <br>
        {{$userItem->code}}
        <br>
        {{$userItem->email}}
        <br>
        {{$userItem->nationality}}
        <br>
        {{$userItem->city}}
        <br>
        {{$userItem->direction}}
        <br>
        {{$userItem->phone}}
        </li>


        @empty

        @endsection
    @endforelse
    </div>
    