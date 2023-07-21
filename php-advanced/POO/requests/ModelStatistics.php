<?php
namespace applications\statistics;

use includes\components\CommonModel;

use includes\tools\Orm;
use includes\Adm;
use stdClass;

/**
 * Description of Model
 *
 * @author admin
 */
class ModelStatistics extends CommonModel {
    
    function __construct() {
        $this->_setTables(['demande/builders/BuilderDemande']);
    }


    /**
     * Select datas form the table "users"
     * 
     * @param array $params | (optional) Conditions [ 'Field'=>value ]
     * @param str   $period | (optional) Period or state depending on value choosed
     *                        ('all', 'archive', 'actual', 'future', 'cancel', search, or integer(year-YYYY))
     *                        'all' by default
     * @param array $groups | (optional) Group(s) Type ('participants' or 'manager') or 'all' (for all groups)
     * @return array        | Results of the selection in the database.
     */

     public function demandeGraph(  $params = [], $date_debut = [], $date_fin = [] )
     {
         $orm = new Orm( 'demandes', $this->_dbTables['demandes'], $this->_dbTables['relations'] );
 
             /* Jointures avec toutes les tables : fkeys dans 'demandes'*/
                $results = $orm    
                 ->select()
                 ->joins(['demandes' => ['users', 'request_status', 'request_locations']])
                 ->where( $params )
                 ->wherelower( $date_debut )
                 ->wheregreater( $date_fin )
                 ->execute( true );
 
         return $results;
    }

    public function exempleStat()
    {

        $demandes = $this->demandeGraph( [], [ 'demande_date_creation' => '2022-01-01 00:00:00' ], [ 'demande_date_creation' => '2021-11-01 00:00:00' ]);
        //$demandes = $this->demandeGraph( );
        
        $array = [ 'lundi'=>10, 'mardi'=>35, 'mercredi'=>30, 'jeudi'=>35, 'vendredi'=>14, 'samedi'=>17, 'dimanche'=>30 ];

        if( isset( $demandes ) )
        {
            foreach( $demandes as $n => $demande )
            {
                //to complete !
            }
            $array[ 'lundi' ] = count( $demandes );
        }
        
        //$arrayOne = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
        //$arrayTwo = ["30", "20", "24", "10", "50", "30", "25"];
        //return [$arrayOne, $arrayTwo];
        return $array;
    }
    
}