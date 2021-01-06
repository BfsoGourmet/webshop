<?php

namespace App\Jobs;

use App\Events\PriceReduction;
use App\Http\Requests\RebateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ApplyRebate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $request;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $category = Category::with('products')->whereIn('id', $this->request['categories'])->first();
        $category->products->each(function ($product) {
            $product->special_price = $product->price / 100 * (100 - $this->request['percent']);
            $product->save();
        });
    }
}
