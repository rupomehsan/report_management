<?php

namespace App\Http\Controllers\Report\Ward\Songothon;

use App\Http\Controllers\Controller;
use App\Models\Report\Ward\Songothon\WardSongothon9SangothonikBoithok;
use Illuminate\Http\Request;

class WardSongothon9SangothonikBoithokController extends Controller
{
    protected $report_info = false;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->init();
            return $next($request);
        });
    }

    public function init()
    {
        $this->report_info = check_and_get_ward_info(auth()->user()->id);
    }

    public function get_data()
    {
        return ward_common_get(WardSongothon9SangothonikBoithok::class);
    }

    public function store_single()
    {
        return ward_common_store($this, WardSongothon9SangothonikBoithok::class, $this->report_info);
    }

}
