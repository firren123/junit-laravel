<?php
/**
 * Created by PhpStorm.
 * User: lichenjun
 * Date: 19/9/19
 * Time: 下午7:06
 */

Route::get("/",'JunitController@index');
Route::post("/",'junitController@store')->name('sjunit.store');