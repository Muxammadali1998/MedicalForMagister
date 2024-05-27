<?php

namespace App\Services;

use App\Models\Message;
use App\Models\Patient;

class ClientService
{
    public function patient($data)
    {
        Patient::create($data);

    }

    public function message($data){
        Message::create($data);
    }
}
