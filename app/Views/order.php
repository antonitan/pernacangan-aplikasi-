<main id="main" class="main">

    <div class="pagetitle">
        <h1>Orderan Paket cuci</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

   <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Order</h5>

  <a href="<?= base_url('home/torder') ?>"><button class="btn btn-primary"><i class="bi bi-plus"></i>Tambah</button></a>

<table class="table table-striped">
    <thead>
      <tr>
        <th width="3%">No</th>
        <th>no order</th>
        <th>tanggal order</th>
        <th>nama pelanggan</th>
        <th>jenis paket</th>
        <th>waktu kerja</th>
        <th>berat</th>
        <th>aksi</th>
        <?php
          if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) {
            ?>
        <?php } ?>
      </tr>
    </thead>
    <tbody>

        <?php
        $no=1;
        foreach ($takdirestui as $key => $value) {
           ?>
           <tr>
               <td><?php echo $no++ ?></td>
               </td>
               <td><?= $value->nomor_order ?></td>
               <td><?= $value->tgl_masuk ?></td>
               <td><?= $value->nama ?></td>
                <td><?= $value->nama_paket ?></td>
                 <td><?= $value->waktu_kerja ?></td>
               <td><?= $value->berat ?></td>
               <?php
          if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) {
            ?>
               <td><a href="<?= base_url('home/edit_order/' . $value->id_order) ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
            <a href="<?= base_url('home/hapus_order/' . $value->id_order) ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
               </td>
                <?php } ?>
           </tr> 

  <?php
  }
  ?>

</tbody>
</table>
              </div>
            </div>
        </div>
    </section>
    </main>