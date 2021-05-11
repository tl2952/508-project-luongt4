<tfoot>
	<tr>
		
		<td>
			<?php
				if(!ISSET($_POST['Clear'])){
			?>
				<form method="POST" action="">
					<button class="btn btn-success" name="Clear">Clear</button>
				</form>
			<?php
				}else{
					$Clear = mysqli_query($conn, "TRUNCATE TABLE Cart") or die(mysqli_error());
					echo "<meta http-equiv='refresh' content='0'>";
					
			?>
				
			<?php
				}
			?>
		</td>
	</tr>
</tfoot>