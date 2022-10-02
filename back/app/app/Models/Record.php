<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property string surname
 * @property string patronym
 * @property string category
 * @property integer number_of_tickets
 * @property integer total_price
 * @method static paginate(mixed $limit)
 */
class Record extends Model
{
    protected $fillable = [
        'name', 'surname', 'patrnym', 'category','number_of_tickets','total_price',
    ];
}
