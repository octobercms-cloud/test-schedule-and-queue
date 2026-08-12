<?php namespace Cloud\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateTicksTable Migration
 *
 * @link https://docs.octobercms.com/4.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('cloud_test_ticks', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('cloud_test_ticks');
    }
};
