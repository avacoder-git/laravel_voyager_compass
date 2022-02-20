<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

function changeDateFormat($date){
   Carbon::setLocale(getLocale(app()->getLocale()));
   $date = Carbon::parse($date);


   return $date->translatedFormat('F  d, Y');
}

function getLocale($lang){
    return $lang == 'uz'?'uz_Latn':'ru_RU';
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
    Session::put('locale', $lang);
    return redirect()->back();
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
