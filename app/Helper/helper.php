<?php

//Using Facades

use Illuminate\Support\Facades\Session;


//make alert message
function front_alert_message($message='انجام شد',$level='success')
{
    Session::flash('front_alert_message_message',$message);
    Session::flash('front_alert_message_level',$level);
}

//make simple message
function front_simple_message($title='پیام سیستم',$message='',$level='success',$button='باشه')
{
    Session::flash('front_simple_message_title',$title);
    Session::flash('front_simple_message_message',$message);
    Session::flash('front_simple_message_level',$level);
    Session::flash('front_simple_message_button',$button);
}

//make alert message for admin panel
function alert_message($message='انجام شد',$level='success'){
    Session::flash('alert_message_message',$message);
    Session::flash('alert_message_level',$level);
}
