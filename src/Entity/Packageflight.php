<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packageflight
 *
 * @ORM\Table(name="packageflight")
 * @ORM\Entity
 */
class Packageflight
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
     * @var int
     *
     * @ORM\Column(name="packageID", type="integer", nullable=false)
     */
    private $packageid;

    /**
     * @var int
     *
     * @ORM\Column(name="flightID", type="integer", nullable=false)
     */
    private $flightid;


}
