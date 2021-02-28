<?php

namespace App\Entity;

use App\Repository\AgentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgentsRepository::class)
 */
class Agents
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $agentName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $agentEmail;

    /**
     * @ORM\Column(type="integer")
     */
    private $extension;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $serviceArea;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAgentName(): ?string
    {
        return $this->agentName;
    }

    public function setAgentName(string $agentName): self
    {
        $this->agentName = $agentName;

        return $this;
    }

    public function getAgentEmail(): ?string
    {
        return $this->agentEmail;
    }

    public function setAgentEmail(string $agentEmail): self
    {
        $this->agentEmail = $agentEmail;

        return $this;
    }

    public function getExtension(): ?int
    {
        return $this->extension;
    }

    public function setExtension(int $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getServiceArea(): ?string
    {
        return $this->serviceArea;
    }

    public function setServiceArea(string $serviceArea): self
    {
        $this->serviceArea = $serviceArea;

        return $this;
    }
}
