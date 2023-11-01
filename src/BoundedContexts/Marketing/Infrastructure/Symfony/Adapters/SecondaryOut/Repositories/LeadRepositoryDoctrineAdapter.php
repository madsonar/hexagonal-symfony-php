<?php

namespace App\BoundedContexts\Marketing\Infrastructure\Symfony\Adapters\SecondaryOut\Repositories;

use App\BoundedContexts\Marketing\CoreDomain\Entities\Lead;
use App\BoundedContexts\Marketing\CoreDomain\Repositories\LeadRepositoryInterface;
use App\BoundedContexts\Marketing\Infrastructure\Symfony\Database\Doctrine\Repositories\LeadRepository;

use App\BoundedContexts\Marketing\Infrastructure\Symfony\Database\Doctrine\Entity\Lead as DoctrineLead;

class LeadRepositoryDoctrineAdapter implements LeadRepositoryInterface {

    public function __construct(
        private LeadRepository $repository
    ) {
    }

    public function save(Lead $domainLead): void {
        $doctrineLead = DoctrineLead::fromDomain($domainLead);
        $this->repository->save($doctrineLead);
    }
}