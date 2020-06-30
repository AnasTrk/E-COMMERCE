@extends('Profiles/dashboard')
@section('content_dash')
<div class="m-5">
<h1 class="h3 mb-2 text-gray-800">PRODUITS</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">PRODUITS</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>TITLES</th>
                      <th>DESCRIPTION</th>
                      <th>IMAGE</th>
                      <th>Prix</th>
                      <th>QTE</th>
                      <th>ACTIONS</th>
                    </tr>
                  </thead>
                <tbody>
                    @foreach($Products as $Product)
                    <tr>
                      <td>{{$Product->id}}</td>
                      <td>{{$Product->title}}</td>
                      <td>{{$Product->description}}</td>
                      <td><img src=" {{$Product->image}}" alt=""></td>
                      <td>{{$Product->review}}</td>
                      <td>{{$Product->qte}}</td>
                      <td class="d-flex flex-row"><a href="Products/{{$Product->id}}/edit" class="mr-2 btn btn-light border bg-gray-200">Update</a>
                     <span> <form method="post" action="Products/{{$Product->id}}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                      <button  type="submit" class="btn btn-light border bg-danger text-white">Delete</button></td>
                      </form></span>
                    </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
@endsection
