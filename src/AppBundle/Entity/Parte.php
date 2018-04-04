<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 04/04/2018
 * Time: 20:50
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="parte")
 */

class Parte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="boolean")
     */
    private $maniana;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tarde;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;


    /**
     * @ORM\Column(type="integer")
     */
    private $tiempo;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="partes")
     * @ORM\JoinColumn(nullable=false)
     * @var Usuario
     */

    private $parteUsuario;

    //Getters and Setters.

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getManiana()
    {
        return $this->maniana;
    }

    /**
     * @param mixed $maniana
     */
    public function setManiana($maniana)
    {
        $this->maniana = $maniana;
    }

    /**
     * @return mixed
     */
    public function getTarde()
    {
        return $this->tarde;
    }

    /**
     * @param mixed $tarde
     */
    public function setTarde($tarde)
    {
        $this->tarde = $tarde;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * @param mixed $tiempo
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }

    /**
     * @return Usuario
     */
    public function getParteUsuario()
    {
        return $this->parteUsuario;
    }

    /**
     * @param Usuario $parteUsuario
     */
    public function setParteUsuario($parteUsuario)
    {
        $this->parteUsuario = $parteUsuario;
    }

}