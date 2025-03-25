<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class Role_Permission extends Model
{
    use HasFactory;
    protected $table = 'role_permissions';

    static public function InsertUpdateRecord($permission_ids, $role_id)
    {
        foreach ($permission_ids as $permission_id)
        {
            $data = new Role_Permission;
            $data->permission_id = $permission_id;
            $data->role_id = $role_id;
            $data->save();
        }
    }
}
