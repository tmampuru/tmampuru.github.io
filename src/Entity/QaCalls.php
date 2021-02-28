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
     * @ORM\Column(type="string", length=255)
     */
    private $submissionTime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $appropriateIntro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apologyEmpathy;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $identifiedMojo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deadAir;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentsAdvice1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $probing;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $proactivelyTroubleshoot;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stepsAppropriate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situationImproved;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentsAdvice2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $agentNotes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $endCallPolitely;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $remainedProfessional;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentsAdvice3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mojoLink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $callDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $incomingOutgoingNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $serviceArea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $queryBased;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $agentName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $agentEmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $assessor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubmissionTime(): ?string
    {
        return $this->submissionTime;
    }

    public function setSubmissionTime(string $submissionTime): self
    {
        $this->submissionTime = $submissionTime;

        return $this;
    }

    public function getAppropriateIntro(): ?string
    {
        return $this->appropriateIntro;
    }

    public function setAppropriateIntro(string $appropriateIntro): self
    {
        $this->appropriateIntro = $appropriateIntro;

        return $this;
    }

    public function getApologyEmpathy(): ?string
    {
        return $this->apologyEmpathy;
    }

    public function setApologyEmpathy(string $apologyEmpathy): self
    {
        $this->apologyEmpathy = $apologyEmpathy;

        return $this;
    }

    public function getIdentifiedMojo(): ?string
    {
        return $this->identifiedMojo;
    }

    public function setIdentifiedMojo(string $identifiedMojo): self
    {
        $this->identifiedMojo = $identifiedMojo;

        return $this;
    }

    public function getDeadAir(): ?string
    {
        return $this->deadAir;
    }

    public function setDeadAir(string $deadAir): self
    {
        $this->deadAir = $deadAir;

        return $this;
    }

    public function getCommentsAdvice1(): ?string
    {
        return $this->commentsAdvice1;
    }

    public function setCommentsAdvice1(string $commentsAdvice1): self
    {
        $this->commentsAdvice1 = $commentsAdvice1;

        return $this;
    }

    public function getProbing(): ?string
    {
        return $this->probing;
    }

    public function setProbing(string $probing): self
    {
        $this->probing = $probing;

        return $this;
    }

    public function getProactivelyTroubleshoot(): ?string
    {
        return $this->proactivelyTroubleshoot;
    }

    public function setProactivelyTroubleshoot(string $proactivelyTroubleshoot): self
    {
        $this->proactivelyTroubleshoot = $proactivelyTroubleshoot;

        return $this;
    }

    public function getStepsAppropriate(): ?string
    {
        return $this->stepsAppropriate;
    }

    public function setStepsAppropriate(string $stepsAppropriate): self
    {
        $this->stepsAppropriate = $stepsAppropriate;

        return $this;
    }

    public function getSituationImproved(): ?string
    {
        return $this->situationImproved;
    }

    public function setSituationImproved(string $situationImproved): self
    {
        $this->situationImproved = $situationImproved;

        return $this;
    }

    public function getCommentsAdvice2(): ?string
    {
        return $this->commentsAdvice2;
    }

    public function setCommentsAdvice2(string $commentsAdvice2): self
    {
        $this->commentsAdvice2 = $commentsAdvice2;

        return $this;
    }

    public function getAgentNotes(): ?string
    {
        return $this->agentNotes;
    }

    public function setAgentNotes(string $agentNotes): self
    {
        $this->agentNotes = $agentNotes;

        return $this;
    }

    public function getEndCallPolitely(): ?string
    {
        return $this->endCallPolitely;
    }

    public function setEndCallPolitely(string $endCallPolitely): self
    {
        $this->endCallPolitely = $endCallPolitely;

        return $this;
    }

    public function getRemainedProfessional(): ?string
    {
        return $this->remainedProfessional;
    }

    public function setRemainedProfessional(string $remainedProfessional): self
    {
        $this->remainedProfessional = $remainedProfessional;

        return $this;
    }

    public function getCommentsAdvice3(): ?string
    {
        return $this->commentsAdvice3;
    }

    public function setCommentsAdvice3(string $commentsAdvice3): self
    {
        $this->commentsAdvice3 = $commentsAdvice3;

        return $this;
    }

    public function getMojoLink(): ?string
    {
        return $this->mojoLink;
    }

    public function setMojoLink(string $mojoLink): self
    {
        $this->mojoLink = $mojoLink;

        return $this;
    }

    public function getCallDate(): ?string
    {
        return $this->callDate;
    }

    public function setCallDate(string $callDate): self
    {
        $this->callDate = $callDate;

        return $this;
    }

    public function getIncomingOutgoingNumber(): ?string
    {
        return $this->incomingOutgoingNumber;
    }

    public function setIncomingOutgoingNumber(string $incomingOutgoingNumber): self
    {
        $this->incomingOutgoingNumber = $incomingOutgoingNumber;

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

    public function getQueryBased(): ?string
    {
        return $this->queryBased;
    }

    public function setQueryBased(string $queryBased): self
    {
        $this->queryBased = $queryBased;

        return $this;
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

    public function getAssessor(): ?string
    {
        return $this->assessor;
    }

    public function setAssessor(string $assessor): self
    {
        $this->assessor = $assessor;

        return $this;
    }
}
