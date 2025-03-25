<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Permission extends Model
{
    protected $table = 'permissions';
    use HasFactory;

    static public function getSingle($id)
    {
        return Role::find($id);
    }

    static public function getRecord()
    {
        $getPermission = Permission::groupBy('group_by')->get();
        $result = array();
        foreach ($getPermission as $value) {
            $getPermissionGroup = Permission::getPermissionGroup($value->group_by);
            $data = array();
            $data['id'] = $value->id;
            $data['name'] = $value->name;
            $group = array();
            foreach ($getPermissionGroup as $valueG){
                $datG = array();
                $datG['id'] = $valueG->id;
                $datG['name'] = $valueG->name;
                $group[] = $datG;
            }
            $data['group'] = $group;
            $result[] = $data;
        }
        return $result;
    }

    static public function getPermissionGroup($group_by)
    {
        return Permission::where('group_by', '=', $group_by)->get();
    }
}
