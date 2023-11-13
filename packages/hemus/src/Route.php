<?php

class Route
{
    public function __construct(
        public readonly string $pattern,
//        public readonly callable $callable
    )
    {
    }
}