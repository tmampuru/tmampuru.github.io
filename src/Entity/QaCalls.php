<?php

namespace App\Entity;

use App\Repository\QaCallsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QaCallsRepository::class)
 */
class QaCalls
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $submissionTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubmissionTime(): ?\DateTimeInterface
    {
        return $this->submissionTime;
    }

    public function setSubmissionTime(\DateTimeInterface $submissionTime): self
    {
        $this->submissionTime = $submissionTime;

        return $this;
    }
}
