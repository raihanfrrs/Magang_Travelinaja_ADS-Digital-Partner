<section id="section-1">
    <div class="content-slider">
      @foreach ($heros as $hero)
      <input type="radio" id="banner{{ $loop->iteration }}" class="sec-{{ $loop->iteration }}-input" name="banner" @if ($loop->iteration == 1) checked @endif>
      @endforeach
      <div class="slider">
        @foreach ($heros as $hero)
        <div id="top-banner-{{ $loop->iteration }}" class="banner" style="background-image: url('{{ asset('storage/' . $hero->image) }}') !important">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Take a Glimpse Into The Beautiful Country Of:</h2>
              <h1>{{ $hero->name }}</h1>
              <div class="border-button"><a href="/about/{{ $hero->slug }}">Go There</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Population:</span><br>{{ $hero->population }} M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Territory:</span><br>{{ $hero->territory }} KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>AVG Price:</span><br>@rupiah($hero->avg_price)</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="/about/{{ $hero->slug }}">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <nav>
        <div class="controls">
          @foreach ($heros as $hero)
            <label for="banner{{ $loop->iteration }}"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">{{ $loop->iteration }}</span></label>
          @endforeach
        </div>
      </nav>
    </div>
</section>