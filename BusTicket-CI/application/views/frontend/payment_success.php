<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Log on to codeastro.com for more projects -->
		<!-- Site Title -->
	<title>Pembayaran</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
		<?php $this->load->view('frontend/include/base_css'); ?>
		<style>
			.payment-success {
				animation: slideIn 0.5s ease-in-out;
			}
			@keyframes slideIn {
				from {
					opacity: 0;
					transform: translateY(20px);
				}
				to {
					opacity: 1;
					transform: translateY(0);
				}
			}
			.success-badge {
				font-size: 60px;
				color: #28a745;
				margin: 20px 0;
			}
		</style>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10">
						<!-- Default Card Example -->
						<div class="card mb-5">
							<div class="card-header" align="center">
								<b><i class="fas fa-ticket-alt"></i> KODE PEMESANAN <?= $tiket[0]['kd_order']; ?></b>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<thead>
											<tr>
												<th scope="col">Tiket</th>
												<th scope="col">Nomor Jadwal [Kode Bus]</th>
												<th scope="col">Keberangkatan</th>
												<th scope="col">Nomor Kursi</th>
												<th scope="col">Harga</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; foreach ($tiket as $row) { ?>
											<tr>
												<?php $now = hari_indo(date('N',strtotime($row['tgl_berangkat_order']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$row['tgl_berangkat_order'].''))).', '.date('H:i',strtotime($row['jam_berangkat_jadwal']));?>
												<th scope="row"><?= $row['kd_tiket']; ?></th>
												<td><?= $row['kd_jadwal']." [".$row['kd_bus'].']' ?></td>
												<td><?= $now?></td>
												<td><?= $row['no_kursi_order']; ?></td>
												<td>Rp <?= number_format($row['harga_jadwal'], 0, ',', '.'); ?></td>
											</tr>
											<?php } ?>
											<td colspan="5"> <b class="pull-right">Total Rp <?php $total = $count * $tiket[0]['harga_jadwal'] ; echo number_format($total, 0, ',', '.') ?></b></td>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-10">
						<!-- Default Card Example -->
						<div class="card payment-success">
							<div class="card-header" align="center">
								<i class="fas fa-check-circle"></i> Status Pembayaran
							</div>
							<div class="card-body" align="center">
								<div class="alert alert-success" role="alert">
									<div class="success-badge">
										<i class="fas fa-check-circle"></i>
									</div>
									<h4><b>SUDAH DIBAYAR</b></h4>
									<p>Pembayaran Anda telah dikonfirmasi dan diproses.</p>
									<hr>
									<p><b>Total Pembayaran:</b></p>
									<h3 class="text-success">Rp <?= number_format($total,0,',','.') ;?></h3>
									<hr>
									<?php if(!empty($tiket[0]['qrcode_order'])): ?>
										<p><b>QR Code Tiket:</b></p>
										<img src="<?= base_url($tiket[0]['qrcode_order']) ?>" alt="QR Code" style="max-width: 200px; margin: 20px 0;">
										<hr>
									<?php endif; ?>
									<p class="text-muted">Tiket sudah siap digunakan. Silakan tunjukkan QR code ini saat naik bus.</p>
									<br>
									<a href="<?= base_url('tiket/cektiket') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali ke Cek Tiket</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<!-- Log on to codeastro.com for more projects -->
			<!-- start footer Area -->
			<?php $this->load->view('frontend/include/base_footer'); ?>
			<!-- js -->
			<?php $this->load->view('frontend/include/base_js'); ?>
		</body>
	</html>
