<?php

namespace AppBundle\Model\DataObject\Garage;

use Pimcore\Model\DataObject\Garage\Listing as BaseGarageListing;

class Listing extends BaseGarageListing
{
	
    public function findByLocation()
    {
    	return $garageListing;
    	
		// $garage->onCreateQuery(function (QueryBuilder $select){
		//     $select->join('object_3', 'GarageType = o_id');
		// });
    	// print_r($this->garageListing); die;
    }


}