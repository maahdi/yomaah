<?php
namespace Yomaah\structureBundle\Classes;

/**
 * Extension Twig pour remplir les variables pour le menu automatiquement
 *
 **/
class MenuTwigExtension extends \Twig_Extension
{
    protected $menu;

    public function __construct(\Yomaah\structureBundle\Classes\GestionMenu $menu)
    {
        $this->menu = $menu;
    }

    public function getName()
    {
        return 'menuTwigExtension';
    }

    public function getGlobals()
    {
        return $this->menu->getAllMenu();
    }
}
