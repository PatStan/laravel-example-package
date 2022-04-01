<?php

use PatStan\Example\Models\MyModel;

it('can return uppercased value of a name', function () {
    $myModel = MyModel::factory()->create(['name' => 'John']);

    expect($myModel->getUppercaseName())->toEqual('JOHN');
});
