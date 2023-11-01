<?php

namespace App\BoundedContexts\Marketing\Infrastructure\Symfony\Database\Doctrine\Entity;

use App\BoundedContexts\Marketing\Infrastructure\Symfony\Database\Doctrine\Repositories\LeadRepository;
use Doctrine\ORM\Mapping as ORM;

use App\BoundedContexts\Marketing\CoreDomain\Entities\Lead as DomainLead;

#[ORM\Entity(repositoryClass: LeadRepository::class)]
class Lead
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public static function fromDomain(DomainLead $domainLead): self
    {
        $doctrineLead = new self();
        if ($domainLead->getId()) {
            $reflectionProperty = new \ReflectionProperty(self::class, 'id');
            $reflectionProperty->setAccessible(true);
            $reflectionProperty->setValue($doctrineLead, $domainLead->getId());
        }
        $doctrineLead->setName($domainLead->getName());
        $doctrineLead->setEmail($domainLead->getEmail());

        return $doctrineLead;
    }
}
