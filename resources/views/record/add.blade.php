@include('template.header')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="row mt-3">
                <h5>Add new record</h5>
            </div>
            <div class="row p-3 m-0 border border-info rounded">
                <form action="/record/store" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <label class="input-group-text w-50" for="service_id">Service:</label>
                        <select class="form-select" id="service_id" name="service_id">
                            @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="details">Details:</span>
                        <input type="text" class="form-control" id="details" name="details" placeholder="Details">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="placement">Placement:</span>
                        <input type="text" class="form-control" id="placement" name="placement" placeholder="Body Part">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="customer_name">Customer:</span>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Customer Name">
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text w-50" for="appointment_id">Appointment:</label>
                        <select class="form-select" id="appointment_id" name="appointment_id">
                            @foreach($appointments as $appointment)
                                <option value="{{ $appointment->id }}">{{ $appointment->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text w-50" for="artist_id">Artist:</label>
                        <select class="form-select" id="artist_id" name="artist_id">
                            @foreach($artists as $artist)
                                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="price">Price:</span>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text w-50" id="notes">Notes:</span>
                        <input type="text" class="form-control" id="notes" name="notes" placeholder="Notes">
                    </div>

                    <input type="submit" value="Submit" class="btn btn-info">
                </form>
            </div>
        </div>
    </div>
</div>
@include('template.footer')