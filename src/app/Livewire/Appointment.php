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
        $this->doctors = $this->services->first()->doctors ?? [];
    }

    public function render()
    {
        return view('livewire.appointment');
    }

    public function addDoctors($id){
        $this->doctors = $this->services->where('id',$id)->first()->doctors;
    }
}
