<?php namespace locaTEC;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	protected $primarikey = 'idcategory';
	public $timestamps=false;

	protected $fillable =[
		'name',
		'description',
		'condition'
	]

	protected $guarded =[]
}
