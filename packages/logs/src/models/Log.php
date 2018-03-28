<?php

namespace voidnoble\Logs\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * @var string
     */
    protected $table = "logs";

    protected $fillable = ['ip', 'user_agent', 'referrer'];
}
