<?

namespace Aducworth\Edmunds;

class VehicleApi {

	function __construct( $key ) {
		
		$this->edmunds = new EdmundsApi( $key );
		
	}
	
	public function getMakes( $data = array() ) {
		
		return $this->edmunds->call( '/vehicle/v2/makes', $data );
		
	}
	
	public function getModels( $make, $model = null, $data = array() ) {
		
		return $this->edmunds->call( '/vehicle/v2/' . $make . '/' . ($model?$model:'models'), $data );
		
	}
	
	public function getMaintenanceSchedule( $id ) {
		
		return $this->edmunds->callv1( '/maintenance/actionrepository/findbymodelyearid', array( 'modelyearid' => $id ) );
		
	}
	
	public function getModelsWithMaintenance() {
	
//		            [1321] => 100531069
//            [1322] => 1450
//            [1323] => 1453
//            [1324] => 1452
//            [1325] => 1455
//            [1326] => 1454
//            [1327] => 1642
//            [1328] => 200422449
	
		return $this->edmunds->callv1( '/maintenance/actionrepository/findmodelyearidswithmaintenanceschedule' );
		
	}
	
}

?>