@extends('templates.main-admin')

@section('section-main')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('storage/'. $city->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $city->name }}</h5>
                  <p class="form-text text-uppercase">{{ $city->country->name }} - {{ $city->country->continent }}</p>
                  <hr>
                  <p class="card-text"><i class="bi bi-car-front"></i> {{ $city->day }} Days Trip > Hotel Included</p>
                  <p class="card-text"><i class="bi bi-airplane"></i> Airplane Bill Included</p>
                  <p class="card-text"><i class="bi bi-building"></i> Daily Places Visit</p>
                  <hr>
                  <p><i class="bi bi-people"></i> <span class="text-info" style="float: right">@rupiah($city->price) / person</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection