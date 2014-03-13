<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('post_log',new Route('/post_log', array(
    '_controller' => 'yomaahBundle:Main:postLogout',)
));
return $collection;
