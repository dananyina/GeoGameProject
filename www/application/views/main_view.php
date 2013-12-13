<div>
	<table>
		<tr>
			<td>
				<div id="image_place">
					<img src="<?php echo $data[0]["path_img"]?>" class="inside_div">
				</div>
			</td>
			<td rowspan=3>
				<div id="map" class="smallmap">
				<div id="docs"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				Points:<div></div>
				</br>
				Name:
				<?php echo $data[0]["name"]?>
				</br>
				X:
				<?php echo $data[0]["x"]?>
				</br>
				Y:
				<?php echo $data[0]["y"]?>
				</br>
			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
	</table>
</div>