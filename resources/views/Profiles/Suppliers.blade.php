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
                      <th>NAME</th>
                      <th>TYPE</th>
                      <th>ACTIONS</th>
                    </tr>
                  </thead>
                <tbody>
                    @foreach($Suppliers as $Supplier)
                    <tr>
                      <td>{{$Order->id}}</td>
                      <td>{{$Order->name}}</td>
                      <td>{{$Product->type}}</td>
                    @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
@endsection
