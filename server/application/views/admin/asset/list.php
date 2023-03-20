
<link rel="stylesheet" href="<?= ASSET_URL; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= ASSET_URL; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= ASSET_URL; ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assets</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboard</a></li>
              <li class="breadcrumb-item">Assets</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Assets list</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Facility No</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Floors</th>
                    <th>Year Constucted</th>
                    <th>Ownership Type</th>
                    <th>Regional Factor</th>
                    <th>Elements</th>
                    <th>Recommand</th>
                    <th>Replacement</th>
                    <th>1 Year Recs</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Facility No</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Floors</th>
                    <th>Year Constucted</th>
                    <th>Ownership Type</th>
                    <th>Regional Factor</th>
                    <th>Elements</th>
                    <th>Recommand</th>
                    <th>Replacement</th>
                    <th>1 Year Recs</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
<script src="<?= ASSET_URL; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= ASSET_URL; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= ASSET_URL; ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= ASSET_URL; ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>