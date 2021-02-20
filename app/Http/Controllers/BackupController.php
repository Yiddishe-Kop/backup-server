<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\BackupServer\Models\Backup;
use Spatie\BackupServer\Models\BackupLogItem;

class BackupController extends Controller
{
    public function index()
    {
        return Backup::paginate();
    }

    public function logs()
    {
        return BackupLogItem::paginate(20);
    }
}
