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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a type="button" class="btn btn-default" href="{{url('person/create')}}">Create New User </a>
            </div>
            <div class="col-md-4 col-md-offset-2">
                @if(isset($persons))
                    <ul>
                        @foreach($persons as $person)
                            <li><a href="{{action('PersonController@show',$person->id)}}">{!! $person->FirstName !!} {!! $person->LastName !!}</a></li>

                        @endforeach
                    </ul>
                @else
                    <p>No Users Found</p>
                @endif
            </div>
        </div>
    </div>

@stop
