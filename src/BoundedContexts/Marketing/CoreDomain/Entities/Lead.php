<?php

namespace App\BoundedContexts\Marketing\CoreDomain\Entities;

class Lead {
    public function __construct(
        private int $id,
        private string $name,
        private string $email,
        private string $phone
    ) {}

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getPhone(): string {
        return $this->email;
    }

    public function setPhone(string $email): void {
        $this->email = $email;
    }
}
