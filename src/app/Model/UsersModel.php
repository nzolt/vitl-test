<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'id' => null,
        'firstname' => '',
        'lastname' => '',
    ];

    /**
     * Fillable variable for mass assign
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'firstname' => '',
        'lastname' => '',
    ];
    protected $firstname = '';
    protected $lastname = '';

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

}
