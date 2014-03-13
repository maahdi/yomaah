<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'literie_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'literie_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),),
        'literie_marques' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::marquesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/marques',    ),  ),  4 =>   array (  ),),
        'literie_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'literie_magasin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::magasinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasin',    ),  ),  4 =>   array (  ),),
        'admin_literie_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_accueil',    ),  ),  4 =>   array (  ),),
        'admin_literie_marques' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::marquesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_marques',    ),  ),  4 =>   array (  ),),
        'admin_literie_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_contact',    ),  ),  4 =>   array (  ),),
        'admin_literie_magasin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_magasin',    ),  ),  4 =>   array (  ),),
        'admin_literie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'decoadmin_literie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::decoadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/decoadmin',    ),  ),  4 =>   array (  ),),
        'ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::updateArticleAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax',    ),  ),  4 =>   array (  ),),
        'ajax_newArticle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getNewArticleAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/newArticle',    ),  ),  4 =>   array (  ),),
        'ajax_getDialog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getDialogAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/dialog',    ),  ),  4 =>   array (  ),),
        'ajax_deleteArticle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::deleteArticleAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/deleteArticle',    ),  ),  4 =>   array (  ),),
        'ajax_adminInterface' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getAdminInterfaceAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/adminInterface',    ),  ),  4 =>   array (  ),),
        'ajax_getAdminContent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getAdminContentAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/adminContent',    ),  ),  4 =>   array (  ),),
        'ajax_getAdminContentStructure' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getAdminContentStructureAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/adminContentStructure',    ),  ),  4 =>   array (  ),),
        'ajax_saveElement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::saveElementAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/saveElement',    ),  ),  4 =>   array (  ),),
        'ajax_deleteElement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::deleteElementAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/deleteElement',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\connexionBundle\\Controller\\ConnexionController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\connexionBundle\\Controller\\ConnexionController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'cv' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::cvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cv',    ),  ),  4 =>   array (  ),),
        'projet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::projetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projets',    ),  ),  4 =>   array (  ),),
        'espace_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::espaceClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/espace_client',    ),  ),  4 =>   array (  ),),
        'code_source' => array (  0 =>   array (    0 => 'path',  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::codeSourceAction',  ),  2 =>   array (    'path' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    1 =>     array (      0 => 'text',      1 => '/code_source',    ),  ),  4 =>   array (  ),),
        'code_source_git' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::codeSourceGitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/code_source_git',    ),  ),  4 =>   array (  ),),
        'admin_yomaah_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_homepage',    ),  ),  4 =>   array (  ),),
        'admin_cv' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::cvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_cv',    ),  ),  4 =>   array (  ),),
        'admin_projet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::projetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_projets',    ),  ),  4 =>   array (  ),),
        'admin_code_source' => array (  0 =>   array (    0 => 'path',  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::codeSourceAction',  ),  2 =>   array (    'path' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    1 =>     array (      0 => 'text',      1 => '/admin_code_source',    ),  ),  4 =>   array (  ),),
        'admin_code_source_git' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::codeSourceGitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_code_source_git',    ),  ),  4 =>   array (  ),),
        'test_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\TestController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test/test_accueil',    ),  ),  4 =>   array (  ),),
        'post_log' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::postLogoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post_log',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
