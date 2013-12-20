<div id = "main_part">
	<table>
		<tr>
			<td>
				<div id="image_place">
					<img src="<?php echo $data[0]["path_img"]?>" >
				</div>
			</td>
			<td rowspan=3>
				<div id="map" class="smallmap">
				<div id="docs"></div>
				</div>
			</td>
		
			<td>
				Points:<div></div>
				<li class="s1"><a href="/records"><span class="z01c8m31" id="z01c8m31_1">qwert</span></a>
				
				<br>
				Name:
				
				<?php echo $data[0]["name"]?>
				<br>
				X:
				<?php echo $data[0]["x"]?>
				<br>
				Y:
				<?php echo $data[0]["y"]?>
				<br>
			</td>
			
		<tr>
			<td>
			<a class="button large red" href="/"><span>Next</span></a>
			</td>
		</tr>
	</table>
</div>