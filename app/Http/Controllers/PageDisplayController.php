<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use Illuminate\Http\Request;

class PageDisplayController extends Controller
{
    public function show(PageRepository $pageRepository, string $slug)
    {
        $page = $pageRepository->forSlug($slug);

        if (!$page) {
            abort(404);
        }

        return view('site.page', ['item' => $page]);
    }

    public function home(PageRepository $pageRepository)
    {
        // get the first published page as homepage
        $page = $pageRepository->published()->first();

        //dd($page);
        if (!$page) {
            abort(404);
        }

        return view('site.page', ['item' => $page]);
    }
}
