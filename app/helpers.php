<?php

use Illuminate\Support\Facades\Route;

function changeDateFormate($date){
   return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i, Y.m.d');
}

function imagePath($image_name)
{
    return asset('storage/'.$image_name);
}
function set_active($path) {

    $current =  explode('/', Route::getFacadeRoot()->current()->uri())[1]??app()->getLocale();
    return ($current==$path) ? 'active' : null;

}

function changeLang($lang){
    $arr = Route::getFacadeRoot()->current()->uri();

    return  env("APP_URL")."/".$lang.substr($arr,2);

}
function del_element_from_array($element, $array){
    $newArr = [];
    foreach ($array as $item) {
        if ($item->id != $element)
        {
            $newArr[] = $item->id;
        }
    }


return json_encode($newArr);

}
