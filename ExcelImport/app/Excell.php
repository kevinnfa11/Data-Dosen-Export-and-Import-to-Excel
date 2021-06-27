<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excell extends Model
{
   protected $table = 'excel';
   protected $fillable = [
   	'nama',
	'nim',
	'uts',
	'uas',
	'remidiasi',
	'nilaiAkhir'];
}
