<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 13:20
 */

namespace Tomsaver\Lib;


interface AbstractCRUDService extends Service
{

    public function getAll();

    public function save($object);

    public function update($id, $object);

    public function delete($id);
}
