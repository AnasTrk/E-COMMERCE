@extends('Profiles/dashboard')
@section('content_dash')
<div class="m-5">
<h1 class="h3 mb-2 text-gray-800">Categories</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>TITLES</th>
                      <th>DESCRIPTION</th>
                    </tr>
                  </thead>
                <tbody>
                    @foreach($Categories as $Categorie)
                    <tr>
                      <td>{{$Categorie->id}}</td>
                      <td>{{$Categorie->title}}</td>
                      <td>{{$Categorie->categorie_description}}</td>
                      <td class="d-flex flex-row"><a href="Categories/{{$Categorie->id}}/edit" class="mr-2 btn btn-light border bg-gray-200">Update</a>
                     <span> <form method="post" action="Categories/{{$Categorie->id}}">
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
