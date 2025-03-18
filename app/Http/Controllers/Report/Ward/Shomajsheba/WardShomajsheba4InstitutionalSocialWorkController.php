<?php

namespace App\Http\Controllers\Report\Ward\Shomajsheba;

use App\Http\Controllers\Controller;
use App\Models\Report\Ward\Shomajsheba\WardShomajsheba4InstitutionalSocialWork;
use Illuminate\Http\Request;

class WardShomajsheba4InstitutionalSocialWorkController extends Controller
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
        return ward_common_get(WardShomajsheba4InstitutionalSocialWork::class);
    }

    public function store_single()
    {
        return ward_common_store($this, WardShomajsheba4InstitutionalSocialWork::class, $this->report_info);
    }

}
