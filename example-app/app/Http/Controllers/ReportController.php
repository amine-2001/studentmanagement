<?php
namespace App\Http\Controllers;
use App\Models\Payment;
use Auth;
use App;






class ReportController extends Controller
{
    public function report1($pid)
{
    $payment = Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin:20px; padding:20px;'>";
    $print .= "<h1 style='text-align:center'> Payment Receipt </h1>";
    $print .= "<h2>";
    $print .= "<p> Receipt No : <b>" . $pid . " </b></p>";
    $print .= "<p> Date : <b>" . $payment->paid_date . " </b></p>";
    $print .= "<p> Enrollment No : <b>" . $payment->enrollement->enroll_no . " </b></p>";
    $print .= "<p> Student Name : <b>" . $payment->enrollement->student->name . " </b></p>";
    $print .= "</h2>";

    $print .= "<hr>";
    $print .= "<table style='width: 100%;'>";
    $print .= "<tr>";
    $print .= "<td>Batch</td>";
    $print .= "<td>Amount</td>";
    $print .= "</tr>";

    $print .= "<tr>";
    $print .= "<td><h3>" . $payment->enrollement->batch->name . "</h3></td>";
    $print .= "<td><h3>" . $payment->amount . "</h3></td>";
    $print .= "</tr>";
    $print .= "</table>";

    $print .= "<hr>";
    
    $print .= "<span> Printed Date: <b>" . date('Y-m-d') . " </b></span>";
    $print .= "</div>";
    
    $pdf->loadHTML($print);
    return $pdf->stream();
}
}