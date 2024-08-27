<?php

use App\Models\User;
use Filament\Facades\Filament;
use function Pest\Laravel\be;

it('returns proper dashboard url', function () {
    be(User::factory()->create());

    expect(Filament::getPanel('app')->getUrl())
        ->toBe(url('/app'));
});
