<?php

//check menu active
function panel_check_menu_active($route = null)
{
    if (\Illuminate\Support\Facades\Request::is($route)){
        return "active";
    }
}
