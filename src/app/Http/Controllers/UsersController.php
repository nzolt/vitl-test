<?php

namespace App\Http\Controllers;

use App\Data\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * List users
     */
    public function listAction(Request $request)
    {
        $users = Users::getUsers($request->terms, $request->dupes, $request->limit, $request->query());

        return view('list', ['users' => $users, 'paginator' => $users, 'terms' => $request->terms, 'limit' => $request->limit, 'dupes' => $request->dupes]);
    }
}
