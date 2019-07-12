<?php


    function isActiveRoute($route, $output = 'active')
    {


        if (Request::segment(1) == $route) {
            return $output;
        }
    }
