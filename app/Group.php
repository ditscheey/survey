<?php namespace Survey;

use Illuminate\Database\Eloquent\Model;

/**
 * Survey\Group
 *
 * @property-read \Survey\Facility $facility
 * @property-read \Illuminate\Database\Eloquent\Collection|\Survey\Child[] $children
 */
class Group extends Model {

	public function facility ()
    {
        return $this->belongsTo('Survey\Facility');
    }

    public function children ()
    {
        return $this->hasMany('Survey\Child');
    }

    public function stringType ()
    {
        switch ($this->type)
        {
            case 1:
                return 'Kindergarten';
            case 2:
                return 'Kinderkrippe';
        }
    }

}
