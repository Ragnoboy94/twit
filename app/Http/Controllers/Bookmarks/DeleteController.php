<?php

namespace App\Http\Controllers\Bookmarks;

use App\Models\Bookmark;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeleteController
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Bookmark $bookmark): RedirectResponse
    {
       $bookmark->delete();
       return redirect()->route('dashboard');
    }
}
