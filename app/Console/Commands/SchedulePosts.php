<?php

namespace App\Console\Commands;

use App\Models\Newspaper;
use Illuminate\Console\Command;

class SchedulePosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:publish'; //tên command

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $articles = Newspaper::where('status','=','1')->get();
        foreach ($articles as $item){

            // Kiểm tra các $item article nếu thời gian nhỏ hơn hoặc bằng hiện tại
            if($item->publish_date <= now()) {
                // Lưu lại
                $articles->update([
                    'status'=>3
                ]);
            }
        };
    }
}
