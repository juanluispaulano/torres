<?php


namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class jugador
 * @ORM\Entity
 * @ORM\Table(name="Jugador")
 */
class jugador
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="auto")
     * @ORM\Column(type="integer")
     * @var int
     */

    private $id;

    /**
     * @ORM\Column(type="text")
     * @var string
     */

    private $nombre;

    /**
     * @ORM\Column(type="text")
     * @var string
     */

    private $apellido;

    /**
     * @ORM\Column(type="string")
     * @var string
     */

    private $dni;

    /**
     * @ORM\Column(type="text")
     * @var string
     */

    private $nacionalidad;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */

    private $jugador;

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
    public function isJugador()
    {
        return $this->jugador;
    }

    /**
     * @param bool $jugador
     */
    public function setJugador($jugador)
    {
        $this->jugador = $jugador;
    }




}