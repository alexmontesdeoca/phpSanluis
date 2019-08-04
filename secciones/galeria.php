<?php
	
	$directorio = "imagenes";
	
	$dir = opendir($directorio);

	while($categoria = readdir($dir)){
		
		if($categoria != "." && $categoria != ".."){
			
		?>
			<div class="row">
				<div class="col-xs-12">
					<h1 class="page-header"><?= ucfirst($categoria); ?></h1>
				</div>
			</div>

			<div class="row">
			<?php
			
				$subDirectorio = "$directorio/$categoria";
				
				$subDir = opendir($subDirectorio);
				/*
				while($pelicula = readdir($subDir)):
					if($pelicula != "." && $pelicula != ".."):
				*/	
					$img = glob("$subDirectorio/*.jpg");
					
					foreach($img as $imagen):
					
			?>
						

							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div href="#" class="thumbnail">
									<img src="<?= $imagen; ?>" alt="" class="img-responsive">

									<div class="caption">
										<h3 class="text-center"></h3>
										<a href="#" class="btn btn-success btn-block btn-xs">Ver</a>
									</div>

								</div>
							</div>
						
		
		
		<?php
			endforeach;
		/*
				endif;
			endwhile;
			*/
		?>
			</div>
		<?php
		
		}
		
	}