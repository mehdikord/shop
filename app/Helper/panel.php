<?php

use Illuminate\Support\Facades\Session;

//check menu active
function panel_check_menu_active($route = null)
{
    if (\Illuminate\Support\Facades\Request::is($route)){
        return "active";
    }
}

//Create alert message in Panel
function panel_alert($message='باموفقیت انجام شد',$level='success')
{
    Session::flash('panel_alert_message',$message);
    Session::flash('panel_alert_level',$level);
}
