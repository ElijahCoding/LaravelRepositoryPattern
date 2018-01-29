<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepository;
use App\Repositories\Contracts\TopicRepository;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    protected $topics;

    protected $users;

    public function __construct(TopicRepository $topics, UserRepository $users)
    {
      $this->topics = $topics;
      $this->users = $users;
      // dd($this->topics, $this->users);
    }

    public function index()
    {
      $topics = $this->topics->all();

      // $topics = $this->topics->all();

      dd($topics);
    }
}
