@extends('templates.main-admin')

@section('section-main')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Reservation</h5>
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-master table-borderless datatable table-hover" id="dataReservation">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Client</th>
                                <th scope="col" class="text-center">City</th>
                                <th scope="col" class="text-center">Phone</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Guest</th>
                                <th scope="col" class="text-center">Grand Total</th>
                                <th scope="col" class="text-center">Check-in</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection