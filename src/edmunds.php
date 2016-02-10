<?

namespace Aducworth\Edmunds;

class EdmundsApi {

	private $base_url = 'http://api.edmunds.com/api';
	
	private $v1_base_url = 'https://api.edmunds.com/v1/api';
	
	private $key;
	
	function __construct( $key ) {
		
		$this->key = $key;
		
	}
	
	public function call( $api_call, $data = array() ) {
	
		$data['fmt'] 		= 'json';
		$data['api_key'] 	= $this->key;
	
		$url = $this->base_url . $api_call . '?' . $this->formatData( $data );
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$json = curl_exec($ch);
		curl_close($ch);
		
		$results = json_decode( $json );
		
		return $results;
		
	}
	
	public function callv1( $api_call, $data ) {
		
		$data['fmt'] 		= 'json';
		$data['api_key'] 	= $this->key;
	
		$url = $this->v1_base_url . $api_call . '?' . $this->formatData( $data );
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$json = curl_exec($ch);
		curl_close($ch);
		
		$results = json_decode( $json );
		
		return $results;

		
	}
	
	public function formatData( $data ) {
		
		$toreturn = array();
		
		foreach( $data as $key => $value ) {
			
			$toreturn[] = $key . "=" . $value;
			
		}
		
		return implode( '&', $toreturn );
		
	}
	
}

?>