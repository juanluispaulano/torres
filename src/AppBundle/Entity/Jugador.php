<?php


namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class jugador
 * @ORM\Entity
 * @ORM\Table(name="Jugador")
 */
class Jugador
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="auto")
     * @ORM\Column(type="integer")
     */

    private $id;

    /**
     * @var string
     * @ORM\Column(type="text")
     */

    private $nombre;

    /**
     * @var string
     * @ORM\Column(type="text")
     */

    private $apellido;

    /**
     * @var string
     * @ORM\Column(type="string", unique=true)
     */

    private $dni;

    /**
     * @var string
     * @ORM\Column(type="text")
     */

    private $nacionalidad;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */

    private $capitan;

    /**
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */

    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */

    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     */

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return string
     */

    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param string $dni
     */

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * @return string
     */

    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * @param string $nacionalidad
     */

    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }

    /**
     * @return bool
     */

    public function isCapitan()
    {
        return $this->capitan;
    }

    /**
     * @param bool $capitan
     */

    public function setCapitan($capitan)
    {
        $this->capitan = $capitan;
    }

}