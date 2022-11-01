<?php

namespace App\Http\Controllers\Voyager;

use App\Jobs\StoreUserJob;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerUserController;

class VoyagerUsersController extends VoyagerUserController
{
    /**
     * POST BRE(A)D - Store data.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $response = parent::store($request);

        StoreUserJob::dispatch($request->all());

        return $response;
    }
}
