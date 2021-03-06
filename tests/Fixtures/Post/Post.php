<?php

namespace Binaryk\LaravelRestify\Tests\Fixtures\Post;

use Binaryk\LaravelRestify\Models\Concerns\HasActionLogs;
use Binaryk\LaravelRestify\Tests\Fixtures\User\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasActionLogs;

    protected $fillable = [
        'id',
        'user_id',
        'image',
        'title',
        'description',
        'category',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
