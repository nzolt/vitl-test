<?php

namespace App\Http\Controllers;

use App\Data\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Class UsersApiController
 * @package App\Http\Controllers
 */
class UsersApiController extends Controller
{
    /**
     * List users
     */
    public function listAction(Request $request)
    {
        return Users::getUsers($request->terms, $request->dupes, $request->limit, $request->query());
    }

    /**
     * List users
     */
    public function listAllAction()
    {
        return Users::getAllUsers();
    }
}
