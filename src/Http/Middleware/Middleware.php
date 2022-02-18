<?php

namespace VIRUS\Framework\Http\Middleware;

interface Middleware
{
    function before(): void;
}