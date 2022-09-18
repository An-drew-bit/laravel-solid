<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory, View};

class OrderReportController extends Controller
{
    public function index(Order $order, string $format = 'html'): Application|Factory|View
    {
        if ($format == 'pdf') {
            return $this->downloadReportPdf();
        }

        if ($format == 'csv') {
            return $this->downloadReportCsv();
        }

        if ($format == 'xls') {
            return $this->downloadReportXls();
        }

        if ($format == 'html') {
            return view('orders.report', compact($order));
        }
    }

    private function downloadReportPdf()
    {

    }

    private function downloadReportCsv()
    {

    }

    private function downloadReportXls()
    {

    }
}
