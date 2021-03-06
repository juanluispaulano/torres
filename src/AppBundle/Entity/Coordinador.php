<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Coordinador
 * @ORM\Entity
 * @ORM\Table(name="Coordinador")
 */

class Coordinador
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
     * @var int
     * @ORM\Column(type="integer")
     */

    private $edad;

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
     * @return Coordinador
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
     * @return Coordinador
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
     * @return Coordinador
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
        return $this;
    }

    /**
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param int $edad
     * @return Coordinador
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
        return $this;
    }


}