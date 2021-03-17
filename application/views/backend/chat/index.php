<!-- Meta -->
<?php $this->load->view('backend/template/meta') ?>

<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('backend/template/navbar') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('backend/template/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <?php
          // sediakan nohp target
          $nohp = hp('087749585200');
          // atur pesan dengan helper text urlencode
          $message = '&text=' . urlencode('Halo gan');
          // cek user_agent / device yang digunakan user
          // kalau mobil maka pakai api.whatsapp.com
          if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=' . $nohp . $message;
          // tapi kalau desktop pakai web.whatsapp.com
          else $linkWA = 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
          ?>

          <a class="btn btn-success" target="_blank" href="<?php echo $linkWA ?>">Chat WA</a>

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view('backend/template/footer') ?>

</div>
<!-- ./wrapper -->

<!-- JS -->
<?php $this->load->view('backend/template/js') ?>
</body>

</html>