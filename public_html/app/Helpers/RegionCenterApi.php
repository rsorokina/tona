<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;
use App\Models\RegionCenter;

/**
 * Class RegionCenterApi
 *
 * @package App\Helpers
 */
class RegionCenterApi {
    
    /**
     * RegionCenterApi constructor.
     */
    public function __construct()
    {
        
    }
    
    /**
     * RegionCenterApi getRegionCenters.
     * 
     * @return array
     */
    public function getRegionCenters() {
        return RegionCenter::all();
    }
    
    /**
     * RegionCenterApi getRegionCenters.
     * 
     * @return json
     */
    public function getJsonRegionCenters() {
        return json_encode($this->getRegionCenters());
    }

}