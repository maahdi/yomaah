<?php

namespace Yomaah\structureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PageRepo
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PageRepo extends EntityRepository
{
    public function findPage($idSite = null)
    {
        if ($idSite === null)
        {
            $query = $this->getEntityManager()
                ->createQuery('select p from yomaahBundle:Page p where p.site is null');
        }else if ($idSite === false)
        {
            $query = $this->getEntityManager()
                ->createQuery('select p from yomaahBundle:Page p');
        }else
        {
            $query = $this->getEntityManager()
                ->createQuery('select p from yomaahBundle:Page p where p.site = :site')
                ->setParameter('site', $idSite);
        }
        return $query->getResult();
    }

    public function findPageByUrl(Array $search)
    {
        if ($search['idSite'] === null)
        {
            /**
             * Quand on est sur le site principal
             */
            $query = $this->getEntityManager()
                ->createQuery('select p from yomaahBundle:Page p where p.pageUrl = :url and p.site is null')
                ->setParameter('url',$search['pageUrl']);
        
        }else if ($search['idSite'] === false)
        {
            /**
             * Quand en prod sur le site client
             */
            $query = $this->getEntityManager()
                ->createQuery('select p from yomaahBundle:Page p where p.pageUrl = :url')
                ->setParameter('url',$search['pageUrl']);
        }else
        {
            /**
             * quand sur le site principal dans le site d'un client
             */
            $query = $this->getEntityManager()
                ->createQuery('select p from yomaahBundle:Page p join p.site s where p.pageUrl = :url and s.idSite = :site')
                ->setParameters(array('url' => $search['pageUrl'],'site' => $search['idSite']));
        }
        return $query->getSingleResult();
    }

    public function findKeywords($pageUrl, $site = null)
    {
        if ($site === null)
        {
            $query = $this->getEntityManager()
                ->createQuery('select p.keywords from yomaahBundle:Page p where p.pageUrl = :url and p.site is null')
                ->setParameter('url', $pageUrl);

        }else if ($site === false)
        {
            $query = $this->getEntityManager()
                ->createQuery('select p.keywords from yomaahBundle:Page p where p.pageUrl = :url')
                ->setParameter('url', $pageUrl);
        }else
        {
            $query = $this->getEntityManager()
                ->createQuery('select p.keywords from yomaahBundle:Page p where p.pageUrl = :url and p.site = :site')
                ->setParameters(array('url' => $pageUrl, 'site' => $site));
        }
        $keywords = $query->getSingleResult();
        if (strlen($keywords['keywords']) == 0)
        {
            return array('keywords' => false);
        }else
        {
            return $keywords;
        }
    }

    public function getHtml($url)
    {
        return '<div class="page admin-c border">
                    <input type="hidden" name="id" value="%pageId%" />
                    <section class="contentPage">
                            <h2>Page : %position%</h2>
                            <label>Position</label><input type="text" name="position" value="%position%" />
                            <label>Mot-clés</label><textarea class="textareaPage" name="keywords">%keywords%</textarea>
                    </section>
                    <section class="btn-adminPanel">
                        <article class="btn-admin maj">
                            <li>Mettre à jour</li>
                        </article>
                    </section>
               </div>';
    }
 
}
