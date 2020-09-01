<?php

namespace App\Entity;

use App\Repository\DatahubRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DatahubRepository::class)
 */
class Datahub
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column5;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column6;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column9;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column10;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dataType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uploadId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column7;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $column8;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(string $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?string
    {
        return $this->column3;
    }

    public function setColumn3(string $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn9(): ?string
    {
        return $this->column9;
    }

    public function setColumn9(string $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?string
    {
        return $this->column10;
    }

    public function setColumn10(string $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    public function setDataType(string $dataType): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getUploadId(): ?string
    {
        return $this->uploadId;
    }

    public function setUploadId(string $uploadId): self
    {
        $this->uploadId = $uploadId;

        return $this;
    }

    public function getColumn7(): ?string
    {
        return $this->column7;
    }

    public function setColumn7(string $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }
}
