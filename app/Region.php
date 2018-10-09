<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    // protected $table = 'regions'; // 設定資料表名稱
    protected $fillable = ['name'];

    /*
    ** Relationships
    */

    // 我這個(表regions) 和 對方(表artists) 的關係
    public function artists()
    {
        // 對方(表artists) 的 region_id 欄位, 會有多筆記錄參照 我這個(表regions) 的 id欄位
        // return $this->hasMany(Artist::class, 'region_id');
        return $this->hasMany(Artist::class);
    }
}
