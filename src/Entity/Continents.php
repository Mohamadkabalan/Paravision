<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Continents
 *
 * @ORM\Table(name="continents", uniqueConstraints={@ORM\UniqueConstraint(name="contName", columns={"contName"})}, indexes={@ORM\Index(name="ord_Cont", columns={"contName"})})
 * @ORM\Entity
 */
class Continents
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
     * @ORM\Column(name="contName", type="string", length=25, nullable=false)
     */
    private $contname;


}
