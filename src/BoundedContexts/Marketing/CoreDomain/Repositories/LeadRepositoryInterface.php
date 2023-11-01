<?php
namespace App\BoundedContexts\Marketing\CoreDomain\Repositories;

use App\BoundedContexts\Marketing\CoreDomain\Entities\Lead;

interface LeadRepositoryInterface {
    public function save(Lead $lead): void;
}
