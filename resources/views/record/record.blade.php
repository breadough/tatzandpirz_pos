@include('template.header')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="row mt-3">
                <h5>Record Information</h5>
            </div>

            <div class="row p-3 m-0 border border-info rounded">
                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="date">Date:</span>
                    <input type="text" class="form-control" id="date" name="date" value=
                    <?= $record->created_at ?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="service_type">Service:</span>
                    <input type="text" class="form-control" id="service_type" name="service_type" value=
                    <?= $record->service->name ?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="details">Details:</span>
                    <input type="text" class="form-control" id="details" name="details" value=
                    <?= $record->details ?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="placement">Placement:</span>
                    <input type="text" class="form-control" id="placement" name="placement" value=
                    <?= $record->placement?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="customer_name">Customer Name:</span>
                    <input type="text" class="form-control" id="customer_name" name="customer_name" value=
                    <?= $record->customer_name ?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="appointment_type">Appointment Type:</span>
                    <input type="text" class="form-control" id="appointment_type" name="appointment_type" value=
                    <?= $record->appointment->name ?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="artist_id">Artist:</span>
                    <input type="text" class="form-control" id="artist_id" name="artist_id" value=
                    <?= $record->artist->name ?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="receipt_number">Receipt Number:</span>
                    <input type="text" class="form-control" id="receipt_number" name="receipt_number" value=
                    <?= $record->receipt_number ?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="price">Price:</span>
                    <input type="text" class="form-control" id="price" name="price" value=
                    <?= $record->price_total ?>
                    disabled>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text w-50" id="price_shop">Shop:</span>
                    <input type="text" class="form-control" id="price_shop" name="price_shop" value=
                    <?= $record->price_shop ?>
                    disabled>
                </div>

            </div>
    </div>
</div>
@include('template.footer')