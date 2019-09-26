<?php

namespace AppBundle\Service;

use AppBundle\Contract\GarageRepositoryInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SearchService
{
    private $garageRepo;
    private $session;

    public function __construct(GarageRepositoryInterface $garageRepo, SessionInterface $session)
    {
        $this->garageRepo = $garageRepo;
        $this->session = $session;
    }

    public function findBy(array $condition = [], array $location = [], string $orderBy = 'o_creationDate', string $sortBy = 'DESC', int $limit = null, int $offset = null)
    {
        if (!empty($this->session->get('CURRENT_LOCATION'))) 
        {
            $orderBy = 'Distance';
            $sortBy = 'ASC';
        }
        
        $result = $this->garageRepo->findBy($condition, $location, $orderBy, $sortBy, $limit, $offset);

        if ($result->data) {
            $tempResult = [];

            foreach ($result->data as $key => $value) {
                $detail = $this->garageRepo->findOneById($value['o_id']);
                $operatingHours = $detail->getOperatingHours();
                $value['OperatingHours'] = [];

                if ($operatingHours) {
                    for ($i=0; $i < count($op = $operatingHours->getItems()); $i++) { 
                        $value['OperatingHours'][$i]['OperationalDay'] = $op[$i]->getOperationalDay();
                        $value['OperatingHours'][$i]['OpenHour'] = $op[$i]->getOpenHour();
                        $value['OperatingHours'][$i]['CloseHour'] = $op[$i]->getCloseHour();
                    }
                }

                array_push($tempResult, $value);
            }

            $result->data = $tempResult;
        }

        return $result;
    }
}