<?php


namespace App\Data;

use App\Model\UsersModel;

class Users
{
    /**
     * @return UsersModel[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getAllUsers()
    {
        $users = UsersModel::all('firstname','lastname');
        return $users;
    }

    public static function getUsers(
        $terms = '', $dupes = '', $limit = 100, $query = [])
    {
        $projections = ['firstname','lastname'];

        if(!$limit){
            $limit = 100;
        }

        if($terms && !$dupes) {
            $users = UsersModel::where([
                ['firstname', '=', $terms]
            ])
                ->orderBy('lastname', 'ASC')
                ->paginate($limit, $projections)
                ->appends($query);
        }
        if($terms && $dupes) {
            $users = UsersModel::where([
                ['firstname', '=', $terms]
            ])
                ->orderBy('lastname', 'ASC')
                ->distinct('firstname','lastname')
                ->paginate($limit, $projections)
                ->appends($query);
        }
        if(!$terms && $dupes){
            $users = UsersModel::orderBy('lastname', 'ASC')
                ->distinct('firstname','lastname')
                ->paginate($limit, $projections)
                ->appends($query);
        }
        if(!$terms && !$dupes){
            $users = UsersModel::orderBy('lastname', 'ASC')
                ->paginate($limit, $projections)
                ->appends($query);
        }

        return $users;
    }
}
