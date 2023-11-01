<?php

namespace App\BoundedContexts\Marketing\Application\UseCases;

use App\BoundedContexts\Marketing\CoreDomain\Entities\Lead;
use App\BoundedContexts\Marketing\CoreDomain\Repositories\LeadRepositoryInterface;

class LeadSaveUseCase
{
    public function __construct(
        private LeadRepositoryInterface $leadRepositoryInterface,
    ) {
    }

    public function execute(Lead $lead) {

        $this->leadRepositoryInterface->save($lead);
    }
}
