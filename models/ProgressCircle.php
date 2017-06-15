<?php namespace GetRight\ProgressCircles\Models;

use Model;

/**
 * ProgressCircle Model
 */
class ProgressCircle extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'getright_progresscircles_progress_circles';

    public $rules = [
        'value' => 'required|integer|between:1,100',
        'text' => 'required|string',
        'title' => 'required|string|size:75',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'value'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * Make value decimal.
     *
     * @param $value
     */
    public function getValueAttribute($value)
    {
        return $value / 100;
    }
}
