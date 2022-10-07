<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
     * 
     * @return
     */
    public function noHaveAccess() 
    {
        return view('errors.no_have_access');
    }

    /**
     * 
     * @return
     */
    public function pageNotFound()
    {
        return view('errors.page_not_found');
    }

}
