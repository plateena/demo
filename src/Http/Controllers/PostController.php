<?php

namespace Plateena\Demo\Http\Controllers;

use Illuminate\Http\Request;
use Plateena\Demo\Models\Post;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * Class PostControllers
 * @author yourname
 */
class PostController extends Controller
{
    
    public function index(Request $request)
    {
        return QueryBuilder::for(Post::query())->allowedFilters([
            AllowedFilter::exact('id'),
        ])->get();
    }
}
