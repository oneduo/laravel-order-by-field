<?php

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Grammars\MySqlGrammar;
use Illuminate\Database\Query\Grammars\PostgresGrammar;
use Illuminate\Database\Query\Grammars\SqlServerGrammar;
use Illuminate\Database\Query\Processors\Processor;
use Mockery as m;
use Oneduo\LaravelOrderByField\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function getConnection($connection = null, $table = null)
{
    $connection = m::mock(ConnectionInterface::class);
    $connection->shouldReceive('getDatabaseName')->andReturn('database');

    return $connection;
}

function getPostgresBuilder(): Builder
{
    $grammar = new PostgresGrammar;
    $processor = m::mock(Processor::class);

    return new Builder(getConnection(), $grammar, $processor);
}

function getMySqlBuilder(): Builder
{
    $grammar = new MySqlGrammar;
    $processor = m::mock(Processor::class);

    return new Builder(m::mock(ConnectionInterface::class), $grammar, $processor);
}

function getSqlServerBuilder(): Builder
{
    $grammar = new SqlServerGrammar;
    $processor = m::mock(Processor::class);

    return new Builder(getConnection(), $grammar, $processor);
}
