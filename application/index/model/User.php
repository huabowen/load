<?php
namespace app\index\model;
use think\Model;
class User extends Model
{
    protected $table = 'think_user';
    protected $pk = 'user_id';
}