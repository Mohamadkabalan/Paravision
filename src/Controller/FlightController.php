<?php

namespace App\Controller;

use App\Entity\Airline;
use App\Entity\Cities;
use App\Entity\Flights;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class FlightController extends AbstractController
{
    /**
     * @Route("/flight", name="flight")
     */
    public function index()
    {
        return $this->render('flight/index.html.twig', [
            'controller_name' => 'FlightController',
        ]);
    }

    /**
     * @Route("/flightAddForm", name="flightAddForm")
     */
    public function flightAddForm()
    {
        return $this->render('flight/flightAddForm.html.twig', [
            'controller_name' => 'FlightController',
        ]);
    }

    /**
     * @Route("/flighFetch", name="flighFetch")
     */
    public function flighFetch()
    {
        $flights = $this->getDoctrine()->getRepository(Flights::class)->findAll();
        $jsonData = array();
        $idx = 0;
        foreach ($flights as $flight) {
            $originCity = $this->getDoctrine()->getRepository(Cities::class)->find($flight->getFlistartpoint());
            $originCityName = $originCity->getCityName();
            $destinationCity = $this->getDoctrine()->getRepository(Cities::class)->find($flight->getFliendpoint());
            $destinationCityName = $destinationCity->getCityName();
            $airline = $this->getDoctrine()->getRepository(Airline::class)->find($flight->getAirlineid());
            $airlineName = $airline->getName();
            $temp = array(
                'id' => $flight->getId(),
                'originCityId' => $flight->getFlistartpoint(),
                'originCityName' => $originCityName,
                'destinationCityId' => $flight->getFliendpoint(),
                'destinationCityName' => $destinationCityName,
                'fliStartTime' => $flight->getflistarttime(),
                'fliEndTime' => $flight->getFliendtime(),
                'fliClass' => $flight->getfliclass(),
                'fliPrice' => $flight->getFliprice(),
                'fliPriceCurrency' => $flight->getFlipricecurrency(),
                'AirlineID' => $flight->getAirlineid(),
                'airlineName' => $airlineName
            );
            $jsonData[$idx++] = $temp;
        }

        return new JsonResponse($jsonData);
    }

    /**
     * @Route("/flighAdd", name="flighAdd")
     */
    public function flighAdd(Request $request)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $originCityLast = $request->request->get('originCityLast');
        $destinationCityLast = $request->request->get('destinationCityLast');
        $startTimeLast =date_create( $request->request->get('startTimeLast'));

        $endTimeLast = date_create($request->request->get('endTimeLast'));
        $priceLast = $request->request->get('priceLast');
        $airlineLast = $request->request->get('airlineLast');
        $flight = new Flights();
        $flight->setAirlineid($airlineLast);
        $flight->setFliclass("Economy");
        $flight->setfliendpoint($destinationCityLast);
        $flight->setFliendtime($endTimeLast);
        $flight->setFliprice($priceLast);
        $flight->setFlipricecurrency("usd");
        $flight->setFlistartpoint($originCityLast);
        $flight->setFlistarttime($startTimeLast);
        $entityManager->persist($flight);
        $entityManager->flush();
        return new JsonResponse(array('message' => 'Success!','status'=>200), 200);
    }


}
