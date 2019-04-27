<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packages
 *
 * @ORM\Table(name="packages")
 * @ORM\Entity
 */
class Packages
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
     * @ORM\Column(name="packTitle", type="string", length=30, nullable=false)
     */
    private $packtitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="packDescription", type="text", length=65535, nullable=true)
     */
    private $packdescription;


}
