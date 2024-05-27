<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;

class Appointment extends Component
{
    public $services, $doctors;

    public function __construct()
    {
        $this->services = Job::with('doctors')->get();
        $this->doctors = [];
    }

    public function render()
    {
        return view('livewire.appointment');
    }

    public function test(){
        dd(45);
    }
}
