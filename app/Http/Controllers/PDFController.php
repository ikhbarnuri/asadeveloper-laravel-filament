<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function download()
    {
        $users = User::all();

        $data = [
            'title' => 'Asa Developer',
            'date' => date('m/d/y'),
            'users' => $users
        ];

        $pdf = Pdf::loadView('user.pdf', $data);

        return $pdf->download('asadeveloper.pdf');
    }

    public function downloadUser(User $user)
    {
        $data = [
            'title' => 'Asa Developer',
            'date' => date('m/d/y'),
            'users' => [$user]
        ];

        $pdf = Pdf::loadView('user.pdf', $data);

        return $pdf->download('asadeveloper.pdf');
    }
}
