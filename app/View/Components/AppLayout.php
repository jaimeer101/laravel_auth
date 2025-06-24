<?php

namespace App\View\Components;

use App\Models\PersonalNofications;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $notificationsList = array();
        if(Auth::check()) {
            $notificationsList = (new PersonalNofications())->get_users_notifications(Auth::user()->id);
        }
        
        return view('layouts.app', ["notificationsList" => $notificationsList]);
    }
}
