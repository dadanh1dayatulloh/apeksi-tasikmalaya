<?php

namespace App\Http\Controllers;

use App\Data\SiteData;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['data' => SiteData::all()]);
    }

    public function destinations()
    {
        return view('pages.destinations', ['items' => SiteData::destinations()]);
    }

    public function destinationShow(string $slug)
    {
        $item = collect(SiteData::destinations())->firstWhere('slug', $slug);
        abort_if(! $item, 404);

        return view('pages.destination-show', ['item' => $item]);
    }

    public function culture()
    {
        return view('pages.culture', ['items' => SiteData::culture()]);
    }

    public function culinary()
    {
        return view('pages.culinary', ['items' => SiteData::culinary()]);
    }

    public function map()
    {
        return view('pages.map', ['markers' => SiteData::markers()]);
    }

    public function gallery()
    {
        return view('pages.gallery', ['items' => SiteData::gallery()]);
    }
}
