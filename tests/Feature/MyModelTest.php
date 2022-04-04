<?php

use PatStan\Example\Models\MyModel;

it('can return uppercased value of a name', function () {
    $myModel = MyModel::factory()->create(['name' => 'John']);

    expect($myModel->getUppercaseName())->toEqual('JOHN');
});

it('can use json queries', function () {
    $models = DB::table('my_models')
        ->whereJsonContains('options->languages', 'en')
        ->get();

    expect($models)->toHaveCount(0);
});
