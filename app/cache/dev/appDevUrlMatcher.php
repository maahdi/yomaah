<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // literie_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'literie_index');
            }

            return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::indexAction',  '_route' => 'literie_index',);
        }

        // literie_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::accueilAction',  '_route' => 'literie_accueil',);
        }

        // literie_marques
        if ($pathinfo === '/marques') {
            return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::marquesAction',  '_route' => 'literie_marques',);
        }

        // literie_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::contactAction',  '_route' => 'literie_contact',);
        }

        // literie_magasin
        if ($pathinfo === '/magasin') {
            return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::magasinAction',  '_route' => 'literie_magasin',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin_')) {
                // admin_literie_accueil
                if ($pathinfo === '/admin_accueil') {
                    return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::accueilAction',  '_route' => 'admin_literie_accueil',);
                }

                // admin_literie_marques
                if ($pathinfo === '/admin_marques') {
                    return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::marquesAction',  '_route' => 'admin_literie_marques',);
                }

                // admin_literie_contact
                if ($pathinfo === '/admin_contact') {
                    return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::contactAction',  '_route' => 'admin_literie_contact',);
                }

                // admin_literie_magasin
                if ($pathinfo === '/admin_magasin') {
                    return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::accueilAction',  '_route' => 'admin_literie_magasin',);
                }

            }

            // admin_literie
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::adminAction',  '_route' => 'admin_literie',);
            }

        }

        // decoadmin_literie
        if ($pathinfo === '/decoadmin') {
            return array (  '_controller' => 'EuroLiterie\\structureBundle\\Controller\\MainController::decoadminAction',  '_route' => 'decoadmin_literie',);
        }

        if (0 === strpos($pathinfo, '/ajax')) {
            // ajax
            if ($pathinfo === '/ajax') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ajax;
                }

                return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::updateArticleAction',  '_route' => 'ajax',);
            }
            not_ajax:

            // ajax_newArticle
            if ($pathinfo === '/ajax/newArticle') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ajax_newArticle;
                }

                return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getNewArticleAction',  '_route' => 'ajax_newArticle',);
            }
            not_ajax_newArticle:

            if (0 === strpos($pathinfo, '/ajax/d')) {
                // ajax_getDialog
                if ($pathinfo === '/ajax/dialog') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ajax_getDialog;
                    }

                    return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getDialogAction',  '_route' => 'ajax_getDialog',);
                }
                not_ajax_getDialog:

                // ajax_deleteArticle
                if ($pathinfo === '/ajax/deleteArticle') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ajax_deleteArticle;
                    }

                    return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::deleteArticleAction',  '_route' => 'ajax_deleteArticle',);
                }
                not_ajax_deleteArticle:

            }

            if (0 === strpos($pathinfo, '/ajax/admin')) {
                // ajax_adminInterface
                if ($pathinfo === '/ajax/adminInterface') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ajax_adminInterface;
                    }

                    return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getAdminInterfaceAction',  '_route' => 'ajax_adminInterface',);
                }
                not_ajax_adminInterface:

                if (0 === strpos($pathinfo, '/ajax/adminContent')) {
                    // ajax_getAdminContent
                    if ($pathinfo === '/ajax/adminContent') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ajax_getAdminContent;
                        }

                        return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getAdminContentAction',  '_route' => 'ajax_getAdminContent',);
                    }
                    not_ajax_getAdminContent:

                    // ajax_getAdminContentStructure
                    if ($pathinfo === '/ajax/adminContentStructure') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ajax_getAdminContentStructure;
                        }

                        return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::getAdminContentStructureAction',  '_route' => 'ajax_getAdminContentStructure',);
                    }
                    not_ajax_getAdminContentStructure:

                }

            }

            // ajax_saveElement
            if ($pathinfo === '/ajax/saveElement') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ajax_saveElement;
                }

                return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::saveElementAction',  '_route' => 'ajax_saveElement',);
            }
            not_ajax_saveElement:

            // ajax_deleteElement
            if ($pathinfo === '/ajax/deleteElement') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ajax_deleteElement;
                }

                return array (  '_controller' => 'Yomaah\\ajaxBundle\\Controller\\AjaxController::deleteElementAction',  '_route' => 'ajax_deleteElement',);
            }
            not_ajax_deleteElement:

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Yomaah\\connexionBundle\\Controller\\ConnexionController::loginAction',  '_route' => 'login',);
        }

        // admin_login
        if ($pathinfo === '/admin_login') {
            return array (  '_controller' => 'Yomaah\\connexionBundle\\Controller\\ConnexionController::loginAction',  '_route' => 'admin_login',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // cv
        if ($pathinfo === '/cv') {
            return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::cvAction',  '_route' => 'cv',);
        }

        // projet
        if ($pathinfo === '/projets') {
            return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::projetAction',  '_route' => 'projet',);
        }

        // espace_client
        if ($pathinfo === '/espace_client') {
            return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::espaceClientAction',  '_route' => 'espace_client',);
        }

        if (0 === strpos($pathinfo, '/code_source')) {
            // code_source
            if (preg_match('#^/code_source/(?P<path>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'code_source')), array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::codeSourceAction',));
            }

            // code_source_git
            if ($pathinfo === '/code_source_git') {
                return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::codeSourceGitAction',  '_route' => 'code_source_git',);
            }

        }

        if (0 === strpos($pathinfo, '/admin_')) {
            // admin_yomaah_homepage
            if ($pathinfo === '/admin_homepage') {
                return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::indexAction',  '_route' => 'admin_yomaah_homepage',);
            }

            // admin_cv
            if ($pathinfo === '/admin_cv') {
                return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::cvAction',  '_route' => 'admin_cv',);
            }

            // admin_projet
            if ($pathinfo === '/admin_projets') {
                return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::projetAction',  '_route' => 'admin_projet',);
            }

            if (0 === strpos($pathinfo, '/admin_code_source')) {
                // admin_code_source
                if (preg_match('#^/admin_code_source/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_code_source')), array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::codeSourceAction',));
                }

                // admin_code_source_git
                if ($pathinfo === '/admin_code_source_git') {
                    return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::codeSourceGitAction',  '_route' => 'admin_code_source_git',);
                }

            }

        }

        // test_accueil
        if ($pathinfo === '/test/test_accueil') {
            return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\TestController::accueilAction',  '_route' => 'test_accueil',);
        }

        // post_log
        if ($pathinfo === '/post_log') {
            return array (  '_controller' => 'Yomaah\\structureBundle\\Controller\\MainController::postLogoutAction',  '_route' => 'post_log',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
