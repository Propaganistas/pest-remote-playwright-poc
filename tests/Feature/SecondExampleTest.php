<?php

test('see text using playwright', function () {
    $page = visit('/');

    $page->assertSee('v'.app()->version());
});

test('see text using playwright duplicate', function () {
    $page = visit('/');

    $page->assertSee('changelog');
});
