<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flights
 *
 * @ORM\Table(name="flights")
 * @ORM\Entity
 */
class Flights
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
     * @ORM\Column(name="fliStartPoint", type="integer", nullable=false)
     */
    private $flistartpoint;

    /**
     * @var int
     *
     * @ORM\Column(name="fliEndPoint", type="integer", nullable=false)
     */
    private $fliendpoint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fliStartTime", type="datetime", nullable=false)
     */
    private $flistarttime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fliEndTime", type="datetime", nullable=false)
     */
    private $fliendtime;

    /**
     * @var string
     *
     * @ORM\Column(name="fliClass", type="string", length=50, nullable=false)
     */
    private $fliclass;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fliPrice", type="float", precision=8, scale=2, nullable=true)
     */
    private $fliprice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fliPriceCurrency", type="string", length=10, nullable=true)
     */
    private $flipricecurrency;

    /**
     * @var int
     *
     * @ORM\Column(name="AirlineID", type="integer", nullable=false)
     */
    private $airlineid;
    public function getId(){
        return $this->id;
    }
    public function getFlistartpoint(){
         return $this->flistartpoint;
    }
    public function setFlistartpoint( $flistartpoint){
        $this->flistartpoint=$flistartpoint;
    }

    public function getFliendpoint(){
        return $this->fliendpoint;
    }
    public function setfliendpoint( $fliendpoint){
        $this->fliendpoint=$fliendpoint;
    }

    public function getflistarttime(){
        return $this->flistarttime;
    }
    public function setFlistarttime( $flistarttime){
        $this->flistarttime=$flistarttime;
    }
    public function getFliendtime(){
        return $this->fliendtime;
    }
    public function setFliendtime( $fliendtime){
        $this->fliendtime=$fliendtime;
    }

    public function getfliclass(){
        return $this->fliclass;
    }
    public function setFliclass($fliclass){
        $this->fliclass=$fliclass;
    }

    public function getFliprice(){
        return $this->fliprice;
    }
    public function setFliprice($fliprice){
        $this->fliprice=$fliprice;
    }
    public function getFlipricecurrency(){
        return $this->flipricecurrency;
    }
    public function setFlipricecurrency($flipricecurrency){
        $this->flipricecurrency=$flipricecurrency;
    }

    public function getAirlineid(){
        return $this->airlineid;
    }
    public function setAirlineid($airlineid){
        $this->airlineid=$airlineid;
    }
    public  function getCityName($cityID){

    }
}
