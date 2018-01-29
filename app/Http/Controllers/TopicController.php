<?php

namespace App\Http\Controllers;

use App\Topic;
use App\Repositories\Contracts\TopicRepository;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    protected $topics;

    public function __construct(TopicRepository $topics)
    {
      $this->topics = $topics;
    }

    public function index()
    {
      $topics = $this->topics->all();

      dd($topics);
    }
}
