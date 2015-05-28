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
        case 'listing-view':
            $page = array(
                '#markup' => theme('listing-view', array()),
            );
            break;
        case 'view-listing':
            $page = array(
                '#markup' => theme('view-listing', array()),
            );
            break;
        case 'profile':
            $page = array(
                '#markup' => theme('profile', array()),
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
