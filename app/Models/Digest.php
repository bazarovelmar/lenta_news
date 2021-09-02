<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Digest
 * @package App\Models
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $img
 * @property int $status
 * @property int $category
 */
class Digest extends Model
{
    use HasFactory;

}
