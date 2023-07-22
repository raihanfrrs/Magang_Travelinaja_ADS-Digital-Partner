<div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div id="reservation-form" class="text-dark">
                <div class="row">
                    <div class="col-lg-12">
                      @if (isset($status))
                      <h4>Your <em>Reservation</em> Finished</h4>
                      @else
                      <h4>Finish Your <em>Reservation</em></h4>
                      @endif
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <table style="width:100%">
                            <tr>
                              <th>Name:</th>
                              <td>{{ $checkout->name }}</td>
                            </tr>
                            <tr>
                              <th>Phone:</th>
                              <td>{{ $checkout->phone }}</td>
                            </tr>
                            <tr>
                              <th>Email:</th>
                              <td>{{ $checkout->email }}</td>
                            </tr>
                            <tr>
                              <th>Guest:</th>
                              <td>{{ $checkout->guest }}</td>
                            </tr>
                            <tr>
                              <th>Destination:</th>
                              <td>{{ $checkout->city->country->name }} - {{ $checkout->city->name }}</td>
                            </tr>
                            <tr>
                              <th>Grand Total:</th>
                              <td>@rupiah($checkout->grand_total)</td>
                            </tr>
                            <tr>
                              <th>Check-in Date:</th>
                              <td>{{ \Carbon\Carbon::parse($checkout->check_in)->format('d/m/Y') }}</td>
                            </tr>
                        </table>

                        @if (!isset($status))
                        <form action="/reservation/checkout/{{ $checkout->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="mt-5">Checkout</button>
                        </form>
                        @endif
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>