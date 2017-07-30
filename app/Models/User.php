<?php
/**
 * Created by PhpStorm.
 * User: marcamon
 * Date: 07/10/2016
 * Time: 10:14
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App\Models
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 */
class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];

}