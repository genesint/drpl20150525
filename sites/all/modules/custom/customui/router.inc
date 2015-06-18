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
        case 'basic-listing-node-form':
            $page = array(
                '#markup' => theme('basic-listing-node-form', array()),
            );
            break;
        case 'about-listing-node-form':
            $page = array(
                '#markup' => theme('about-listing-node-form', array()),
            );
            break;
        case 'about-listing-view-item':
            $page = array(
                '#markup' => theme('about-listing-view-item', array()),
            );
            break;
        case 'basic-listing-view-item':
            $page = array(
                '#markup' => theme('basic-listing-view-item', array()),
            );
            break;
        case 'location-listing-view-item':
            $page = array(
                '#markup' => theme('location-listing-view-item', array()),
            );
            break;
        case 'listing-view':
            $page = array(
                '#markup' => theme('listing-view', array()),
            );
            break;
        case 'owner-listing-list':
            $page = array(
                '#markup' => theme('owner-listing-list', array()),
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
        case 'listing-photo-gallery':
            $page = array(
                '#markup' => theme('listing-photo-gallery', array()),
            );
            break;
        case 'visitor-photo-gallery':
            $page = array(
                '#markup' => theme('visitor-photo-gallery', array()),
            );
            break;
        case 'visitor-account':
            $page = array(
                '#markup' => theme('visitor-account', array()),
            );
            break;
        case 'messages':
            $page = array(
                '#markup' => theme('messages', array()),
            );
            break;
        case 'profile':
            $page = array(
                '#markup' => theme('profile', array()),
            );
            break;
        case 'friends':
            $page = array(
                '#markup' => theme('friends', array()),
            );
            break;
        case 'places':
            $page = array(
                '#markup' => theme('places', array()),
            );
            break;
        case 'listing-video-gallery':
            $page = array(
                '#markup' => theme('listing-video-gallery', array()),
            );
            break;
        case 'visitor-video-gallery':
            $page = array(
                '#markup' => theme('visitor-video-gallery', array()),
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
