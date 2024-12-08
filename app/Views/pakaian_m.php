<main id="main" class="main">

    <div class="pagetitle">
        <h1>Table Barang masuk</h1>
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

<a href="<?=base_url('home/pbm')?>">
  <button class="btn btn-success">+Tambah</button>
</a>
<div class="search-container">
        <input type="text" id="search-input" placeholder="Search..." onkeyup="searchFunction()">
        <button onclick="searchFunction()">Search</button>
    </div>
<table class="table table-striped">
    <thead>
      <tr>
        <th width="3%">No</th>
        <th>nama_pakaian</th>
        <th>berat</th>
        <th>Tanggal</th>
     
        <?php
        if (session()->get('level')==1) {
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
               <td><?= $value->nama_barang ?></td>
               <td><?= $value->berat?></td>
               <td><?= $value->tanggal_masuk?></td>
            <a href= "<?= base_url('home/hapus_pakaian_m/'.$value->id_pakaian) ?>" class="btn btn-danger"><i class="fas fa-eraser"></i>Hapus</a>
                  
                 </td>
                <?php
                if (session()->get('level')==1) {
                ?>
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