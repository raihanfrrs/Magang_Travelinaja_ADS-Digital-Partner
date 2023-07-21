@extends('templates.main-admin')

@section('section-main')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Country <a href="/country/add" class="btn btn-secondary btn-sm" style="float: right;">+ Country</a></h5>
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-master table-borderless datatable table-hover" id="dataCountry">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Country</th>
                                <th scope="col" class="text-center">Continent</th>
                                <th scope="col" class="text-center">Population</th>
                                <th scope="col" class="text-center">Territory</th>
                                <th scope="col" class="text-center">Avg Price</th>
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