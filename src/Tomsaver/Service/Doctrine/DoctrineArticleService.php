<?php
/**
 * User: asier
 * Date: 8/01/14
 * Time: 16:04
 */

namespace Tomsaver\Service\Doctrine;


use Tomsaver\ModelBundle\Service\Doctrine\AbstractDoctrineModelService;
use Tomsaver\Service\ArticleService;

class DoctrineArticleService extends AbstractDoctrineModelService implements ArticleService
{

    /**
     * Applies the $rawResult to $objectInstance
     *
     * @param mixed $objectInstance …
     * @param array &$rawResult …
     *
     * @return mixed
     */
    public function applyRawResultTo(&$objectInstance, array &$rawResult)
    {
    }

    /**
     * Creates an object instance
     *
     * @return mixed
     */
    public function createObjectInstance()
    {
    }
}