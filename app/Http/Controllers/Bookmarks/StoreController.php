<?php

namespace App\Http\Controllers\Bookmarks;
use App\Actions\Bookmarks\CreateBookmarkAndTags;
use App\Http\Controllers\Controller;
use App\Http\Requests\Bookmarks\StoreRequest;
use Illuminate\Http\RedirectResponse;
class StoreController extends Controller
{
    public function __construct(protected CreateBookmarkAndTags $action)
    {

    }

    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $this->action->handle(
            $request->all(),
            auth()->id(),
        );
        return redirect()->route('dashboard');
    }
}
