<?php

namespace SafetyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity(repositoryClass="SafetyBundle\Repository\PersonaRepository")
 */
class Persona
{
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="nuip", type="string", length=15, unique=true)
     * @Assert\NotBlank(message="Debe ingresar el número de identificación")
     * @Assert\Range(min= 1, minMessage="debe ingresar numeros positivos")
     */
    private $nuip;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80)
     * @Assert\NotBlank(message="debe ingresar el nombre")
     * @Assert\Length(max= 80, maxMessage="Nombre demaciado largo")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=100)
     * @Assert\NotBlank(message="debe ingresar el correo")
     * @Assert\Email(message="el Email no es valido")
     */
    private $correo;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Tarea", mappedBy="Persona")
     */
    private $listaTareas;

    /**
     * Persona constructor.
     */
    public function __construct()
    {
        $this->listaTareas = new ArrayCollection();
    }


    /**
     * Get nuip
     *
     * @return string 
     */
    public function getNuip()
    {
        return $this->nuip;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Persona
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set nuip
     *
     * @param string $nuip
     * @return Persona
     */
    public function setNuip($nuip)
    {
        $this->nuip = $nuip;

        return $this;
    }

    /**
     * Add listaTareas
     *
     * @param \SafetyBundle\Entity\Tarea $listaTareas
     * @return Persona
     */
    public function addListaTarea(\SafetyBundle\Entity\Tarea $listaTareas)
    {
        $this->listaTareas[] = $listaTareas;

        return $this;
    }

    /**
     * Remove listaTareas
     *
     * @param \SafetyBundle\Entity\Tarea $listaTareas
     */
    public function removeListaTarea(\SafetyBundle\Entity\Tarea $listaTareas)
    {
        $this->listaTareas->removeElement($listaTareas);
    }

    /**
     * Get listaTareas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListaTareas()
    {
        return $this->listaTareas;
    }
}
