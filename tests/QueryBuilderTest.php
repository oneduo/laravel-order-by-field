<?php

it('works with MySQL grammar', function () {
    $builder = getMySqlBuilder();
    $builder->select('*')->from('users')->orderByField('id', [42, 1, 1000]);

    expect($builder->toSql())->toBe('select * from `users` order by field(`id`, 42, 1, 1000)');
});
