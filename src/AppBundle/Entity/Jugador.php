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
     * @ORM\Column(type="boolean", nullable=true)
     */

    private $capitan;

    /**
     * @ORM\ManyToOne(targetEntity="Equipo", inversedBy="jugadores")
     * @var Equipo
     */

    private $equipo;

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
     * @return Jugador
     */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
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
     * @return Jugador
     */

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
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
     * @return Jugador
     */

    public function setDni($dni)
    {
        $this->dni = $dni;
        return $this;
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
     * @return Jugador
     */

    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
        return $this;
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
     * @return Jugador
     */

    public function setCapitan($capitan)
    {
        $this->capitan = $capitan;
        return $this;
    }

    /**
     * @return Equipo
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * @param Equipo $equipo
     * @return Equipo
     */

    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;
        return $equipo;
    }

}