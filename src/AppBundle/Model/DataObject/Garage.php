<?php

namespace AppBundle\Model\DataObject;

use Pimcore\Model\DataObject\Garage as BaseGarage;
use Pimcore\Db;
use Pimcore\Db\ZendCompatibility\QueryBuilder;
use Pimcore\Model\DataObject;

class Garage extends BaseGarage
{
	protected $tableGarage;

	public function __construct()
	{
        $this->tableGarage = "object_" . Garage::classId();
    }
    
    public static function getWithDistance(array $condition = [], array $location = [], string $orderBy = 'o_creationDate', string $sortBy = 'DESC')
    {
        $latitude = floatval($location['latitude']);
        $longitude = floatval($location['longitude']);

        $tableGarage = "object_".self::classId();
        $tableCategory = "object_".DataObject\Category::classId();
        $tableType = "object_".DataObject\Type::classId();
        $tableCity = "object_".DataObject\City::classId();
        $tableProvince = "object_".DataObject\Province::classId();
        $tableOfficialShop = "object_".DataObject\OfficialShop::classId();

        $db = Db::get();

        $queryCondition = "";
        $paramsCondition = [];
        $from = "";

        if (!empty($location)) {
            $from .= "
                , t.Distance 
                FROM ( 
                    SELECT *,
                    (((acos(sin((".$latitude."*pi()/180)) * sin((".$tableGarage.".Latitude*pi()/180))+
                    cos((".$latitude."*pi()/180)) * cos((".$tableGarage.".Latitude*pi()/180)) * cos(((".$longitude." - ".$tableGarage.".Longitude)*pi()/180))))
                    *180/pi())*60*1.1515*1.609344) AS Distance
                    FROM ".$tableGarage."
                )";
        } else {
            $from .= "FROM ". $tableGarage;
        }

        $query = "
            SELECT 
            t.Name, t.Slug, t.Address, t.PostCode, t.Logo, t.Banner, t.Latitude,
            t.Longitude, t.Zoom, t.ContactPerson, t.Recommended, t.View, t.Like,
            t.Unlike, t.MetaTitle, t.MetaDescription, t.MetaKeyword, t.Email,
            t.Category, t.GarageType, t.o_id, t.o_creationDate,
            GROUP_CONCAT(DISTINCT Category.Name SEPARATOR ';') AS CategoryName,
            GROUP_CONCAT(DISTINCT GarageType.Name SEPARATOR ';') AS GarageTypeName,
            Province.Name AS Province,
            City.Name AS City,
            OfficialShop.Name as OfficialShop
            $from t
        LEFT JOIN ".$tableCategory." Category
        ON t.Category like concat('%', Category.o_id, '%')
        LEFT JOIN ".$tableType." GarageType
        ON t.GarageType like concat('%', GarageType.o_id, '%')
        LEFT JOIN (
            ".$tableCity." City INNER JOIN ".$tableProvince." Province
            ON City.Province__id = Province.o_id
        ) ON t.City__id = City.o_id
        LEFT JOIN ".$tableOfficialShop." OfficialShop
        ON t.OfficialShop__id = OfficialShop.o_id
        ";

        $queryCondition .= " WHERE t.o_published = 1";
        
        if ($condition['radius'])
        {
            $queryCondition .= " AND Distance <= ?";
            array_push($paramsCondition, $condition['radius']);
            unset($condition['radius']);
        }

        if (!empty($condition))
        {
            foreach ($condition as $key => $value) 
            {
                if ($queryCondition) $queryCondition .= " AND ";
                $queryCondition .= $key . " = ?";
                array_push($paramsCondition, $value);
            }
        }

        $query .= $queryCondition . " GROUP BY t.o_id";
        
        $query .= " ORDER BY ".$orderBy." ".$sortBy;

        $result = $db->fetchAll($query, $paramsCondition);

        return $result;
    }
}