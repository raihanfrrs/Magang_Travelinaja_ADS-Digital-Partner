<div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>
                @if (isset($country->name))
                  {{ $country->name }}
                @else
                  All
                @endif 
                <em>Cities &amp; Towns</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                @foreach ($cities as $city)
                <div class="item">
                  <div class="thumb">
                    <img src="{{ asset('storage/' . $city->image) }}" alt="">
                    <h4>{{ $city->name }}</h4>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>