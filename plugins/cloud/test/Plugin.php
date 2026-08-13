<?php namespace Cloud\Test;

use Cloud\Test\Jobs\CreateTick;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/4.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Test',
            'description' => 'Creates Tick records on a schedule and via queued jobs.',
            'author' => 'Cloud',
            'icon' => 'icon-clock-o'
        ];
    }

    /**
     * registerSchedule defines console schedule tasks.
     */
    public function registerSchedule($schedule)
    {
        $schedule->job(new CreateTick)->everyFiveMinutes();
    }
}
