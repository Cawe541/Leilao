<?php

it('has Login page', function () {
    $response = $this->get('/login');
    $response->assertStatus(200);
});
