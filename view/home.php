
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
		<h3>CATEGORIAS</h3>
		<ul class="list-group list-category">
		<?php
			if(count($dataToView["data"])>0){
				foreach($dataToView["data"] as $category){
					?>
						<li class="list-group-item"><?php echo $category['name']; ?></li>            
					<?php
				}
			}else{
				?>
				<div class="alert alert-info">
					Actualmente no existen notas.
				</div>
				<?php
			}
		?>
		</ul>
	</div>
	<div class="col-9">
		<div class="row">
			<div class="col-4">
				<div class="card h-100">
					<img
						class="img-proveedor"
						src="img/maquitierra.png"
						class="card-img-top"
						alt=""
					/>
					<div class="card-body m-0">
						<h5 class="card-title">MAQUITIERRA S.A.C</h5>
						<p class="m-0"><strong>RUC:</strong> 20XXXXX</p>
						<p class="m-0">
						<strong>ALQUILA:</strong> Retroexcavadora, cargador frontal,
						tractor oruga,cama baja, etc
						</p>
						<p class="m-0"><strong>CONTACTO:</strong> Rodrigo Bazán</p>
						<p class="m-0"><strong>CELULAR:</strong> +51 958746125</p>
						<p class="m-0"><strong>ZONA:</strong> Norte</p>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card h-100">
					<img
						class="img-proveedor"
						src="img/rd_rental.png"
						class="card-img-top"
						alt=""
					/>
					<div class="card-body m-0">
						<h5 class="card-title">RD RENTAL</h5>
						<p class="m-0"><strong>RUC:</strong> 20XXXXX</p>
						<p class="m-0">
						<strong>ALQUILA:</strong> Retroexcavadora, cargador frontal,
						tractor oruga,cama baja, etc
						</p>
						<p class="m-0"><strong>CONTACTO:</strong> Rodrigo Bazán</p>
						<p class="m-0"><strong>CELULAR:</strong> +51 958746125</p>
						<p class="m-0"><strong>ZONA:</strong> Norte</p>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card h-100">
					<img
						class="img-proveedor"
						src="img/chancadora.png"
						class="card-img-top"
						alt=""
					/>
					<div class="card-body m-0">
						<h5 class="card-title">CHANCADORA DEL NORTE S.A.C</h5>
						<p class="m-0"><strong>RUC:</strong> 20XXXXX</p>
						<p class="m-0">
						<strong>ALQUILA:</strong> Retroexcavadora, cargador frontal,
						tractor oruga,cama baja, etc
						</p>
						<p class="m-0"><strong>CONTACTO:</strong> Rodrigo Bazán</p>
						<p class="m-0"><strong>CELULAR:</strong> +51 958746125</p>
						<p class="m-0"><strong>ZONA:</strong> Norte</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>