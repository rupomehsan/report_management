<?php

namespace App\Http\Controllers\Report\Ward\DawahAndProkashona;

use App\Http\Controllers\Controller;
use App\Models\Report\Ward\DawahAndProkashona\WardDawahAndProkashona;
use Illuminate\Http\Request;

class WardDawahAndProkashonaController extends Controller
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
        return ward_common_get(WardDawahAndProkashona::class);
    }

    public function store_single()
    {
        return ward_common_store($this, WardDawahAndProkashona::class, $this->report_info);
    }

}
