<?php
	include 'database.php';
	$returnString = '';
	
	try {
		startConnection($link);
	
		if (isset($_POST['callFunction_Add_Name']) && isset($_POST['callFunction_Add_Email']) &&
			isset($_POST['callFunction_Add_Phone']) && isset($_POST['callFunction_Add_Total'])) {
	
			if (!mysqli_query($link, sql_AddNewGuest($_POST['callFunction_Add_Name'], $_POST['callFunction_Add_Email'], $_POST['callFunction_Add_Phone'], $_POST['callFunction_Add_Total']))) {
				throw new Exception('Failed to insert new guest.', 1);
			}
			else {
				$returnString = json_encode(array(
					'success' => array(
						'msg' => 'Success',
						'value' => 'Success',
					)
				));
			}
		}
		//End of Check For Add New Guest
		
		if (isset($_POST['callFunction_Update'])) {
			if (isDatabaseConnected()) {
				
				$result = mysqli_query($link, sql_LoadGuestList());
					
				$htmlOutput = '';
				$totalNumber = 0;
							
				while($row = mysqli_fetch_array($result)) {
					$htmlOutput .= '<div class="registered-guest">';
					$htmlOutput .= '<span class="name">' . $row['name'] . '</span>';
					$htmlOutput .= '<span class="guest">' . $row['total'] . '</span>';
					$htmlOutput .= '</div>';			
					$totalNumber += $row['total'];
				}
				$htmlOutput .= '<div class="registered-guest-header">';
				$htmlOutput .= '<span class="name">Total Number of Guests</span>';
				$htmlOutput .= '<span class="guest">' . $totalNumber . '</span>';
				$htmlOutput .= '</div>';			
				$returnString = json_encode(array(
					'success' => array(
						'msg' => 'guest_list',
						'value' => $htmlOutput,
					)
				));
			}
			else {
				throw new Exception('Failed to update guest list.', 2);
			}
		}
	

		if (isDatabaseConnected()) {
			closeConnection($link);
		}	
	}
	catch (Exception $e) {
		$returnString = json_encode(array(
				'error' => array(
					'msg' => $e->getMessage(),
					'code' => $e->getCode(),
				)
			));
	}
	echo $returnString;
?>