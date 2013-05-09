<?php
        include_once('db.php');
 
		$sql = "SELECT * FROM mahasiswa";
		$res = mysql_query($sql);
		$result = array();
 
		while( $row = mysql_fetch_array($res) )
		    array_push($result, array('nama' => $row[0],
			                          'kelas'  => $row[1],
						              'jurusan' => $row[2]
									  )
					   );
 
		echo json_encode(array("result" => $result));
		
?>