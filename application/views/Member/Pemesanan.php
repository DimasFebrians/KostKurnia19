<style>
	.content {
		display: flex;
		flex-direction: column;
	}
	.content .row {
		display: flex;
		flex-direction: row;
	}

	.label {
		color: #000;
	}

</style>

<?php $this->load->view('templates/User/Header_member'); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<!--_______________________________________Register_________________________________ -->

		<<div class="allcontain">
			<div class="feturedsection">
				<h1 class="text-center"><span class="bdots">&bullet; Pemesanan Kost/Kontrakan  &bullet; </span></h1>
			</div>
		</div>	
				<center>
					<form action="<?php echo $aksi; ?>" method="POST">
						<table align ="text-center">
							<input type="hidden" name="id_pesan" value="<?php echo $id_pesan; ?>">
							<input type="hidden" name="id_hunian" value="<?php echo $id_hunian; ?>">
          					<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
          					

							<tr> <td>Tanggal Mulai</td>
								<td> : </td>
								<td><div class="form-group">
									<input type="date" class="form-control" name="tanggal_mulai" placeholder="Tanggal Mulai menyewa kost" required>
								</div></td>
							</tr>

							<tr> <td>Durasi per Bulan</td>
								<td> : </td>
								<td><div class="form-group">
									<input type="radio" name="durasi" value="1 Bulan" required> 1 Bulan &nbsp;
									<input type="radio" name="durasi" value="3 Bulan" required> 3 Bulan &nbsp;
									<input type="radio" name="durasi" value="6 Bulan" required> 6 Bulan
								</div></td>
							</tr>
							<tr> <td></td>
								
								<td><button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-warning btn-block">Pesan</button></td>
								<div id="id01" class="w3-modal">
									<div class="w3-modal-content w3-card-4">
									<header class="w3-container w3-teal"> 
										<span onclick="document.getElementById('id01').style.display='none'" 
										class="w3-button w3-display-topright">&times;</span>
										<h2>Pembayaran</h2>
									</header>
									<div class="content" style="display: flex; flex-direction: column;">
										<div class="row" style="display: flex; flex-direction: row;">
											<p class="label" style="color: #000; font-size: 15px; text-align: left; width: 96.48px;">Status</p>
											<p class="isian" style="text-align: left;" >: Menunggu Pembayaran</p>
										</div>
										
										<div class="row" style="display: flex; flex-direction: row;">
											<p class="label" style="color: #000; font-size: 15px; text-align: left; flex:1.5;">Deskripsi</p>
											<p class="isian" style="text-align: left;">: Lakukan Pembayaran dengan mentransfer nominal jumlah pembayaran pada rekening BANK BCA Rekening : 8415460186 A.N : Dimas Febrian Syah
											</p>
										</div>
										<div class="row" style="display: flex; flex-direction: row;">
											<p class="label" style="color: #000; font-size: 15px; text-align: left; flex:1.5;">Lanjutan</p>
											<p class="isian" style="text-align: left;">: Jika sudah melakukan pembayaran, segera Konfirmasii
												Pembayaran dengan mengirimkan bukti pembayaran di :
												WA : 081230020302 dan Upload di menu Bayar Sewa
											</p>
										</div>
									</div>
									<footer class="w3-container">
										<button type="submit" class="btn btn-warning btn-block" value="PESAN" style="width: 200px;">OK</button>
									</footer>
									</div>
								</div>
							</tr>
						</table>
					</form>
				</center>
			</div>
		</div>
	</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	<BR>
	<BR>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php $this->load->view('templates/User/Footer'); ?>
