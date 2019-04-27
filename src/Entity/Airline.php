<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Airline
 *
 * @ORM\Table(name="airline")
 * @ORM\Entity
 */
class Airline
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
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;
public function getName(){
    return $this->name;
}

}
