<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AddressRepository;

class AddressController extends Controller
{
    public function index(AddressRepository $addresses)
    {
      dd($addresses);
    }
}
