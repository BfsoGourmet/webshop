<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    protected $connection = 'mysql';
    protected $table = 'jobs';
}

class FailedJob extends Model {
    protected $connection = 'mysql';
    protected $table = 'failed_jobs';
}