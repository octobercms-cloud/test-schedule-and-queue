<?php namespace Cloud\Test\Jobs;

use Cloud\Test\Models\Tick;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * CreateTick Job
 */
class CreateTick implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * handle the job.
     */
    public function handle(): void
    {
        sleep(10);

        Tick::create();
    }
}
