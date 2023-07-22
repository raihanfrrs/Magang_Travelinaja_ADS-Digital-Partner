<div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Best Weekly Offers In Each City</h2>
            <p>Best Weekly Offers In Each City
              Discover exclusive deals and discounts in every urban hub, crafted to elevate your travel experiences like never before.</p>
          </div>
        </div>

        @foreach ($deals as $deal)
        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="{{ asset('storage/' . $deal->city->image) }}" alt="" style="height: 300px">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <span class="info">*Limited Offer Until {{ \Carbon\Carbon::parse($deal->until)->format('d/m/Y') }}</span>
                  <h4>{{ $deal->city->name }}</h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-clock"></i>
                      <span class="list">{{ $deal->day }} Days</span>
                    </div>
                    <div class="col-6">
                      <i class="bi bi-cash-stack"></i>
                      <span class="list">@rupiah($deal->price)</span>
                    </div>
                  </div>
                  <div class="main-button mt-4">
                    <a href="/reservation/{{ $deal->city->slug }}">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="col-lg-12">
          <ul class="page-numbers">
            <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </div> --}}
      </div>
    </div>
  </div>