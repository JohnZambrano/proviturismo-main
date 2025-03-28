<?php

namespace App\Http\Controllers\SiteMap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function index(){
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }
}
