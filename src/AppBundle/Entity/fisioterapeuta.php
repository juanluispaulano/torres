<?php


namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class fisioterapeuta
 * @ORM\Entity
 * @ORM\Table(name="fisioterapeuta")
 */

class fisioterapeuta
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="auto")
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
     * @var int
     * @ORM\Column(type="integer")
     */

    private $edad;

    /**
     * @var string
     * @ORM\Column(type="text")
     */

    private $nacionalidad;

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
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param int $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
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


}
