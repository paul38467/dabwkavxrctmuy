<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistTag extends Model
{
    // protected $table = 'artist_tags'; // 設定資料表名稱
    protected $fillable = ['artist_tagcat_id', 'name'];

    // 我這個(表artist_tags) 和 對方(表artists) 透過 中樞pivot(表artist_artist_tag) 建立關係
    public function artists()
    {
        // 我這個 (表artist_tags) 的 id欄位 會出現多筆記錄在 中樞pivot(表artist_artist_tag) 的 artist_tag_id欄位
        // 對方 (表artists) 的 id欄位 會出現多筆記錄在 中樞pivot(表artist_artist_tag) 的 artist_id欄位
        // return $this->belongsToMany(Artist::class, 'artist_artist_tag', 'artist_tag_id', 'artist_id')->withTimestamps();
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }

    // 我這個(表artist_tags) 和 對方(表artist_tagcats) 的關係
    public function artistTagcat()
    {
        // 我這個(表artist_tags) 的 artist_tagcat_id欄位 是參照 對方(表artist_tagcats) 的 id欄位
        // return $this->belongsTo(ArtistTagcat::class, 'artist_tagcat_id');
        return $this->belongsTo(ArtistTagcat::class);
    }
}
