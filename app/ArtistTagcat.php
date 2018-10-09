<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistTagcat extends Model
{
    // protected $table = 'artist_tagcats'; // 設定資料表名稱
    protected $fillable = ['name'];

    /*
    ** Relationships
    */

    // 我這個(表artist_tagcats) 和 對方(表artist_tags) 的關係
    public function artistTags()
    {
        // 對方(表artist_tags) 的 artist_tagcat_id 欄位, 會有多筆記錄參照 我這個(表artist_tagcats) 的 id欄位
        // return $this->hasMany(ArtistTag::class, 'artist_tagcat_id');
        return $this->hasMany(ArtistTag::class);
    }
}
