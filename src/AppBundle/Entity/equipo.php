<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class equipo
 * @ORM\Entity
 * @ORM\Table(name="Equipos")
 */

class equipo
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
     * @return int
     */

    public function getNumPremios()
    {
        return $this->numPremios;
    }

    /**
     * @param int $numPremios
     */

    public function setNumPremios($numPremios)
    {
        $this->numPremios = $numPremios;
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
     */

    public function setPuestoClasificacion($puestoClasificacion)
    {
        $this->puestoClasificacion = $puestoClasificacion;
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
     */

    public function setTieneBajas($tieneBajas)
    {
        $this->tieneBajas = $tieneBajas;
    }


}