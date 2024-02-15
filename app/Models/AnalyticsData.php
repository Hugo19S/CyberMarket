<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalyticsData extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $table = 'analytics';

    protected $primaryKey = 'analytics_data_id';

    protected $fillable = [
        'page_url',
        'page_views'
    ];
}
