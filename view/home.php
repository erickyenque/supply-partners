
<div class="row">
	<div class="col-12 text-center pt-5">
	<img class="img-logo" src="public/img/logo_sp.png" alt="" />
	<h1 class="text">Encuentra el proveedor adecuado a tu necesidad</h1>
	<h1>Proveedores formales, certificados y verificados</h1>
	</div>
</div>

<div class="container pt-5">
	<div class="row">
		<div class="col-3">
			<h3 class="text-center">CATEGORIAS</h3>
			<ul class="list-group list-category">
			<?php
				$categories = $dataToView["data"]['categories'];
				if(count($categories)>0){
					foreach($categories as $category){
						?>
							<li class="list-group-item">
								<a href="index.php?controller=category&action=list&id=<?php  echo $category['id']; ?>">
									<?php echo $category['name']; ?>
								</a>
							</li>            
						<?php
					}
				}else{
					?>
					<div class="alert alert-info">
						Actualmente no existen categorías.
					</div>
					<?php
				}
			?>
			</ul>
		</div>
		<div class="col-9">
			<div class="row">
				<?php
					$supplies = $dataToView["data"]['supplies'];
					if(count($supplies)>0){
						foreach($supplies as $supply){
							?>
								<div class="col-4 mb-4">
									<div class="card h-100">
										<img
											class="img-proveedor"
											src="img/maquitierra.png"
											class="card-img-top"
											alt=""
										/>
										<div class="card-body m-0">
											<h5 class="card-title"><?php echo $supply['name'];?></h5>
											<p class="m-0"><strong>RUC: </strong><?php echo $supply['ruc'];?></p>
											<p class="m-0"><strong>ALQUILA: </strong><?php echo $supply['rental_equipment'];?></p>
											<p class="m-0"><strong>CONTACTO: </strong><?php echo $supply['contact_person'];?></p>
											<p class="m-0"><strong>CELULAR: </strong><?php echo $supply['phone_number'];?></p>
											<p class="m-0"><strong>ZONA: </strong><?php echo $supply['location'];?></p>
										</div>
									</div>
								</div>            
							<?php
						}
					}else{
						?>
						<div class="alert alert-info">
							Actualmente no existen proveedores.
						</div>
						<?php
					}
				?>
			</div>
		</div>
	</div>
</div>