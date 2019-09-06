<?php

namespace AppBundle\Model\DataObject;

use Pimcore\Model\DataObject\Garage as BaseGarage;
use Pimcore\Db;
use Pimcore\Db\ZendCompatibility\QueryBuilder;

class Garage extends BaseGarage 
{
	protected $tableGarage;

	public function __construct()
	{
		$this->tableGarage = "object_" . Garage::classId();
	}

    public function findByLocation(array $data = [], array $location = null, string $orderBy = 'o_creationDate', string $sortBy = 'desc')
    {
        $latitude = $location['latitude'];
        $longitude = $location['longitude'];

        $db = Db::get();

        $qb = $db->createQueryBuilder();

        $qb ->select('*', '(((acos(sin(('.$latitude.'*pi()/180)) * sin(('.$this->tableGarage.'.Latitude*pi()/180))+
            cos(('.$latitude.'*pi()/180)) * cos(('.$this->tableGarage.'.Latitude*pi()/180)) * cos((('.$longitude.' - '.$this->tableGarage.'.Longitude)*pi()/180))))*180/pi())*60*1.1515*1.609344
         ) AS Distance')
            ->from($this->tableGarage);

        $stmt = $qb->execute();
        $result = $stmt->fetchAll();
        
        return $result;
    }

}