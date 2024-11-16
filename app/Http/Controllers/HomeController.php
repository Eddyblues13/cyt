<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.home');
    }
    public function markets()
    {
        return view('dashboard.markets');
    }
    public function trading()
    {
        return view('dashboard.trading');
    }
    public function orders()
    {
        return view('dashboard.orders');
    }
    public function invest()
    {
        return view('dashboard.invest');
    }
    public function wallets()
    {
        return view('dashboard.wallets');
    }
    public function panel()
    {
        return view('dashboard.panel');
    }

    public function support()
    {
        return view('dashboard.support');
    }

    public function deposit()
    {
        return view('dashboard.deposit');
    }
    public function payment()
    {
        return view('dashboard.payment');
    }

    public function depositLogs()
    {
        return view('dashboard.deposit_logs');
    }


    public function withdrawal()
    {
        return view('dashboard.withdrawal');
    }
    public function withdraw()
    {
        return view('dashboard.withdraw');
    }

    public function withdrawalLogs()
    {
        return view('dashboard.withdrawal_logs');
    }


    public function kycCenter()
    {
        return view('dashboard.kyc');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }


    public function logout()
    {
        return view('dashboard.logout');
    }
}
