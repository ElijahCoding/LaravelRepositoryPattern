<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserRepository;

class AddressController extends Controller
{
    public function index(UserRepository $users)
    {
      $users->createAddress(auth()->id(), [
        'line1' => '123 street'
      ]);
      
    }
}
