<?php

namespace App\Entity;

use App\Repository\EstiloRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EstiloRepository::class)
 */
class Estilo
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
     * @ORM\OneToMany(targetEntity=Motos::class, mappedBy="estilo")
     */
    private $motos;

    public function __construct()
    {
        $this->motos = new ArrayCollection();
    }

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

    /**
     * @return Collection|Motos[]
     */
    public function getMotos(): Collection
    {
        return $this->motos;
    }

    public function addMoto(Motos $moto): self
    {
        if (!$this->motos->contains($moto)) {
            $this->motos[] = $moto;
            $moto->setEstilo($this);
        }

        return $this;
    }

    public function removeMoto(Motos $moto): self
    {
        if ($this->motos->removeElement($moto)) {
            // set the owning side to null (unless already changed)
            if ($moto->getEstilo() === $this) {
                $moto->setEstilo(null);
            }
        }

        return $this;
    }
}
