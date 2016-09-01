<?php

namespace Confee\Domains\Users\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use Confee\Domains\Users\Database\Factories\UserFactory;
use Confee\Domains\Users\Database\Migrations\CreateUsersTable;
use Confee\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use Confee\Domains\Users\Database\Seeders\UsersSeeder;
use Confee\Domains\Users\Contracts;
use Confee\Domains\Users\Repositories;

/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'users';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\UserRepository::class => Repositories\UserRepository::class,
    ];

    protected $migrations = [
        CreateUsersTable::class,
        CreatePasswordResetsTable::class,
    ];

    protected $seeders = [
        UsersSeeder::class,
    ];

    protected $factories = [
        UserFactory::class,
    ];
}
