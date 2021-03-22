<?php
namespace Tests\Feature;

use Tests\Testcase;


class TestRouteValidation extends TestCase
{

    function testCguRoute()
    {
        $response = $this->call('GET', '/cgu')->assertStatus(200);

        $response->assertSuccessful();
        $response->assertViewIs('cgu');
    }

    function testLogoutRoute()
    {
        $response = $this->call('GET', '/logout')->assertStatus(200);
    
        $response->assertSuccessful();
        $response->assertViewIs('logout');
    }

    function testMentionsRoute()
    {
        $response = $this->call('GET', '/mentions')->assertStatus(200);
    
        $response->assertSuccessful();
        $response->assertViewIs('mentions');
    }

    function testConfidentialiteRoute()
    {
        $response = $this->call('GET', '/confidentialite')->assertStatus(200);
    
        $response->assertSuccessful();
        $response->assertViewIs('confidentialite');
    }

}