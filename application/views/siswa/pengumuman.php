<!-- menampilkan pengumuman yg sdh ada ke view  -->

<div class="clearfix"></div>
	<div class="konten">
		<div class="posting">
			<h3 Pengumuman Terbaru </h3>

			<?php foreach ($pengumuman as $list) { ?>
			<div class="ringkasan">
				 <h3><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>">
<?php echo $list['judul']; ?></a></h3>
			<?php echo $list['ringkasan']; ?>
			</div>
<?php } ?>

		</div>
		<div class="anggota">
		
 