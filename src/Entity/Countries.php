<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries", indexes={@ORM\Index(name="ctry_Ind", columns={"ctryName"})})
 * @ORM\Entity
 */
class Countries
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
     * @var string|null
     *
     * @ORM\Column(name="ctryName", type="string", length=45, nullable=true)
     */
    private $ctryname;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cont", type="integer", nullable=false)
     */
    private $idCont;


}
