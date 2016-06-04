<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegionCenter extends Model {

	/**
     * Timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'to'];

}
