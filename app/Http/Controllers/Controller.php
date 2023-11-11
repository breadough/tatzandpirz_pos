<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Record;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index()
    {
        #get the sales for the day
        $records = Record::whereDate('created_at', Carbon::today())->get();

        #get the sales for the day at column price_total
        $sales_today = $records->sum('price_total');

        #get the sames for the month
        $sales_month = Record::whereMonth('created_at', Carbon::now()->month)->get()->sum('price_total');


        #get the total tattooes clients for this month
        $total_client_tattoo = Record::whereMonth('created_at', Carbon::now()->month)->where('service_id', 1)->get()->count();
        $total_client_piercing = Record::whereMonth('created_at', Carbon::now()->month)->where('service_id', 2)->get()->count();
        $total_clients = $total_client_tattoo + $total_client_piercing;




        return view('index', [
            'sales_today' => $sales_today,
            'sales_month' => $sales_month,
            'total_client_tattoo' => $total_client_tattoo,
            'total_client_piercing' => $total_client_piercing,
            'total_clients' => $total_clients,

        ]);
    }
}
