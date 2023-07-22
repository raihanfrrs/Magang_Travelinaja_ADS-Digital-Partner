<div class="weekly-offers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Best Weekly Offers In Each City</h2>
            <p>Discover amazing deals in every city, as you embark on a journey of unbeatable savings.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-weekly-offers owl-carousel">
            @foreach ($cities as $city)
            <div class="item">
              <div class="thumb">
                <img src="{{ asset('storage/' . $city->image) }}" alt="">
                <div class="text">
                  <h4>{{ $city->name }}<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>@rupiah($city->price)<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> {{ $city->day }} Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="/reservation/{{ $city->slug }}">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</div>