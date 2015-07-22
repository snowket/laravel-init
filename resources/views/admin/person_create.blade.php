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
                  </div>
              </form>
          </div>
      </div>
  </div>
    @stop
