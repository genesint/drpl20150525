<?php

function router()
{
    $path = request_path();
    switch ($path) {
        case 'welcome':
            $page = array(
                '#markup' => theme('welcome', array()),
            );
            break;
        case '':
            $page = array(
                '#markup' => theme('welcome', array()),
            );
            break;
        case 'listings':
            $page = array(
                '#markup' => theme('listings', array()),
            );
            break;
        case 'listing':
            $page = array(
                '#markup' => theme('listing', array()),
            );
            break;
        case 'search':
            $page = array(
                '#markup' => theme('search', array()),
            );
            break;
        case 'categories':
            $page = array(
                '#markup' => theme('categories', array()),
            );
            break;
        default:
            $page = array(
                '#markup' => "<div>Hello, world</div>",
            );
            break;
    }

    return $page;
}
