<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string first_name
 * @property string last_name
 * @property string category
 * @property integer number_of_tickets
 * @property integer total_price
 * @method static paginate(mixed $limit)
 * @method static create(array $only)
 */
class Record extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'category', 'number_of_tickets', 'total_price'
    ];
}
