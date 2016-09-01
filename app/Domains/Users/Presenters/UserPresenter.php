<?php

namespace Confee\Domains\Users\Presenters;

use Codecasts\Presenter\Presenter;
use Illuminate\Support\Str;

/**
 * Class UserPresenter.
 */
class UserPresenter extends Presenter
{
    public function normalizedName()
    {
        return ucwords(Str::lower($this->entity->name));
    }
}
