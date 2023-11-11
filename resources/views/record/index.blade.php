@include('template.header')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div style="overflow-x:auto">
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Service</th>
                    <th>Details</th>
                    <th>Type</th>
                    <th>Artist</th>
                    <th>Price</th>
                    <th><i class="fa fa-info-circle"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td>{{ $record->created_at->format('ymd') }}</td>
                    <td>{{ $record->service->code }}</td>
                    <td>{{ $record->details }}</td>
                    <td>{{ $record->appointment->code }}</td>
                    <td>{{ $record->artist->name }}</td>
                    <td>{{ $record->price_total }}</td>
                    <td><a href="/record/{{ $record->id }}"><i class="fa fa-info-circle"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@include('template.footer')