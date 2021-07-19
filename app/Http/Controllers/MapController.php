<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class MapController
 * @package App\Http\Controllers
 */

class MapController extends Controller
{
    /**
     * Display a google maps of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){

        $pageTitle = 'Google Maps';
        $pageDescription = 'Some description for the page';

        return view('maps.google_maps', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a leaflet maps of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function leafletMap(){

        $pageTitle = 'Openstreet Maps (Leaflet)';
        $pageDescription = 'Some description for the page';

        return view('maps.leaflet_maps', compact('pageTitle', 'pageDescription'));
    }

    /**
     * Display a vector maps of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function vectorMap(){

        $pageTitle = 'Vector Maps';
        $pageDescription = 'Some description for the page';

        return view('maps.vector_maps', compact('pageTitle', 'pageDescription'));
    }
}
