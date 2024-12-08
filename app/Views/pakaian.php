<main id="main" class="main">

    <div class="pagetitle">
        <h1>Table pakaian</h1>
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

<div>
  <a href="<?= base_url('home/tp') ?>"><button class="btn btn-success">+Tambah</button></a>
<table class="table datatable">
  <div class="search-container">
    </div>
    <div>
        <input type="text" id="search-input" placeholder="Search..." onkeyup="searchFunction()">
        <button onclick="searchFunction()">Search</button>
    </div>
    <thead>
      <tr>
        <th width="3%">No</th>
        <th>Nama pakaian</th>
        <th>Kode pakaian</th>
         <th>pengerjaan</th>
        <th>berat</th>
          <?php
          if (session()->get('level')==1) {
            ?>
        <th>Aksi</th>
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
               <td><?= $value->nama_pakaian ?></td>
               <td><?= $value->kode_pakaian ?></td>
               <td><?= $value->pengerjaan?></td>
               <td><?= $value->berat ?></td>
                <?php
                if (session()->get('level')==1) {
                ?>
               <td>
                  <link rel="stylesheet" type="text/css" href="<?=base_url('fontawesome/css/fontawesome.min.css');?>">
                  <link rel="stylesheet" type="text/css" href="<?=base_url('fontawesome/css/all.css');?>">
                   <a href= "<?= base_url('home/hapus_pakaian/'.$value->id_pakaian) ?>" class="btn btn-danger"><i class="fas fa-eraser"></i>Hapus</a>
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
        </div>
    </section>
    </main>