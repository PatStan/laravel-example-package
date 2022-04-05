<?php

use PatStan\Example\Http\Controllers\MyController;

it('has a route', function () {
    $this->get(action([MyController::class, 'index']))
       ->assertOk()
       ->assertSee('ok');
});
