<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;

class ReportController extends Controller
{

    public function report1 ($pid)
    {

        $payment = Payment ::find($pid);
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style ='margin:20px; padding:20px;'>";
        $print.="<h1 align='center'> Payment Recipt </h1>";
        $print.="<hr/>";
        $print.="<p> Recipt No:<b>".$pid."</b></p>";
        $print.="<p> Date:<b>".$payment->paid_date."</b></p>";
        $print.="<p> Entrollment No:<b>" .$payment-> enrollment_id . "</b></p>";

        $print.="<hr/>";

        $print.="<table style= 'width:100%;'>";

        $print.="<tr>";

        $print.="<td> Amount </td>";
        $print.="</tr>";

        $print.="<tr>";

        $print.="<td> <h3>" . $payment->amount. "</h3> </td>";
        $print.="</tr>";

        $print.="</table>";
        $print.="<hr/>";

        $print.="<span>Printed Date :<b>".date('y-m-d')."</b></span>";
        $print.="</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();




    }

}


?>
