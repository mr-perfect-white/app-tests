<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{  public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to McWare Technologies',
            'date' => date('Y-m-d'),
            'content' => 'This is a sample PDF generated from HTML.'
        ];

        $pdf = Pdf::loadView('posts.pdf', $data);
        return $pdf->download('document.pdf'); // or use ->stream() to view in browser
    }
}
