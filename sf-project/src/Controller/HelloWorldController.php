<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloWorldController
{
    public function index()
    {
        return new Response(
            '<html><body>Hello world, it my first use of symfony</body></html>'
        );
    }
}
