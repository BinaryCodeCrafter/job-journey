<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Job;

class TagController extends Controller
{
    public function __invoke(Tag $tag){
        $jobs = $tag->jobs;
        return view('results' , ["jobs" => $jobs]);
    }
}