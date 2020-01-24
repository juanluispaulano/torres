<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class equipo
 * @ORM\Entity
 * @ORM\Table(name="Equipo")
 */

class Equipo
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
     * @var int
     * @ORM\Column(type="integer")
     */

    private $numPremios;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */

    private $puestoClasificacion;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */

    private $tieneBajas;

    /**
     * @ORM\OneToMany("targetEntity="Jugador", mappedBy="equipo");
     * @var Jugador[]
     */

    private $jugadores;

    /**
     * Equipo constructor.
     */

    public function __construct()
    {
        $this->jugadores = new ArrayCollection();
    }

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
     * @return Equipo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return int
     */

    public function getNumPremios()
    {
        return $this->numPremios;
    }

    /**
     * @param int $numPremios
     * @return Equipo
     */

    public function setNumPremios($numPremios)
    {
        $this->numPremios = $numPremios;
        return $this;
    }

    /**
     * @return int
     */

    public function getPuestoClasificacion()
    {
        return $this->puestoClasificacion;
    }

    /**
     * @param int $puestoClasificacion
     * @return Equipo
     */

    public function setPuestoClasificacion($puestoClasificacion)
    {
        $this->puestoClasificacion = $puestoClasificacion;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTieneBajas()
    {
        return $this->tieneBajas;
    }

    /**
     * @param bool $tieneBajas
     * @return Equipo
     */

    public function setTieneBajas($tieneBajas)
    {
        $this->tieneBajas = $tieneBajas;
        return $this;
    }

    /**
     * @return Jugador[]
     */

    public function getJugadores()
    {
        return $this->jugadores;
    }

    /**
     * @param Jugador[] $jugadores
     * @return Equipo
     */

    public function setJugadores($jugadores)
    {
        $this->jugadores = $jugadores;
        return $this;
    }

}