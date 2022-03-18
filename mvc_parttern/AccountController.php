<?php

namespace App\Http\Controllers;

use App\Models\Account;

class AccountController extends Controller
{
    protected $account;

    public function __construct(Account $account) {
        $this->account = $account;
    }

    public function index()
    {
        $account = $this->account->getAllAccount();
        return view('index', $account);
    }
}