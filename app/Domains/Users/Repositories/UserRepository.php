<?php

namespace Confee\Domains\Users\Repositories;

use Confee\Domains\Users\Transformers\UserTransformer;
use Confee\Domains\Users\User;
use Artesaos\Warehouse\AbstractCrudRepository;
use Confee\Domains\Users\Contracts\UserRepository as UserRepositoryContract;
use Artesaos\Warehouse\Traits\ImplementsFractal;

/**
 * Class UserRepository.
 */
class UserRepository extends AbstractCrudRepository implements UserRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass = User::class;

    protected $transformerClass = UserTransformer::class;
}
