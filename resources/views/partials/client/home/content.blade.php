<div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Visit One Of Our Countries Now</h2>
            <p>Embark on an unforgettable adventure, exploring the wonders of our diverse nations and creating cherished memories along the way.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="items">
            <div class="row">
              @foreach ($countries as $country)
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{ asset('storage/'. $country->image) }}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4 class="text-capitalize">{{ $country->name }}</h4>
                        <span class="text-capitalize">{{ $country->continent }}</span>
                        <div class="main-button">
                          <a href="/about/{{ $country->slug }}">Explore More</a>
                        </div>
                        <p>{{ $country->description }}</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> {{ $country->population }} Mil People</li>
                          <li><i class="fa fa-globe"></i> {{ $country->territory }} km2</li>
                          <li><i class="fa fa-home"></i> @rupiah($country->avg_price)</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              {{-- @if ($countries->count() > 0)
              <div class="col-lg-12">
                <ul class="page-numbers">
                  <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
              </div>
              @endif --}}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>