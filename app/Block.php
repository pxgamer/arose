<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Block
 *
 * @property-read string $id
 * @property-read string $generator
 * @property-read int    $height
 * @property-read Carbon $date
 * @property-read string $nonce
 * @property-read string $signature
 * @property-read string $difficulty
 * @property-read string $argon
 * @property-read int    $transactions
 */
class Block extends Model
{
    /** @var array */
    protected $casts = [
        'height' => 'int',
        'date' => 'date',
        'transactions' => 'int',
    ];
}
