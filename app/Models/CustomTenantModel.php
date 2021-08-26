<?php

namespace App\Models;

use Spatie\Multitenancy\Models\Tenant;
use Illuminate\Support\Facades\DB;

class CustomTenantModel extends Tenant
{
    public static function booted()
    {
//        parent::booted(); // TODO: Change the autogenerated stub
//        static::creating(function (CustomTenantModel $model) {
//            return $model->createDatabase();
//        });
        static::creating(fn(CustomTenantModel $model) => $model->createDatabase());
    }

    public function createDatabase()
    {
       $result = DB::create('create database tenant');

       return $result;

        //add logic to create database
    }
}
