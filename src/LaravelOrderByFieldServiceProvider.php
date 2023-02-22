<?php

namespace Oneduo\LaravelOrderByField;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Grammars\MySqlGrammar;
use RuntimeException;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelOrderByFieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-order-by-field');

        $this->registerMacros();
    }

    protected function registerMacros(): void
    {
        Grammar::macro('compileOrderField', function (string $column, array $values): string {
            throw new RuntimeException('This database engine does not support ordering by field.');
        });

        MySqlGrammar::macro('compileOrderField', function (string $column, array $values): string {
            return 'field('.$this->wrap($column).', '.implode(', ', $values).')';
        });

        Builder::macro('orderByField', function (string $column, array $values): static {
            return $this->orderByRaw($this->grammar->compileOrderField($column, $values));
        });
    }
}
