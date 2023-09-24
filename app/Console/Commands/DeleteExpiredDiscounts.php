<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteExpiredDiscounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'discounts:delete-expired';
    protected $description = 'Süresi dolan indirimleri siler.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = now();
        Discount::where('end_date', '<', $now)->delete();
        
        $this->info('Vaxtı keçmiş endirimlər uğurla silindi.');
    }
}
