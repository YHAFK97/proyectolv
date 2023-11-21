<?php

namespace App\Http\Controllers;

use App\Models\Livechat;
use Illuminate\Http\Request;

class LivechatController extends Controller
{
    public function index()
    {
        return view('livechat.index');
    }
}