<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Lapangan;
use App\Models\Transaction;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $data = [
            'customerCount' => User::where('email', 'NOT LIKE', '%admin%')->count(),
            'lapanganCount' => Lapangan::count(),
            'transactionCount' => Transaction::count(),
        ];

        return view('admin.dashboard', $data);
    }
} 