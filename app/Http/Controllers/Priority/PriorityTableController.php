<?php

namespace App\Http\Controllers\Priority;

use App\Http\Controllers\Controller;
use App\Tables\Builders\PriorityTable;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class PriorityTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = PriorityTable::class;
}
