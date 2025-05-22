<?php

namespace Espo\Custom\Services;

use Espo\Core\Utils\Time;
use Espo\ORM\Entity;

class AccessControlService extends \Espo\Core\Templates\Services\Base
{
    protected function getCurrentUserRole()
    {
        return $this->getUser()->get('role') ?? '';
    }

    public function getRestrictedFields($entityName)
    {
        if ($this->getCurrentUserRole() !== 'intern') return [];

        $repo = $this->getEntityManager()->getRepository('InternFieldAccess');
        $now = (new \DateTime())->format('Y-m-d H:i:s');

        $records = $repo->where([
            'entityName' => $entityName,
            'role' => 'intern',
            'startDateTime<=' => $now,
            'endDateTime>=' => $now
        ])->find();

        return array_map(fn($r) => $r->get('fieldName'), $records);
    }
}
