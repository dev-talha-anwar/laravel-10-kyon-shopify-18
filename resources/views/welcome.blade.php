@extends('vendor.shopify-app.layouts.default') 
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-polaris/bootstrap-polaris.min.css') }}"
@endsection
@section('content')
    <main class="container-fluid">
      <div class="row no-gutters">
        <div class="col-md-12">
          <section class="card">
            <div class="card-body">
              <table class="table table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>me@me.ca</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </main>
@endsection
