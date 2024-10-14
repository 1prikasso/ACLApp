<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::get()->sortBy('created_at');

        return view('pages.reports', ['reports' => $reports]);
    }

}
