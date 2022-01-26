<?php

namespace App\Entity;

use App\Repository\MotosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MotosRepository::class)
 */
class Motos
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
    private $nombre;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $potencia;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $cilindrada;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $cilindros;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $precio;

    /**
     * @ORM\ManyToOne(targetEntity=Marcas::class, inversedBy="motos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marca;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alias;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getPotencia(): ?string
    {
        return $this->potencia;
    }

    public function setPotencia(string $potencia): self
    {
        $this->potencia = $potencia;

        return $this;
    }

    public function getCilindrada(): ?string
    {
        return $this->cilindrada;
    }

    public function setCilindrada(string $cilindrada): self
    {
        $this->cilindrada = $cilindrada;

        return $this;
    }

    public function getCilindros(): ?string
    {
        return $this->cilindros;
    }

    public function setCilindros(string $cilindros): self
    {
        $this->cilindros = $cilindros;

        return $this;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getMarca(): ?Marcas
    {
        return $this->marca;
    }

    public function setMarca(?Marcas $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

}
