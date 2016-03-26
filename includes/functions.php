<?php
	require_once('includes/db.php');
	
	function orderSizes($mysqli){
		$query = "SELECT * FROM sizes ORDER BY size_id";

		if ($result = $mysqli->query($query)) {
			echo '<select name="size">';
			while ($row = $result->fetch_assoc()) {
				echo '
					   <option value="'.$row['size_id'].'">'.$row['name'].' - <b>'.$row['cost'].'</option>
				';
				//echo '<label><input type="radio" name="size" value="'.$row['size_id'].'"> '.$row['name'].' - <b>'.$row['cost'].'</b></label><br>';
			}
			echo '</select> ';

			$result->free();
		}
	}
	
	function orderExtras($mysqli){
		$query = "SELECT * FROM extras ORDER BY extra_id";
		
		echo '<div class="checkboxes">';
		if ($result = $mysqli->query($query)) {
			while ($row = $result->fetch_assoc()) {
				echo '<label>
					<input type="checkbox" name="extra[]" value="'.$row['extra_id'].'"><span></span> '.$row['name'].' - <b>'.$row['cost'].'</b>
</label><br>';
			}

			$result->free();
		}
		echo '</div>';
	}
	
	function completeOrder($mysqli){
		if(isset($_POST['completeOrder'])){
			if(isset($_POST['size'])){
				if(trim($_POST['address']) != ""){
					$totalPrice = 0;
			
					$getSizeInfo = "SELECT * FROM sizes WHERE size_id = $_POST[size]";
					
					if($result = $mysqli->query($getSizeInfo)){
						$getSizeI = $result->fetch_assoc();
						
						$sizeId = $getSizeI['size_id'];
						$sizeName = $getSizeI['name'];
						$sizePrice = $getSizeI['cost'];
						
						$totalPrice += $sizePrice;
					}
					
					$checkboxes = isset($_POST['extra']) ? $_POST['extra'] : array();
					
					$extras = '';
					
					foreach($checkboxes as $value) {
						$getExtrasInfo = "SELECT * FROM extras WHERE extra_id = $value";
						
						if($result = $mysqli->query($getExtrasInfo)){
							$getExtrasI = $result->fetch_assoc();
							
							
							$extras .= $getExtrasI['name'].',';
							
							$totalPrice += $getExtrasI['cost'];
						}
					}
					
					echo '<div class="form-suc">';
					echo 'You hungry animal, you just ordered a <b>'.$sizeName.'</b> pizza with <b>'.$extras.'</b><br>';
					echo 'And this, my hungry friend, will cost you <b>$'.$totalPrice.'</b>! The pizza will be delivered at '.$_POST['address'];
					echo '</div>';
					
					$InsertPizza = "INSERT INTO pizza VALUES ('', $sizeId, '$_POST[address]')";
					$mysqli->query($InsertPizza);
					$pizza_id = $mysqli->insert_id;
					
					foreach($checkboxes as $value){
						$InsertCustom = "INSERT INTO custom VALUES ('', $pizza_id, $value)";
						$mysqli->query($InsertCustom);
						
						if (!$mysqli->query($InsertCustom)) {
							printf("Errormessage: %s\n", $mysqli->error);
						}
					}


				}else{
					echo '<div class="form-error">You should write your address!</div>';
				}
			}else{
				echo '<div class="form-error">Select a size, you hungry animal!</div>';
			}
		}
	}
	
	function randomExtras($mysqli){
		$getExtras = "SELECT * FROM extras ORDER BY RAND() LIMIT 5";
		
		$generated = array();
		
		echo '<div class="checkboxes">';
		if ($result = $mysqli->query($getExtras)) {
			while ($row = $result->fetch_assoc()) {
				echo '<label><input type="checkbox" name="extra[]" value="'.$row['extra_id'].'" checked><span></span> '.$row['name'].' - <b>'.$row['cost'].'</b></label><br>';
				array_push($generated, intval($row['extra_id']));
			}

			$result->free();
		}
		echo '</div>';
		
		//$generated = substr($generated, 0, -1);	
		
		$getMoreExtras = "SELECT * FROM extras WHERE extra_id NOT IN (" . implode(",", $generated) . ") ORDER BY extra_id";

		echo '<div class="checkboxes">';
		
		if ($result = $mysqli->query($getMoreExtras)) {		
			while ($row = $result->fetch_assoc()) {
				echo '<label><input type="checkbox" name="extra[]" value="'.$row['extra_id'].'"><span></span> '.$row['name'].' - <b>'.$row['cost'].'</b></label><br>';
			}
			$result->free();
		}
		
		echo '</div>';
	}
?>