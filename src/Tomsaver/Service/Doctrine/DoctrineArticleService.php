<?php
/**
 * User: asier
 * Date: 10/01/14
 * Time: 11:10
 */

namespace Tomsaver\Service\Doctrine;


use Tomsaver\Entity\Article;
use Tomsaver\ModelBundle\Entity\Entity;
use Tomsaver\ModelBundle\Service\Doctrine\AbstractDoctrineModelService;
use Tomsaver\Service\ArticleService;
use Tomsaver\Service\Doctrine\Column\ArticleColumnIndex;

class DoctrineArticleService extends AbstractDoctrineModelService implements ArticleService, ArticleColumnIndex
{

    /**
     * Returns all articles
     *
     * @return array<Article>
     */
    public function getAll()
    {
    }

    /**
     * Inserts new article
     *
     * @param Article $article
     * @return integer Id
     */
    public function save(Article $article)
    {
    }

    /**
     * Updates article
     *
     * @param $id
     * @param Article $article
     * @return boolean
     */
    public function update($id, Article $article)
    {
    }

    /**
     * Deletes article
     * @param $id
     * @return boolean
     */
    public function delete($id)
    {
    }

    /**
     * Applies the $rawResult to $objectInstance
     *
     * @param Entity $objectInstance …
     * @param array &$rawResult …
     *
     * @return mixed
     */
    public function applyRawResultTo(&$objectInstance, array &$rawResult)
    {
        $id = $rawResult[self::ROW_ID];
        $title = $rawResult[self::ROW_TITLE];
        $description = $rawResult[self::ROW_DESCRIPTION];
        $image = $rawResult[self::ROW_IMAGE];
        $date = $rawResult[self::ROW_DATE];

        $objectInstance->setId($id);
        $objectInstance->setTitle($title);
        $objectInstance->setDescription($description);
        $objectInstance->setImage($image);
        $objectInstance->setDate($date);

        return $objectInstance;
    }

    /**
     * Creates an object instance
     *
     * @return Article
     */
    public function createObjectInstance()
    {
        return new Article();
    }
}