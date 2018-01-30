<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepository;
use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Eloquent\Criteria\EagerLoad;
use App\Repositories\Eloquent\Criteria\LatestFirst;
use App\Repositories\Eloquent\Criteria\IsLive;
use App\Repositories\Eloquent\Criteria\ByUser;
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
      $topics = $this->topics->withCriteria([
        new LatestFirst(),
        new IsLive(),
        new ByUser(auth()->id()),
        new EagerLoad(['posts', 'posts.user'])
      ])->paginate();

      // $topics->load(['posts', 'posts.user']); Better to make a Criterion

      return view('topics.index', compact('topics'));
    }

    public function show($slug)
    {
      $topic = $this->topics->withCriteria(new EagerLoad(['posts.user']))->findBySlug($slug);

      // if (!$topic) {
      //   return abort(404);
      // }

      return view('topics.show', compact('topic'));
    }
}
