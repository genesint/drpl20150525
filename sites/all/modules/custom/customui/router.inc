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
        case 'listing-list':
            $page = array(
                '#markup' => theme('listing-list', array()),
            );
            break;
        case 'listing-view':
            $page = array(
                '#markup' => theme('listing-view', array()),
            );
            break;
        case 'listing-owner':
            $page = array(
                '#markup' => theme('listing-owner', array()),
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
