@extends('templates.main-admin')

@section('section-main')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Add City</h5>
          <div class="card">
            <div class="card-body">
              <form action="/city/{{ $city->slug }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="name" class="form-label">City</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $city->name) }}" autocomplete="off" required>
                  @error('name')
                    <div class="form-text invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="country_id" class="form-label">Country</label>
                  <select name="country_id" id="country_id" class="form-control">
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}" {{ $country->id == $city->country_id ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                  </select>
                  @error('country_id')
                    <div class="form-text invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                    <label for="day" class="form-label">Days</label>
                    <input type="number" class="form-control @error('day') is-invalid @enderror" id="day" name="day" value="{{ old('day', $city->day) }}" autocomplete="off" required>
                    @error('day')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $city->price) }}" autocomplete="off" required>
                    @error('price')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required onchange="previewImage()">
                    @error('image')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror

                    @if ($city->image)
                        <img src="{{ asset('storage/' .$city->image) }}" class="img-preview img-fluid d-block my-3">
                    @else
                        <img class="img-preview img-fluid d-block my-3">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection