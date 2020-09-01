<?php

namespace App\Entity;

use App\Repository\UploadRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UploadRepository::class)
 */
class Upload
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $uploadId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $totalData;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datatype;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUploadId(): ?int
    {
        return $this->uploadId;
    }

    public function setUploadId(int $uploadId): self
    {
        $this->uploadId = $uploadId;

        return $this;
    }

    public function getTotalData(): ?string
    {
        return $this->totalData;
    }

    public function setTotalData(string $totalData): self
    {
        $this->totalData = $totalData;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDatatype(): ?string
    {
        return $this->datatype;
    }

    public function setDatatype(string $datatype): self
    {
        $this->datatype = $datatype;

        return $this;
    }
}
