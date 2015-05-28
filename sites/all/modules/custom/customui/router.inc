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
        case 'about':
            $page = array(
                '#markup' => theme('about', array()),
            );
            break;
        case 'location':
            $page = array(
                '#markup' => theme('location', array()),
            );
            break;
        case 'review':
            $page = array(
                '#markup' => theme('review', array()),
            );
            break;
        case 'facility':
            $page = array(
                '#markup' => theme('facility', array()),
            );
            break;
        case 'gallery':
            $page = array(
                '#markup' => theme('gallery', array()),
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
