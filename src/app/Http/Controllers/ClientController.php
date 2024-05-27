<?php

namespace App\Http\Controllers;

use App\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(public ClientService $service)
    {
    }

    public function patient(Request $request)
    {

        $this->service->patient($request->all());
        return back()->with(['success' => 'Murojatingiz qabul qilindi']);
    }

    public function message(Request $request)
    {
        $this->service->message($request->all());
        return back()->with(['success' => 'Murojatingiz qabul qilindi']);
    }
}
