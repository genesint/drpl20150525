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
        case 'listing-view-list':
            $page = array(
                '#markup' => theme('listing-view-list', array()),
            );
            break;
        case 'listing-view-item':
            $page = array(
                '#markup' => theme('listing-view-item', array()),
            );
            break;
        case 'listing-view-item-body':
            $page = array(
                '#markup' => theme('listing-view-item-body', array()),
            );
            break;
        case 'listing-node-form-basic-info':
            $page = array(
                '#markup' => theme('listing-node-form-basic-info', array()),
            );
            break;
        case 'listing-node-form-body':
            $page = array(
                '#markup' => theme('listing-node-form-body', array()),
            );
            break;
        case 'about':
            $page = array(
                '#markup' => theme('about', array()),
            );
            break;
        case 'about-info':
            $page = array(
                '#markup' => theme('about-info', array()),
            );
            break;
        case 'basic-info':
            $page = array(
                '#markup' => theme('basic-info', array()),
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
        case 'register':
            $page = array(
                '#markup' => theme('register', array()),
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
