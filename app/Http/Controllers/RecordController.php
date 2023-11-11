<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Artist;
use App\Models\Service;
use App\Models\Appointment;
use Carbon\Carbon;

class RecordController extends Controller
{
    #service types
    const SERVICE_TYPE_TATTOO = 1;
    const SERVICE_TYPE_PIERCING = 2;
    const SERVICE_TYPE_SELL = 3;

    #appointment types
    const APPOINTMENT_TYPE_WALK_IN = 1;
    const APPOINTMENT_TYPE_SCHEDULED = 2;
    const APPOINTMENT_TYPE_OTHER = 3;

    public function index()
    {
        return view('record.index', [
            'records' => Record::all()
        ]);
    }

    public function view($id)
    {
        return view('record.record', [
            'record' => Record::findOrFail($id)
        ]);
    }

    public function add()
    {
        return view('record.add', [
            'artists' => Artist::all(),
            'services' => Service::all(),
            'appointments' => Appointment::all()
            ]);
    }

    public function store()
    {
        $record = new Record;
        $record->service_id = request('service_id');
        $record->appointment_id = request('appointment_id');
        $record->details = request('details');
        $record->placement = request('placement');
        $record->customer_name = request('customer_name'); // todo: associate on waiver form
        $record->artist_id = request('artist_id');
        $record->price_total = request('price');
        $record->price_shop = $this->getPriceForShop($record->price_total, $record->appointment_id);
        $record->price_artist = $record->price_total - $record->price_shop;
        $record->notes = request('notes');
        $record->receipt_number = $this->generateReceiptNumber($record->service_id);
        $record->image_attachment = request('image_attachment');
        $record->waiver_attachment = request('waiver_attachment');

        $record->save();

        return redirect('/')->with('mssg', 'Record added!');
    }

    private function generateReceiptNumber($serviceType)
    {
        $serviceType = strtolower($serviceType);
        switch ($serviceType) {
            case self::SERVICE_TYPE_TATTOO:
                $serviceType = 'T';
                break;
            case self::SERVICE_TYPE_PIERCING:
                $serviceType = 'P';
                break;
            case self::SERVICE_TYPE_SELL:
                $serviceType = 'S';
                break;
            default:
                $serviceType = 'X';
                break;
        }

        $time_stamp = Carbon::now(config('app.timezone'));
        $time_stamp = str_replace('-', '', $time_stamp);
        $time_stamp = str_replace(':', '', $time_stamp);
        $time_stamp = str_replace(' ', '-', $time_stamp);
        $receiptNumber = $serviceType . $time_stamp;

        return $receiptNumber;
    }

    private function getPriceForShop($price_total, $appointment_type)
    {
        if($appointment_type == self::APPOINTMENT_TYPE_WALK_IN || $appointment_type == self::APPOINTMENT_TYPE_SCHEDULED) {
            return $price_total * 0.5;
        }
        return $price_total * 0.2;
    }
}