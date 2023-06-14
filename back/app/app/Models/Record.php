<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string first_name
 * @property string last_name
 * @property integer category_id
 * @property integer number_of_tickets
 * @property integer total_price
 */
class Record extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'category_id', 'number_of_tickets', 'total_price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
