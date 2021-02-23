<?php

namespace App\Entity;

use App\Repository\CommsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommsRepository::class)
 */
class Comms
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
    private $Assessor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $AgentAddressed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PodLeader;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SupportCategory;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $IssueCategory;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $InteractionID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CommentsSent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAssessor(): ?string
    {
        return $this->Assessor;
    }

    public function setAssessor(string $Assessor): self
    {
        $this->Assessor = $Assessor;

        return $this;
    }

    public function getAgentAddressed(): ?string
    {
        return $this->AgentAddressed;
    }

    public function setAgentAddressed(string $AgentAddressed): self
    {
        $this->AgentAddressed = $AgentAddressed;

        return $this;
    }

    public function getPodLeader(): ?string
    {
        return $this->PodLeader;
    }

    public function setPodLeader(string $PodLeader): self
    {
        $this->PodLeader = $PodLeader;

        return $this;
    }

    public function getSupportCategory(): ?string
    {
        return $this->SupportCategory;
    }

    public function setSupportCategory(string $SupportCategory): self
    {
        $this->SupportCategory = $SupportCategory;

        return $this;
    }

    public function getIssueCategory(): ?string
    {
        return $this->IssueCategory;
    }

    public function setIssueCategory(string $IssueCategory): self
    {
        $this->IssueCategory = $IssueCategory;

        return $this;
    }

    public function getInteractionID(): ?string
    {
        return $this->InteractionID;
    }

    public function setInteractionID(string $InteractionID): self
    {
        $this->InteractionID = $InteractionID;

        return $this;
    }

    public function getCommentsSent(): ?string
    {
        return $this->CommentsSent;
    }

    public function setCommentsSent(string $CommentsSent): self
    {
        $this->CommentsSent = $CommentsSent;

        return $this;
    }
}
