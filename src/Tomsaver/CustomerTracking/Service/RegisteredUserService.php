<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 13:22
 */

namespace Tomsaver\CustomerTracking\Service;

use Tomsaver\Lib\AbstractCRUDService;

class RegisteredUserService implements AbstractCRUDService
{

    public function getAll()
    {
        return array(
            array(
                'id' => 1,
                'name' => '1er elemento',
                'description' => '1er description'
            ),
            array(
                'id' => 2,
                'name' => '2nd elemento',
                'description' => '2en description'
            ),

        );
    }

    public function save($object)
    {
        // TODO: Implement save() method.
        throw new \Exception('Not implemented yet!');
    }

    public function update($id, $object)
    {
        // TODO: Implement update() method.
        throw new \Exception('Not implemented yet!');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        throw new \Exception('Not implemented yet!');
    }
}