<?php

namespace Danilosaraivavicente\TesteDompdf;

require __DIR__."./../vendor/autoload.php";

use Dompdf\Dompdf;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// phpinfo();exit;

class Teste{

    static function gerar(){
        $dompdf = new Dompdf();

        // $tex = utf8_encode('danilo');
        $dompdf->loadHtml('danilo');
        // $dompdf->setPaper('A4');
        
        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser
        $dompdf->stream('document.pdf',["Attachment"=>false]);
    }
}
