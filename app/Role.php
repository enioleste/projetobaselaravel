<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
   /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'roles';

	/**
	* Disable Timestamps for the table.
	*
	* @var boolean
	*/



    protected $fillable = [

        'name',
        'display_name',
        'descríption',

      ];

}