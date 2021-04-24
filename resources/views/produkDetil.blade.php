@extends('layout/main', ['page' => 'Produk'])

@section('content')
   <?php include 'db.php' ?>
   <div class="section">
		<div class="container">

			<h1 class="text-center font-weight-bold serif mb-5 mt-2" style="padding-top: 20px">LIST PRODUK</h1>

			<div class="row">

				<div class="col-md-6" data-aos="fade-zoom-in">
						<dl class="row">
							<div class="col-sm-12 text-center" style="padding-bottom: 20px">
								<img src="img/produk/<?= $_GET["gambar"]; ?>" height="250 px"></div>
							<dt class="col-sm-4">Nama Produk</dt>
								<dd class="col-sm-8"><?php echo $_GET["nama"]; ?></dd>	
							<dt class="col-sm-4">Proses</dt>
								<dd class="col-sm-8"><?php echo $_GET["proses"]; ?></dd>
							<dt class="col-sm-4">Berat Produk</dt>
								<dd class="col-sm-8"><?php echo $_GET["berat"]; ?></dd>
							<dt class="col-sm-4">Cycle Time</dt>
								<dd class="col-sm-8"><?php echo $_GET["cycle"]; ?></dd>			
							<dt class="col-sm-4">Keterangan</dt>
								<dd class="col-sm-8">
								<?php if ($_GET["jenis"] === "botol") {
											echo $arrbotol[$_GET["index"]]["keterangan"];
								} elseif ($_GET["jenis"] === "pet") {
											echo $arrpet[$_GET["index"]]["keterangan"];
								} elseif ($_GET["jenis"] === "cap") {
											echo $arrcap[$_GET["index"]]["keterangan"];
								} elseif ($_GET["jenis"] === "pump") {
											echo $arrpump[$_GET["index"]]["keterangan"];
								}
								?>
								</dd>			
						</dl>
				</div>

				<div class="col-md-6" data-aos="fade-zoom-out">
					<div class="accordion" id="accordionExample">

						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									BOTOL
								</button>
								</h5>
							</div>
								<?php foreach ($arrbotol as $nm ) : ?>	
									<div id="collapseOne" class="collapse <?php if ( $_GET["jenis"] == 'botol') {echo 'show';}; ?>" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
										<a class="dropdown-item" href="produkDetil?index=<?= $nm["index"] ?>&jenis=<?= $nm["jenis"] ?>&nama=<?= $nm["nama"]; ?>&proses=<?= $nm["proses"] ?>&berat=<?= $nm["berat"] ?>&cycle=<?= $nm["cycle"] ?>&gambar=<?= $nm["gambar"] ?>"><?= $nm["nama"] ?></a>
										</div>
									</div>
								<?php endforeach; ?>
						</div>

						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									PET
								</button>
								</h5>
							</div>
								<?php foreach ($arrpet as $nm ) : ?>	
									<div id="collapseTwo" class="collapse <?php if ( $_GET["jenis"] == 'pet') {echo 'show';}; ?>" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">
										<a class="dropdown-item" href="produkDetil?index=<?= $nm["index"] ?>&jenis=<?= $nm["jenis"] ?>&nama=<?= $nm["nama"]; ?>&proses=<?= $nm["proses"] ?>&berat=<?= $nm["berat"] ?>&cycle=<?= $nm["cycle"] ?>&gambar=<?= $nm["gambar"] ?>"><?= $nm["nama"] ?></a>
										</div>
									</div>
								<?php endforeach; ?>
						</div>

						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									CAP
								</button>
								</h5>
							</div>
								<?php foreach ($arrcap as $nm ) : ?>	
									<div id="collapseThree" class="collapse <?php if ( $_GET["jenis"] == 'cap') {echo 'show';}; ?>" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
										<a class="dropdown-item" href="produkDetil?index=<?= $nm["index"] ?>&jenis=<?= $nm["jenis"] ?>&nama=<?= $nm["nama"]; ?>&proses=<?= $nm["proses"] ?>&berat=<?= $nm["berat"] ?>&cycle=<?= $nm["cycle"] ?>&gambar=<?= $nm["gambar"] ?>"><?= $nm["nama"] ?></a>
										</div>
									</div>
								<?php endforeach; ?>
						</div>

						<div class="card">
							<div class="card-header" id="headingFour">
								<h5 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									PUMP
								</button>
								</h5>
							</div>
								<?php foreach ($arrpump as $nm ) : ?>	
									<div id="collapseFour" class="collapse <?php if ( $_GET["jenis"] == 'pump') {echo 'show';}; ?>" aria-labelledby="headingFour" data-parent="#accordionExample">
										<div class="card-body">
										<a class="dropdown-item" href="produkDetil?index=<?= $nm["index"] ?>&jenis=<?= $nm["jenis"] ?>&nama=<?= $nm["nama"]; ?>&proses=<?= $nm["proses"] ?>&berat=<?= $nm["berat"] ?>&cycle=<?= $nm["cycle"] ?>&gambar=<?= $nm["gambar"] ?>"><?= $nm["nama"] ?></a>
										</div>
									</div>
								<?php endforeach; ?>
						</div>

					</div>
				</div>

			</div>
		</div>
   </div>
@endsection