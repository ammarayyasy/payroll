<?php

namespace App\Livewire;

use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Presensi extends Component
{
    public function render()
    {
        $schedule = Schedule::where('user_id', Auth::id())->first();

        // return dd($schedule);
        return view('livewire.presensi', compact('schedule'))->layout('layouts.main');
    }
}
