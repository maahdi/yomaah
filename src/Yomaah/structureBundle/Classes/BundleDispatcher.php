<?php
namespace Yomaah\structureBundle\Classes;


use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Session\Session;
/**
 * Possibilité ajout test si une fonction existe dans les controllers
 */
class BundleDispatcher
{
    /**
     * Liste des controllers avec leurs bundles
     */
    private $controllers;

    /**
     * Nom du dossier ou se situent les bundles du site
     */
    private $sitePath;
    private $site;
    private $deployed;
    private $admin;
    private $secure;
    private $idSite;
    private $session;

    public function __construct(SecurityContextInterface $secure, Session $session)
    {
        /**
         * changer en prod
         * $this->site = 'site';
         * $this->deployed = true;
         */
        $this->site = 'literie';
        $this->deployed = true;

        $this->session = $session;
        $this->secure = $secure;
        $this->idSite = null;
        $this->admin = false;
        if ($secure->getToken() != null)
        {
            $user = $secure->getToken()->getUser();
            if ($this->deployed)
            {
                if ($secure->isGranted('ROLE_ADMIN'))
                {
                    $this->admin = true;
                }
            }else
            {
                
                if ($this->session->has('idSite') && $this->session->has('site'))
                {
                    $this->idSite = $this->session->get('idSite');
                    $this->site = $this->session->get('site');
                }
                if ($this->secure->isGranted('SUPER_ROLE_ADMIN'))
                {
                    if ($this->session->has('siteAdmin') && $this->session->has('zoneAdmin'))
                    {
                        if ($this->session->get('siteAdmin') && $this->session->get('zoneAdmin'))
                        {
                            $this->admin = true;
                        }
                    }
                    
                }else if ($this->secure->isGranted('ROLE_ADMIN'))
                {
                    if ($this->session->has('zoneAdmin'))
                    {
                        $this->admin = true;
                    }
                }
            }
        }
        //var_dump($this->isAdmin());
        //var_dump($this->getSite());
        $this->controllers = $this->constructControllers();
        $this->sitePath = $this->constructSitePath();
    }
    public function isAuthenticated()
    {
        if ($this->secure->getToken() != null)
        {
            if ($this->secure->getToken()->isAuthenticated())
            {
                if ($this->secure->isGranted('ROLE_USER'))
                {
                    return true;
                }else
                {
                    return false;
                }
            }
        }else
        {
            return false;
        }
    }

    public function isSuperAdmin()
    {
        if ($this->session->has('siteAdmin'))
        {
            if ($this->session->get('siteAdmin'))
            {
                return true;
            }else
            {
                return false;
            }
        }else
            {
                return false;
            }
    }

    public function setAdmin()
    {
        if ($this->admin)
        {
            $this->admin = false;
        }else
        {
            $this->admin = true;
        }
    }

    public function setFromAdmin()
    {
        if ($this->session->has('siteAdmin') === false)
        {
            $this->session->set('siteAdmin', true);
        }
    }

    public function unsetSite()
    {
        $this->site = 'yomaah';
        $this->idSite = null;
        if ($this->session->has('site') && $this->session->has('idSite') && $this->session->has('siteAdmin'))
        {
            $this->session->remove('site');
            $this->session->remove('idSite');
            $this->session->remove('siteAdmin');
        }
    }
    public function getSite()
    {
        return $this->site;
    }

    public function getIdSite()
    {
        if ($this->deployed)
        {
            return false;
        }else
        {
            return $this->idSite;
        }
    }

    public function setSite($site)
    {
        $this->site = $site;
        if ($this->session->has('site') === false)
        {
            $this->session->set('site', $site);
        }
        return $this;
    }

    public function setIdSite($idSite)
    {
        $this->idSite = $idSite;
        if ($this->session->has('idSite') === false)
        {
            $this->session->set('idSite', $idSite);
        }
    }

    public function testException()
    {
        if ($this->secure->getToken() == null)
        {
            return true;
        }else
        {
            return false;
        }
    }

    /**
     * Controller a appeler en fonction du site
     * Possibilité de diviser avec un sous-tableau
     * Si séparation en plusieurs controllers
     * (actuellement utilisé juste pour les méthodes ajax)
     */
    private function constructControllers()
    {
        $controllers['literie'] = 'structureBundle';
        $controllers['yomaah'] = 'structureBundle';
        return $controllers;
    }

    private function constructSitePath()
    {
        $sitePath['literie'] = 'EuroLiterie';
        $sitePath['yomaah'] = 'Yomaah';
        return $sitePath;
    }

    public function getDeployed()
    {
        return $this->deployed;
    }

    public function isAdmin()
    {
        return $this->admin;
    }

    private function test()
    {
        if (array_key_exists($this->site, $this->sitePath) && array_key_exists($this->site, $this->sitePath)
            && $this->isClientSite())
        {
            return true;
        }else
        {
            return false;
        }
    }

    public function getSitePath()
    {
        return $this->sitePath[$this->site];
    }



    public function isTestSite()
    {
        if ($this->site == 'test')
        {
            return true;
        }else
        {
            return false;
        }
    }

    public function isClientSite()
    {
        if ($this->site == 'yomaah')
        {
            return false;
        }else if ($this->site != 'test')
        {
            return true;
        }else
        {
            return null;
        }
    }
    public function getControllers()
    {
        return $this->controllers[$this->site];
    }

    public function getControllerPath()
    {
        if ($this->test())
        {
            return $this->getSitePath().$this->getControllers().':';
        }else
        {
            return false;
        }
    }


}
