<?php

namespace Academe\Prospectus\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;

class CourseMiddleware
{
    public function __construct()
    {
        $this->template;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        return new HtmlResponse();
    }
}
