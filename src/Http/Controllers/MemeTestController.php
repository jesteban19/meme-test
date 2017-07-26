<?php
/**
 * Created by PhpStorm.
 * User: Joseph
 * Date: 26/07/2017
 * Time: 3:11 PM
 */

namespace Jesteban19\MemeTest\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemeTestController extends Controller
{
    public function test()
    {
        return "test";
    }
}