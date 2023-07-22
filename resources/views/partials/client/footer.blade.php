@if (!request()->is('reservation', 'reservation/*'))
<div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Are You Looking To Travel ?</h2>
          <h4>Make A Reservation By Clicking The Button</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="/reservation">Book Yours Now</a>
          </div>
        </div>
      </div>
    </div>
</div>
@endif

<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 <a href="#">Travelinaja</a> Company. All rights reserved.</p>
        </div>
      </div>
    </div>
</footer>