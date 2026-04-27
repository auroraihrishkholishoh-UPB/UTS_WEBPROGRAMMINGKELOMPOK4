<!DOCTYPE html>
<html>
	<head>
		<title>Tiket Dibatalkan</title>
		<meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		
	</head>
	<body style="font-family: tahoma; font-size: 12px;">
		<center>
		<table class="wrapper" width="600px" style="padding: 0; margin: 0; border-collapse: collapse; border: solid 1px #fd7521;">
			<tr class="header" style="background-color:#484B51;">
				<td style="padding-right:10px;" align="left">
					<a href="<?= base_url() ?>" target="_blank">
						<h4>BUS TICKET BOOKING</h4>
					</a>
				</td>
				<td style="padding-right:10px;" align="right">
					<a href="<?= base_url() ?>" target="_blank">
						<img height="45" src="https://cdn4.iconfinder.com/data/icons/dot/256/bus.png" alt="">
					</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p style="text-align: justify; padding: 10px;">
						Dear Customer,<br>
						Your ticket has been cancelled.
					</p>
					<p style="text-align: justify; padding: 10px;">
					Here's a Summary of Your Cancelled Ticket:
						<table width="100%" style="font-size: 14px; margin: 10px;">
								<tr>
									<td>
									Booking Number
									</td>
									<td>:</td>
									<td>
										<strong><?= $sendmail['kd_order']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
									Purchase Description
									</td>
									<td>:</td>
									<td>
										<strong>Schedule Code <?= $sendmail['kd_jadwal'] ?></strong><br>
										<strong>Depart <?= hari_indo(date('N',strtotime($sendmail['tgl_berangkat_order']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$sendmail['tgl_berangkat_order'].''))).', '.date('H:i',strtotime($sendmail['jam_berangkat_jadwal'])); ?></strong><br>
										<strong><?= $count; ?> Seat</strong>
									</td>
								</tr>
								<tr>
									<td>
									Purchase Date
									</td>
									<td>:</td>
									<td>
										<strong><?= $sendmail['tgl_beli_order']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
									Cancellation Date
									</td>
									<td>:</td>
									<td>
										<strong><?= date('Y-m-d H:i:s'); ?></strong>
									</td>
								</tr>
									</table>
								</p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<p style="text-align: center; padding: 10px;">
									If you have any questions, please contact our support.
								</p>
							</td>
						</tr>
						<tr class="footer" style="background-color:#484B51; color: white;">
							<td colspan="2" align="center">
								<p>&copy; 2023 BUS TICKET BOOKING SYSTEM. All rights reserved.</p>
							</td>
						</tr>
					</table>
				</center>
			</body>
		</html>