<?php

namespace App\Models;
use CodeIgniter\Model;
Class DataDiri extends Model
{
	protected $table = 'datadiri';
	protected $primaryKey = 'npm';
	protected $allowedFields = ['npm', 'nama', 'jenis_kelamin', 'alamat', 'gol_darah', 'agama', 'email', 'notlp', 'hobi', 'pengalaman1', 'pengalaman2', 'tk', 'sd', 'smp', 'sma', 'kuliah'];
}