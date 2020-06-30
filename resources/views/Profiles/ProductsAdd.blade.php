@extends('Profiles/dashboard')
@section('content_dash')
<form class="m-5" method="POST" action="{{url('ProductsAdd')}}">
    @csrf
  <div class="form-group m-5">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" name="title" class="form-control" id="formGroupExampleInput" >
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">Description</label>
    <input type="text" name="description" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">Image</label>
    <input type="text" name="image" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">Prix</label>
    <input type="text" name="review" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">QUANTITY</label>
    <input type="text" name="qte" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <input type="submit" class="form-control bg-primary text-white" value="Submit" id="formGroupExampleInput2">
  </div>
</form>
@endsection
