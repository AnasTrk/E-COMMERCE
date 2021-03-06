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
                      <th>PRODUCT_ID</th>
                      <th>USER_ID</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                <tbody>
                    @foreach($Orders as $Order)
                    <tr>
                      <td>{{$Order->id}}</td>
                      <td>{{$Order->product_id}}</td>
                      <td>{{$Product->user_id}}</td>
                      <td>{{$Product->total}}</td>
                    @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
@endsection
