<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Lookup;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $category = ['smoothies', 'desserts', 'entrées', 'snacks', 'reviews',
      'netflix', 'music', 'sports', 'technology', 'college', 'shopping'];
      $category_count = [];
      for ($i = 0; $i < count($category); $i++) {
        $category_count[$i] = (object)['category' => $category[$i], 'count' => DB::table('lookup')->where('blog_category', $category[$i])->count()];
      }
      View::share('category_count', $category_count);
      View::share('category', $category);
      $tags = Lookup::where('category', 'tag')->select('tag')->groupBy('tag')->get();
      View::share('tags', $tags);
      $latest = Lookup::where('category', 'blog')->orderBy('date_posted', 'asc')->take(3)->get();
      View::share('latest', $latest);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
