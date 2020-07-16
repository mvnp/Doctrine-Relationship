<?php

namespace App\Entity;

use App\Repository\EstacoesRepository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="estacoes")
 *
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="id",
 *          column=@ORM\Column(name= "id_est", type="integer", nullable=true)
 *          )
 * })
 **/
class Estacoes
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
     * @ORM\Column(type="string", length=255, name="responsavel_bar", nullable=false)
     */
    private $responsavel;

    /**
     * @ORM\Column(type="string", length=255, name="equipamento_bar", nullable=false)
     */
    private $equipamento;

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
	 * @ManyToOne(targetEntity="Barragem", inversedBy="estacoes")
	 * @JoinColumn(name="id_bar", referencedColumnName="id_bar", nullable=false)
	 */
    private $barragem;

    /**
     * @var ArrayCollection
	 * @OneToMany(targetEntity="Climatologia", mappedBy="estacao")
	 */
    private $registros;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBarragem(): ?int
    {
        return $this->barragem;
    }

    public function setBarragem(int $barragem): self
    {
        $this->barragem = $barragem;

        return $this;
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

    public function getResponsavel(): ?string
    {
        return $this->responsavel;
    }

    public function setResponsavel(string $responsavel): self
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    public function getEquipamento(): ?string
    {
        return $this->equipamento;
    }

    public function setEquipamento(string $equipamento): self
    {
        $this->equipamento = $equipamento;

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

    public function getRegistros(): ArrayCollection
    {
        return $this->registros;
    }

    public function setRegistros(ArrayColection $registros): self
    {
        return $this->registros = $registros;
    }
}
