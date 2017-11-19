<?php
/**
 * Created by PhpStorm.
 * User: sanjib
 * Date: 11/19/17
 * Time: 8:51 PM
 */

Route::get('timezones/{timezone?}','sanjib\timezones\TimezonesController@index');