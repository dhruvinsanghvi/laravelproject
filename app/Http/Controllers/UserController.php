<?php

/**
 * The class for Authenticate JWT client request authentication token
 *
 * @author dhruvin
 * @package Api
 * @since 1.0
 */

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use View;


class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getProfile()
    {
        $actions = DB::table('registration')->select('*')->get();
        //return view('userprofile', ['actions' => $actions]);
        return View::make('userprofile')->with('actions', $actions);


             
    }
}
?>