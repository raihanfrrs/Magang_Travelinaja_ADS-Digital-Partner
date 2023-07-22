<div class="about-main-content" 
@if (isset($country->image))
  style="background-image: url('{{ asset('storage/' . $country->image) }}') !important"
@endif
>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg" 
            @if (isset($country->image))
              style="background-image: url('{{ asset('storage/' . $country->image) }}') !important"
            @endif
            ></div>
            <h4>EXPLORE OUR COUNTRY</h4>
            <div class="line-dec"></div>
            <h2>Welcome To 
              @if (isset($country->name))
                  {{ $country->name }}
              @else
                Travelinaja
              @endif
            </h2>
            <p>
              @if (isset($country->description))
                  {{ $country->description }}
              @else
                Travelinaja is a user-friendly travel platform that streamlines trip planning and booking, offering a wide range of options and real-time updates for a simplified and efficient travel experience.
              @endif
            </p>
          </div>
        </div>
      </div>
    </div>
</div>