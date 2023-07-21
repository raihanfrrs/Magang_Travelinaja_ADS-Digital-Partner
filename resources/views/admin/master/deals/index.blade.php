@extends('templates.main-admin')

@section('section-main')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Deals <a href="/deal/add" class="btn btn-secondary btn-sm" style="float: right;">+ Deals</a></h5>
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-master table-borderless datatable table-hover" id="dataDeal">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">City</th>
                                <th scope="col" class="text-center">Days</th>
                                <th scope="col" class="text-center">Price</th>
                                <th scope="col" class="text-center">Date Until</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection