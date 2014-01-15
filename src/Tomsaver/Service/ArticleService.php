<?php
/**
 * User: asier
 * Date: 10/01/14
 * Time: 11:09
 */

namespace Tomsaver\Service;


use Tomsaver\Entity\Article;
use Tomsaver\ModelBundle\Service\ModelService;

interface ArticleService extends ModelService
{

    /**
     * Returns all articles
     *
     * @return array<Article>
     */
    public function getAll();

    /**
     * Inserts new article
     *
     * @param Article $article
     * @return integer Id
     */
    public function save(Article $article);

    /**
     * Updates article
     *
     * @param $id
     * @param Article $article
     * @return boolean
     */
    public function update($id, Article $article);

    /**
     * Deletes article
     * @param $id
     * @return boolean
     */
    public function delete($id);

} 