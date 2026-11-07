<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('see text using playwright', function () {
    $page = visit('/');

    $page->assertSee('v'.app()->version());
});
