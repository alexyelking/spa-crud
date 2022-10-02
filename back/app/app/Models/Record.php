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
 * @method static create(array $only)
 */
class Record extends Model
{
    protected $fillable = [
        'name', 'surname', 'patronym', 'category','number_of_tickets',
    ];
}
