@extends('Profiles/dashboard')
@section('content_dash')
<form class="m-5" method="POST" action="{{url('User/'.$User->id)}}">
<input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
  <div class="form-group m-5">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" name="name" value="{{$User->name}}" class="form-control" id="formGroupExampleInput" >
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">Lastname</label>
    <input type="text" name="lastname" value="{{$User->lastname}}" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">Mail</label>
    <input type="text" name="email" value="{{$User->email}}" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <input type="submit" class="form-control bg-primary text-white" value="Submit" id="formGroupExampleInput2">
  </div>
</form>
@endsection
