<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;

class IndexController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        dd('testIndex');

    }
}
