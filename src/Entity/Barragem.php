<?php

namespace App\Entity;

use App\Repository\BarragemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BarragemRepository::class)
 */
class Barragem
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
    private $nome_bar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rotulo_bar;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_cli;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_capa_bar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sigla_bar;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude_bar;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude_bar;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cadastro_bar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomeBar(): ?string
    {
        return $this->nome_bar;
    }

    public function setNomeBar(string $nome_bar): self
    {
        $this->nome_bar = $nome_bar;

        return $this;
    }

    public function getRotuloBar(): ?string
    {
        return $this->rotulo_bar;
    }

    public function setRotuloBar(string $rotulo_bar): self
    {
        $this->rotulo_bar = $rotulo_bar;

        return $this;
    }

    public function getIdCli(): ?int
    {
        return $this->id_cli;
    }

    public function setIdCli(int $id_cli): self
    {
        $this->id_cli = $id_cli;

        return $this;
    }

    public function getImageCapaBar(): ?string
    {
        return $this->image_capa_bar;
    }

    public function setImageCapaBar(string $image_capa_bar): self
    {
        $this->image_capa_bar = $image_capa_bar;

        return $this;
    }

    public function getSiglaBar(): ?string
    {
        return $this->sigla_bar;
    }

    public function setSiglaBar(string $sigla_bar): self
    {
        $this->sigla_bar = $sigla_bar;

        return $this;
    }

    public function getLatitudeBar(): ?float
    {
        return $this->latitude_bar;
    }

    public function setLatitudeBar(float $latitude_bar): self
    {
        $this->latitude_bar = $latitude_bar;

        return $this;
    }

    public function getLongitudeBar(): ?float
    {
        return $this->longitude_bar;
    }

    public function setLongitudeBar(float $longitude_bar): self
    {
        $this->longitude_bar = $longitude_bar;

        return $this;
    }

    public function getCadastroBar(): ?\DateTimeInterface
    {
        return $this->cadastro_bar;
    }

    public function setCadastroBar(\DateTimeInterface $cadastro_bar): self
    {
        $this->cadastro_bar = $cadastro_bar;

        return $this;
    }
}
