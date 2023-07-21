<?php
namespace applications\statistics;

use includes\components\CommonController;
//use includes\Request;
use includes\Api;

use stdClass;

class Controller extends CommonController{

    
    
    protected function _setDatasView()
    {
        $this->_setModels( [ 'statistics/ModelStatistics', 'demande/ModelDemandes' ] );

        $modelStatistics     = $this->_models[ 'ModelStatistics' ];
        $modelDemandes       = $this->_models[ 'ModelDemandes' ];

    
        switch( $this->_action )
        {          
            // API
            case 'api':
            
                Api::apiBlocked();
                    
            break;

            default :
                
                $this->_datas = new stdClass;

                $this->_datas->stats = $modelStatistics->exempleStat();
                
                $this->_view = 'statistics/stat_graphs';
                
            break;
            
        } 
    }
}