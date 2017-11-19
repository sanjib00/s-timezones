<?php
/**
 * Created by PhpStorm.
 * User: sanjib
 * Date: 11/19/17
 * Time: 8:48 PM
 */

namespace Sanjib\Timezones;


use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();

        return view('timezones::time', compact('current_time'));
    }
}