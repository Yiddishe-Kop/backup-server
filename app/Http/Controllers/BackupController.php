<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\BackupServer\Models\Backup;
use Spatie\BackupServer\Models\BackupLogItem;

class BackupController extends Controller
{
    public function index()
    {
        return Backup::latest()->paginate();
    }

    public function logs(Backup $backup)
    {
        return $backup->logItems;
    }
}
