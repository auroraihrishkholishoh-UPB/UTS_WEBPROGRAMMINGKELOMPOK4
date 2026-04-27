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
	<title>PESAN TIKET BUS</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<!-- Default Card Example -->
						<div class="card mb-5">
							<div class="card-header">
								<i class="fas fa-info-circle"></i> Deskripsi Tiket
							</div>
							<div class="card-body">
								<ul>
									<li>â–º Tujuan <b><?php echo $asal['kota_tujuan']." - ".$jadwal['kota_tujuan']." [".$jadwal['kd_jadwal']."]"; ?></b></li>
									<li>â–º Nama Bus  <b><?php echo $jadwal['nama_bus'];  ?></b></li>
									<li>â–º Nomor Bus  <b><?php echo $jadwal['plat_bus'];  ?></b></li>
									<li>â–º Keberangkatan <b><?php echo strtoupper($asal['kota_tujuan'])." - ".$asal['terminal_tujuan']; ?></b></li>
									<li>â–º Tiba <b><?php echo strtoupper($jadwal['kota_tujuan'])." - ".$jadwal['terminal_tujuan']; ?></b></li>
									<li>â–º Harga: <b>Rp <?php echo number_format((float)($jadwal['harga_jadwal']),0,",",".") ; ?></b></li>
									<li>â–º Tanggal Berangkat <b><?php echo nama_hari($tanggal).",".tgl_indo($tanggal) ?></b></li>
									<li>â–º Waktu Berangkat <b>jam <?php echo $jadwal['jam_berangkat_jadwal']; ?></b></li>
									<li>â–º Waktu Tiba <b>jam <?php echo $jadwal['jam_tiba_jadwal']; ?> </b></li>
									<li>â–º Silakan pilih kursi</li>
									<li>â–º Pilih maksimal 4 kursi</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<form action="<?php echo base_url('tiket/afterbeli') ?>" method="get">
							<input type="hidden" name="tgl" value="<?php echo $tanggal ?>">
							<!-- Default Card Example -->
							<div class="card mb-5" >
								<div class="card-header">
									<i class="fas fa-bus"></i> Pilihan Kursi
								</div>
								<center>
<table class="">
<?php
$capacity = intval($jadwal['kapasitas_bus']);
if ($capacity > 23) {
    $capacity = 23;
}
function seat_checked($number, $kursi) {
    return in_array(array('no_kursi_order' => (string)$number), $kursi) ? 'disabled checked' : '';
}
?>
<tr>
    <td class='btn-group' width='139'>
        <label class='btn btn-default'>
            <input name='kursi[]' value='1' id='1' onclick='cer(this)' autocomplete='off' type='checkbox' <?= seat_checked(1, $kursi) ?>>&nbsp;1
        </label>
        <label class='btn btn-default'>
            <input name='kursi[]' value='2' id='2' onclick='cer(this)' autocomplete='off' type='checkbox' <?= seat_checked(2, $kursi) ?>>&nbsp;2
        </label>
    </td>
    <td class='btn-group' width='139'>
        <label class='btn btn-primary'>
            <a value='' autocomplete='off' disabled='disabled'>Kursi Pengemudi</a>
        </label>
    </td>
</tr>
<?php
$seat = 3;
while ($seat <= $capacity) {
?>
    <tr>
        <td class='btn-group' width='139'>
            <?php for ($i = 0; $i < 2; $i++): ?>
                <?php if ($seat <= $capacity): ?>
                    <label class='btn btn-default'>
                        <input name='kursi[]' value='<?php echo $seat; ?>' id='<?php echo $seat; ?>' onclick='cer(this)' autocomplete='off' type='checkbox' <?php echo seat_checked($seat, $kursi); ?>>&nbsp;<?php echo $seat; ?>
                    </label>
                    <?php $seat++; ?>
                <?php endif; ?>
            <?php endfor; ?>
        </td>
        <td class='btn-group' width='139'>
            <?php for ($i = 0; $i < 2; $i++): ?>
                <?php if ($seat <= $capacity): ?>
                    <label class='btn btn-default'>
                        <input name='kursi[]' value='<?php echo $seat; ?>' id='<?php echo $seat; ?>' onclick='cer(this)' autocomplete='off' type='checkbox' <?php echo seat_checked($seat, $kursi); ?>>&nbsp;<?php echo $seat; ?>
                    </label>
                    <?php $seat++; ?>
                <?php endif; ?>
            <?php endfor; ?>
        </td>
    </tr>
<?php
}
?>
</table>
</center>
												</div>
											</div>
											<!-- Log on to codeastro.com for more projects -->
											<div class="col-lg-4">
												<!-- Default Card Example -->
												<div class="card mb-5">
													<div class="card-header">
														<i class="fas fa-bookmark"></i> Konfirmasi Booking
													</div>
													<div class="alert alert-success" role="alert">
														<p>Setelah memilih kursi, silakan klik tombol 'Lanjut' untuk melanjutkan.</p>
														<div class='btn-group'>
															<a href="<?php echo base_url('tiket/cekjadwal/'.$tanggal.'/'.$asal['kd_tujuan'].'/'.$jadwal['kota_tujuan']) ?>" class='btn btn-default'>Kembali</a>
															<input class="btn btn-info pull-right" disabled="disabled" type="submit" value="Lanjut">
															
														</div>
													</div>
													<form>
													</div>
												</div>
											</section>
											<!-- End banner Area -->
											<!-- End Generic Start -->
											<!-- Log on to codeastro.com for more projects -->
											<!-- start footer Area -->
											<?php $this->load->view('frontend/include/base_footer'); ?>
											<!-- js -->
											<script type="text/javascript">
										     jQuery(document).ready(function(){
									     
									          var checkboxes = $("input[type='checkbox']"),
									              submitButt = $("input[type='submit']");

									          checkboxes.click(function() {
									              submitButt.attr("disabled", !checkboxes.is(":checked"));
												  
									          });

									         })
									                                                  
																					                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
										    </script>
											<script type="text/javascript">
											var count=0
											function cer(elem){
											if (elem.checked) {
											count = count + 1;
											if (count>4) {
											count = 4;
											swal("Error", "Sorry you can only choose 4 seats!", "error");
											elem.checked = false;
											}
											}else{
											count = count-1;
											}
											}
											</script>
											<?php $this->load->view('frontend/include/base_js'); ?>
										</body>
									</html>



