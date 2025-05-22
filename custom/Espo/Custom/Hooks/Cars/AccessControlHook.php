<?php

namespace Espo\Custom\Hooks\Cars;

use Espo\ORM\Entity;
use Espo\Core\Container;

class AccessControlHook
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function beforeSave(Entity $entity, array $options = [])
    {
        // Get your custom AccessControl service
        $service = $this->container->get('serviceFactory')->create('AccessControl');

        // Get restricted fields for the 'Contact' entity (or replace with correct one)
        $restrictedFields = $service->getRestrictedFields('Contact');

        // Clear restricted fields before save
        foreach ($restrictedFields as $field) {
            if ($entity->has($field)) {
                $entity->set($field, null);
            }
        }
    }
}
