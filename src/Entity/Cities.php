<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cities
 *
 * @ORM\Table(name="cities", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"citName", "id_country"})})
 * @ORM\Entity
 */
class Cities
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="citName", type="string", length=60, nullable=false)
     */
    private $citname;

    /**
     * @var int
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     */
    private $idCountry;
    public  function getId(){
       return $this->id;
    }
    public  function setCityName($citname){
    $this->citname=$citname;
    }
    public  function getCityName(){
        return $this->citname;
    }
}
