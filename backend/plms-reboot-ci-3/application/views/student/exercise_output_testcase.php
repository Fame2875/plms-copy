
<!--- Testcase -->
<?php
	$count=0;
	for($testcase_count = 0; $testcase_count < $num_of_testcase; $testcase_count++) {
		$testcase_row = $testcase_array[$testcase_count];
		$action = 'exercise_submission_testcase';

		if ($testcase_row['show_to_student']=="yes") {
			$count++;
			$num_rows = strlen($testcase_row['testcase_output']);
			$num_rows = ceil($num_rows/80);
			$output = $testcase_row['testcase_output'];
			for($i=0; $i<strlen($output); $i++) {
				if ($output[$i]=="\n")
					$num_rows++;
			}
			

			$testcase_html ='	
<div class="row">
	<div class="col-md-10">
		<div class="panel panel-default">
			<div class="panel-heading " style="font-size:24px;color:blue;">Testcase : #';
				$testcase_html .= $count;			
				
				$testcase_html .= '
				<span style="font-size:20px;color:blue;">';
					$testcase_html .= $testcase_row['testcase_note'];		
					$testcase_html .= '
				</span>
			</div>';
		
			$testcase_html .= '	
			<div class="panel-body">
				<div class="row">
					<div class="col-md-10">
						<div  style="font-family: Courier;font-size: 16px;border:2px blue;">';
							$testcase_html .= '<code><textarea class="testcase testcase-sample" cols="80" rows="';
							$testcase_html .= $num_rows;
							$testcase_html .= '"  readonly>';
							$testcase_html .= $testcase_row['testcase_output'];
							$testcase_html .='</textarea></code>'; 
							$testcase_html .= '
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>';
	

	$testcase_html .= '	
</div>';
echo $testcase_html;
echo '<!-- <pre>'; print_r($data_for_testcase); echo '<pre> =-->';

		}
	}
?>

<!--- Testcase End -->


			



