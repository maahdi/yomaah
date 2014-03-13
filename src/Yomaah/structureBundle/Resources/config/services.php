<?php

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;

/*

$container->setDefinition(
    'yomaah.example',
    new Definition(
        'Yomaah\structureBundle\Example',
        array(
            new Reference('service_id'),
            "plain_value",
            new Parameter('parameter_name'),
        )
    )
);


 */

$listenerLog = new Definition('Yomaah\structureBundle\Classes\SecurityListener', array(new Reference('security.context'),new Reference('router'),new Reference('event_dispatcher'),new Reference('database_connection'), new Reference('session')));
$listenerLog->addTag('kernel.event_subscriber');
$container->setDefinition('yomaah_security_listener',$listenerLog);
//,array('event' => 'security.interactive_login','method'=> 'onSecurityInteractiveLogin')


$listenerRequete = new Definition('Yomaah\structureBundle\Classes\RequeteListener',array(new Reference('database_connection'),new Reference('security.context')));
$listenerRequete->addTag('kernel.event_listener', array('event' => 'kernel.request', 'method' => 'onKernelRequest'));
$container->setDefinition('yomaah_requete_listener',$listenerRequete);

$mobileDetect = new Definition('Yomaah\structureBundle\Classes\MobileDetect',array(new Reference('session'),new Reference('request')));
$mobileDetect->addTag('kernel.event_listener', array('event' => 'kernel.request', 'method' => 'onKernelRequest'));
$container->setDefinition('mobile_detect',$mobileDetect)->setScope('request');
