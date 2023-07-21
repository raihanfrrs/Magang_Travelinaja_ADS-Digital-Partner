@extends('templates.main-admin')

@section('section-main')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('storage/'. $country->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $country->name }}</h5>
                  <p class="form-text text-uppercase">{{ $country->continent }}</p>
                  <hr>
                  <p class="card-text"><i class="bi bi-person"></i> {{ $country->population }} Mil People</p>
                  <p class="card-text"><i class="bi bi-globe"></i> {{ $country->territory }} km2</p>
                  <p class="card-text"><i class="bi bi-house"></i> @rupiah($country->avg_price)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection