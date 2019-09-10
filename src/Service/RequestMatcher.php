<?php

namespace App\Service;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestMatcherInterface;

/**
 * Created by PhpStorm.
 * User: amine
 * Date: 11/09/2019
 * Time: 00:24
 */
class RequestMatcher implements RequestMatcherInterface
{

    public function __construct(string $test)
    {
        var_dump($test);die();
    }

    public function matches(Request $request)
    {
        return false;
    }
}