<?php

namespace App\Entity;

use App\Repository\ClimatologiaRepository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="climatologia")
 *
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="id",
 *          column=@ORM\Column(name= "id_clm", type="integer", nullable=true)
 *          )
 * })
 **/
class Climatologia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", name="precipitacao_est", nullable=false)
     */
    private $precipitacao;

    /**
     * @ORM\Column(type="float", name="magnitude_est", nullable=false)
     */
    private $magnitude;

    /**
     * @ORM\Column(type="float", name="direcao_est", nullable=false)
     */
    private $direcao;

    /**
     * @ORM\Column(type="float", name="umidade_est", nullable=false)
     */
    private $umidade;

    /**
     * @ORM\Column(type="float", name="pressao_est", nullable=false)
     */
    private $pressao;

    /**
     * @ORM\Column(type="float", name="temperatura_est", nullable=false)
     */
    private $temperatura;

    /**
     * @ORM\Column(type="datetime", name="cadastro_est", nullable=false)
     */
    private $cadastro;

 	/**
	 * @ManyToOne(targetEntity="Estacoes", inversedBy="registros")
	 * @JoinColumn(name="id_est", referencedColumnName="id_est", nullable=false)
	 */
    private $estacao;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstacao(): ?int
    {
        return $this->estacao;
    }

    public function setEstacao(int $estacao): self
    {
        $this->estacao = $estacao;

        return $this;
    }

    public function getPrecipitacao(): ?float
    {
        return $this->precipitacao;
    }

    public function setPrecipitacao(float $precipitacao): self
    {
        $this->precipitacao = $precipitacao;

        return $this;
    }

    public function getMagnitude(): ?float
    {
        return $this->magnitude;
    }

    public function setMagnitude(float $magnitude): self
    {
        $this->magnitude = $magnitude;

        return $this;
    }

    public function getDirecao(): ?float
    {
        return $this->direcao;
    }

    public function setDirecao(float $direcao): self
    {
        $this->direcao = $direcao;

        return $this;
    }

    public function getUmidade(): ?float
    {
        return $this->umidade;
    }

    public function setUmidade(float $umidade): self
    {
        $this->umidade = $umidade;

        return $this;
    }

    public function getPressao(): ?float
    {
        return $this->pressao;
    }

    public function setPressao(float $pressao): self
    {
        $this->pressao = $pressao;

        return $this;
    }

    public function getTemperatura(): ?float
    {
        return $this->temperatura;
    }

    public function setTemperatura(float $temperatura): self
    {
        $this->temperatura = $temperatura;

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
}
