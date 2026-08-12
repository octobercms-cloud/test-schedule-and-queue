<?php namespace Cloud\Test\Models;

use Model;

/**
 * Tick Model
 *
 * @link https://docs.octobercms.com/4.x/extend/system/models.html
 */
class Tick extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'cloud_test_ticks';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
