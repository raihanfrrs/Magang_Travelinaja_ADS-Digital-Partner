@extends('templates.main-admin')

@section('section-main')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Add Country</h5>
          <div class="card">
            <div class="card-body">
              <form action="/country" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                  <label for="name" class="form-label">Country</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autocomplete="off" required>
                  @error('name')
                    <div class="form-text invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                    <label for="continent" class="form-label">Continent</label>
                    <input type="text" class="form-control @error('continent') is-invalid @enderror" id="continent" name="continent" value="{{ old('continent') }}" autocomplete="off" required>
                    @error('continent')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="population" class="form-label">Population <span class="text-danger"><sup>/ Million</sup></span></label>
                    <input type="text" class="form-control @error('population') is-invalid @enderror" id="population" name="population" value="{{ old('population') }}" autocomplete="off" required>
                    @error('population')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="territory" class="form-label">Territory <span class="text-danger"><sup>/ KM2</sup></span></label>
                    <input type="text" class="form-control @error('territory') is-invalid @enderror" id="territory" name="territory" value="{{ old('territory') }}" autocomplete="off" required>
                    @error('Territory')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" required>{{ old('description') }}</textarea>
                    @error('description')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required onchange="previewImage()">
                    @error('image')
                      <div class="form-text invalid-feedback">{{ $message }}</div>
                    @enderror
                    <img class="img-preview img-fluid d-block my-3">
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