<div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form id="reservation-form" name="gs" method="POST" role="search" action="/reservation">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <h4>Make Your <em>Reservation</em> Through This <em>Form</em></h4>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="name" class="form-label">Your Name</label>
                      <input type="text" name="name" id="name" class="Name @error('name') is-invalid @enderror" placeholder="Ex. John Smithee" autocomplete="off" required value="{{ old('name') }}">
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="phone" class="form-label">Your Phone Number</label>
                    <input type="text" name="phone" id="phone" class="Number @error('phone') is-invalid @enderror" placeholder="Ex. +xxx xxx xxx" autocomplete="off" required value="{{ old('phone') }}">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="email" class="form-label">Your Email Address</label>
                    <input type="email" name="email" id="email" class="Number @error('email') is-invalid @enderror" placeholder="Ex. example@address.com" autocomplete="off" required value="{{ old('email') }}">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="guest" class="form-label">Number of Guests</label>
                  <input type="number" name="guest" id="guest" class="Number @error('guest') is-invalid @enderror" placeholder="Ex. 10" required value="{{ old('guest') }}">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label for="check_in" class="form-label">Check In Date</label>
                    <input type="date" name="check_in" id="check_in" class="date" required value="{{ old('check_in') }}">
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                      <label for="city_id" class="form-label">Choose Your Destination</label>
                      <select name="city_id" class="form-select" aria-label="Default select example" id="city_id" onChange="this.form.click()">
                        @foreach ($cities as $city)
                          <option value="{{ $city->id }}">{{ $city->country->name }}, {{ $city->name }}</option>
                        @endforeach
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button class="main-button">Make Your Reservation Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>