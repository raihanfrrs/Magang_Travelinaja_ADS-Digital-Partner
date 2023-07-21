@extends('templates.main-admin')

@section('section-main')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Edit Deals</h5>
          <div class="card">
            <div class="card-body">
              <form action="/deal/{{ $deal->id }}" method="POST">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="city_id" class="form-label">City</label>
                    <select name="city_id" id="city_id" class="form-control">
                      @foreach ($cities as $city)
                          <option value="{{ $city->id }}" {{ $city->id == old('city_id', $city->id) ? 'selected' : '' }}>{{ $city->name }}</option>
                      @endforeach
                    </select>
                    @error('city_id')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="day" class="form-label">Days</label>
                    <input type="number" class="form-control @error('day') is-invalid @enderror" id="day" name="day" value="{{ old('day', $deal->day) }}" autocomplete="off" required>
                    @error('day')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $deal->price) }}" autocomplete="off" required>
                    @error('price')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="until" class="form-label">Date Until</label>
                    <input type="date" class="form-control @error('until') is-invalid @enderror" id="until" name="until" value="{{ old('until', $deal->until) }}" autocomplete="off" required>
                    @error('until')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
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