<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

/**
 * Landing page component for Healthsoft.
 * 
 * Displays the main landing page with features, about section,
 * and contact information. Accessible without authentication.
 */
#[Layout('layouts.landing')]
class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.landing-page');
    }
}
