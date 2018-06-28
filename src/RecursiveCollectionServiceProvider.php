<?php

namespace Daikazu\Laravel;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class RecursiveCollectionServiceProvider extends ServiceProvider
{
    public function register()
    {
        Collection::macro('recursive', function () {
            return $this->map(function ($val) {
                if (is_array($val)) {
                    return (new Collection($val))->recursive();
                }

                return $val;
            });
        });
    }
}
