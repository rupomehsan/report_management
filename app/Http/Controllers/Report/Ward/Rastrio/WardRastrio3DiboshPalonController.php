<?php

namespace App\Http\Controllers\Report\Ward\Rastrio;

use App\Http\Controllers\Controller;
use App\Models\Report\Ward\Rastrio\WardRastrio3DiboshPalon;
use Illuminate\Http\Request;

class WardRastrio3DiboshPalonController extends Controller
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
        return ward_common_get(WardRastrio3DiboshPalon::class);
    }

    public function store_single()
    {
        return ward_common_store($this, WardRastrio3DiboshPalon::class, $this->report_info);
    }

}
