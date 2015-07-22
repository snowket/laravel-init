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

        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                   <table class="table table-hover table-bordered">
                       <tr>
                           <th>Info</th>
                           <th>Number</th>
                           <th>PersonalNumber</th>
                           <th>Password</th>

                       </tr>
                       <tr>
                           <td>{!! $user->FirstName !!} {!! $user->LastName !!}</td>
                           <td>
                               {!! $user->Number !!}
                           </td>
                           <td>
                               {!! $user->PersonalNumber !!}
                           </td>
                           <td>
                               {!! $user->password !!}
                           </td>
                       </tr>
                   </table>
            </div>
        </div>
  @stop