@extends('Profiles/dashboard')
@section('content_dash')
<form class="m-5" method="POST" action="{{url('Products/'.$Product->id)}}">
<input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
  <div class="form-group m-5">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" name="title" value="{{$Product->title}}" class="form-control" id="formGroupExampleInput" >
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">Description</label>
    <input type="text" name="description" value="{{$Product->description}}" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">Image</label>
    <input type="text" name="image" value="{{$Product->image}}" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">Prix</label>
    <input type="text" name="review" value="{{$Product->review}}" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <label for="formGroupExampleInput2">QUANTITY</label>
    <input type="text" name="qte" value="{{$Product->review}}" class="form-control" id="formGroupExampleInput2">
  </div>
  <div class="form-group m-5">
    <input type="submit" class="form-control bg-primary text-white" value="Submit" id="formGroupExampleInput2">
  </div>
</form>
@endsection
