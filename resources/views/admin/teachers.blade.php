@extends('master')

@section('header')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('admin.nav')
            </div>
        </div>
    </div>
@stop

@section('content')


    <p>Master Teacher Page :</p>
    @if(isset($teachers))
        @foreach($teachers as $teacher)
            <li>{!! $teacher->name !!}</li>
        @endforeach
    @endif


    @stop
