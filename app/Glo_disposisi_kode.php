<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glo_disposisi_kode extends Model
{
    protected $connection = 'sqlsrv2';
	protected $table = "glo_disposisi_kode";

	public $timestamps = false;
}
