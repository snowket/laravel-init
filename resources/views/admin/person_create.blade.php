@extends('master')


@section('content')
  <div class="conteiner">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <form action="{{url('person')}}" method="POST">
                  <input type="hidden" class="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="form-group">
                      <lebel class="form-control bg-primary" for="FirstName">Enter Name:
                      </lebel>
                      <input type="text" name="FistName" class="form-control">
                  </div>
                  <div class="form-group">
                      <lebel class="form-control bg-primary">
                          Enter Last Name :
                      </lebel>
                      <input type="text" name="LastName" class="form-control">
                  </div>
                  <div class="form-group">
                      <lebel class="form-control bg-primary">
                          Enter Phone Number :
                      </lebel>
                      <input type="number" name="Number" class="form-control">
                  </div>
                  <div class="form-group">
                      <lebel class="form-control bg-primary">
                          Enter Personal Number :
                      </lebel>
                      <input type="number" name="PersonalNumber" class="form-control">
                  </div>
                  <div class="form-group">
                      <lebel class="form-control bg-primary">
                          Enter Password :
                      </lebel>
                      <input type="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                      <lebel class="form-control">Select Type</lebel>
                      <select name="type"  class="select">
                          @foreach($types as $type)
                              <option value="{!! $type->index !!}">{!! $type->name !!}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group buttons">
                      <button class="btn btn-primary" type="submit">Save</button>
                      <button type="reset">Reset Form</button>
                      <a type="button" href="{!! URL::previous() !!}">Back</a>
                  </div>
              </form>
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          </div>
      </div>
  </div>
    @stop
