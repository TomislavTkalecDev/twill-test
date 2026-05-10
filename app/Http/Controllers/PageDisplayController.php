<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

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

    public function home()
    {
        if (TwillAppSettings::get('homepage.homepage.page')->isNotEmpty()) {
            /** @var \App\Models\Page $frontPage */
            $frontPage = TwillAppSettings::get('homepage.homepage.page')->first();
 
            if ($frontPage->published) {
                return view('site.page', ['item' => $frontPage]);
            }
        }
 
        abort(404);
        // get the first published page as homepage
        // $page = $pageRepository->published()->first();

        // if (!$page) {
        //     abort(404);
        // }

        // return view('site.page', ['item' => $page]);
    }
}
