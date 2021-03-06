<?php

namespace App\Entity;

use App\Repository\BarragemRepository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="barragens")
 *
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="id",
 *          column=@ORM\Column(name= "id_bar", type="integer", nullable=true)
 *          )
 * })
 **/
class Barragem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, name="nome_bar", nullable=false)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255, name="rotulo_bar", nullable=false)
     */
    private $rotulo_bar;

    /**
     * @ORM\Column(type="integer", name="id_cli", nullable=false)
     */
    private $cliente;

    /**
     * @ORM\Column(type="string", length=255, name="image_capa_bar", nullable=false)
     */
    private $image_capa;

    /**
     * @ORM\Column(type="string", length=255, name="sigla_bar", nullable=false)
     */
    private $sigla;

    /**
     * @ORM\Column(type="float", name="latitude_bar", nullable=false)
     */
    private $latitude;

    /**
     * @ORM\Column(type="float", name="longitude_bar", nullable=false)
     */
    private $longitude;

    /**
     * @ORM\Column(type="datetime", name="cadastro_bar", nullable=false)
     */
    private $cadastro;

    /**
     * @var ArrayCollection
	 * @OneToMany(targetEntity="Estacoes", mappedBy="barragem")
	 */
    private $estacoes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getRotulo(): ?string
    {
        return $this->rotulo;
    }

    public function setRotulo(string $rotulo): self
    {
        $this->rotulo = $rotulo;

        return $this;
    }

    public function getCliente(): ?int
    {
        return $this->cliente;
    }

    public function setCliente(int $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getImageCapa(): ?string
    {
        return $this->image_capa;
    }

    public function setImageCapa(string $image_capa): self
    {
        $this->image_capa = $image_capa;

        return $this;
    }

    public function getSigla(): ?string
    {
        return $this->sigla;
    }

    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getCadastro(): ?\DateTimeInterface
    {
        return $this->cadastro;
    }

    public function setCadastro(\DateTimeInterface $cadastro): self
    {
        $this->cadastro = $cadastro;

        return $this;
    }

    public function getEstacoes(): ArrayCollection
    {
        return $this->estacoes;
    }

    public function setEstacoes(ArrayCollection $estacoes): self
    {
        return $this->estacoes = $estacoes;
    }
}
