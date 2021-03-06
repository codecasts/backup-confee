<?php

namespace Confee\Domains\Users\Transformers;

use Confee\Domains\Users\User;
use League\Fractal\TransformerAbstract as Transformer;

/**
 * Class UserTransformer.
 */
class UserTransformer extends Transformer
{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ];
    }
}
