<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<!-- banner -->
<section class="banner_main">
  <div class="container">
    <div class="row d_flex">
      <div class="col-md-4">
        <div class="text-bg">
          <h1>PAKAIAN <br>
            ANDA <br>
            DIJAMIN<br>
            BERSIH <br>
            <span class="black">RAPIH </span>
          </h1>
          <a href="#asked">Tentang Kami</a>
        </div>
      </div>
      <div class="col-md-8">
        <div class="text-img">
          <figure><img src="images/clean.png" alt="#" /></figure>
        </div>
        <!-- <div class="text-img1">
            <figure><img src="images/clean2.png" alt="#" /></figure>
          </div> -->
      </div>
    </div>
  </div>
</section>
<!-- end banner -->

<!-- we_do -->
<div id="we_do" class="we_do">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Cara Kerja Kami</h2>
          <span></span>
          <strong></strong>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="we_do_box">
          <i><img src="images/antri.png" alt="#" /></i>
          <h4>Antri</h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="we_do_box">
          <i><img src="images/mencuci.png" alt="#" /></i>
          <h4>Mencuci</h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="we_do_box">
          <i><img src="images/pengeringan.png" alt="#" /></i>
          <h4>Pengeringan</h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="we_do_box">
          <i><img src="images/setrika.png" alt="#" /></i>
          <h4>Setrika</h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end we_do -->


<!-- Info section start -->
<div class="row" style="background-color: #f5b707;">
  <div id="taxis" class="taxis_section layout_padding">
    <div class="container">
      <h1 class="our_text">TRACKING <span style="color: #f4db31;">INFO</span></h1>

      <div class="taxis_section_2">
        <div class="row">

          <div class="col-sm-4 cornerinfo">
            <div class="taxi_main">
              <div class="round_1">01</div>
              <form class="input-group" action="" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Cari</button>
              </form>
              <br><br>

            </div>
          </div>

          <div class="col-sm-6">
            <div class="taxi_main">

              <div class="round_1">02</div>
              <table class="table table-bordered">
                <tr>
                  <th>Invoice</th>
                  <th>Status</th>
                  <th>Nama</th>
                </tr>
                <?php

                foreach ($customer as $row) {
                ?>
                  <tr>
                    <td><?= $row->invoice; ?></td>
                    <td><?= $row->status; ?></td>
                    <td><?= $row->nama_cust; ?></td>
                  </tr>
                <?php
                }
                ?>
              </table>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!--  Info section end -->

<!-- contact -->
<div class="row">

</div>

<div id="contact" class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <br><br>
          <h2><u>Kontak Kami</u></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <form class="main_form">
          <div class="row">
            <div class="col-md-12 ">
              <input class="contactus" placeholder="Nama" type="text" name="Nama">
            </div>
            <div class="col-md-6">
              <input class="contactus" placeholder="Nomor Telepon" type="text" name=" Nomor Telepon">
            </div>
            <div class="col-md-6">
              <input class="contactus" placeholder="Jenis Layanan" type="text" name="Jenis Layanan">
            </div>
            <div class="col-md-12">
              <input class="contactus" placeholder="Email " type="text" name="Email ">
            </div>
            <div class="col-md-12">
              <textarea class="textarea" placeholder="Pesan" type="text" name="Pesan">Message</textarea>
            </div>
            <div class="col-sm-12">
              <button class="send_btn">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end contact -->
<!-- asked -->

<div id="asked" class="asked">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <br><br>
        <div class="titlepage">
          <h2>Tentang Laundry Kami</h2>
          <span></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="some">
          <h3>Layanan Kami</h3>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed </p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="some">
          <h3>Letak Kami</h3>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed </p>
          <!-- <a class=" read_more" href="#">Read More</a> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end asked -->

<?= $this->endSection(); ?>>