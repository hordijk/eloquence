<?php
namespace Tests\Acceptance\Models;

use Eloquence\Behaviours\CountCache\CountCache;
use Eloquence\Database\Traits\CamelCasing;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model implements CountCache
{
    use CamelCasing;

    public function countCaches()
    {
        return [
            'Tests\Acceptance\Models\Post',
            'Tests\Acceptance\Models\User',
        ];
    }
}
