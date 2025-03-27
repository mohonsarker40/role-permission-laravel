<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Role extends Model
{
    protected $table = 'roles';
    use HasFactory;

    protected $fillable = ['name'];
    public function validate($input = [])
    {
        $validate = Validator::make($input, [
            'name' => 'required',
        ]);
        return $validate;
    }

    static public function getSingle($id)
    {
        return Role::find($id);
    }

    static public function getRecord()
    {
//        return Role::get();
        return Role::select('id', 'name')->get();

    }
}
