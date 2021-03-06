<?php require_once  'content/top_head.php' ?> 

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0"><?= $title ?></h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active"><?= $title ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- users filter start -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Filters</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                            <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li>
                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="users-list-filter">
                            <form id="formFilter">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-2">
                                        <label for="kode-tahun">Kode Tahun</label>
                                        <fieldset class="form-group">
                                            <select class="form-control" name="xkode" id="kode-tahun">
                                                <option value="">All</option>
                                                <?php foreach ($tahun as $row) : ?>
                                                    <option value="<?php echo $row->kode ?>"><?php echo $row->kode ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-2">
                                        <label for="tahun-pelajaran">Tahun Pelajaran</label>
                                        <fieldset class="form-group">
                                            <select class="form-control" name="kode" id="tahun-pelajaran">
                                                <option value=""></option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-2">
                                        <label for="semester">Semester</label>
                                        <fieldset class="form-group">
                                            <select class="form-control" name="semester" id="id_semester">
                                                <option value=""></option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-2">
                                        <label for="jenjang">Jenjang</label>
                                        <fieldset class="form-group">
                                            <select class="form-control" name="jenjang" id="jenjang">
                                                <option value="">All</option>
                                                <?php foreach ($jenjang as $row) : ?>
                                                    <option value="<?php echo $row->deskripsi ?>"><?php echo $row->deskripsi ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-2">
                                        <label for="kecamatan">Kecamatan</label>
                                        <fieldset class="form-group">
                                            <select class="form-control" name="code_kec" id="kecamatan">
                                                <option value="">All</option>
                                                <?php foreach ($kec as $row) : ?>
                                                    <option value="<?php echo $row->code ?>"><?php echo $row->kecamatan ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-2">
                                        <label></label>
                                        <fieldset class="form-group">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- users filter end -->
            
            <!-- table -->
            <section id="basic-datatable" style="display:none;">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            
                            <div class="card-content">
                                <div id="bodyreset" class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table tbl-filter" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Madrasah</th>
                                                    <th>Tahun Pelajaran</th>
                                                    <th>Semester</th>
                                                    <th>Jenjang</th>
                                                    <th>Kecamatan</th>
                                                    <th>Status</th>
                                                    <th width="5%">Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->

<?php require_once 'content/footer.php' ?> 

<?php require_once 'content/script.php' ?>

<script type="text/javascript">

    $(".users-data-filter").click(function () {
        $('#kode-tahun').prop('selectedIndex', 0);
        $('#kode-tahun').change();
        $('#tahun-pelajaran').prop('selectedIndex', 0);
        $('#tahun-pelajaran').change();
        $('#id_semester').prop('selectedIndex', 0);
        $('#id_semester').change();
        $('#jenjang').prop('selectedIndex', 0);
        $('#jenjang').change();
        $('#kecamatan').prop('selectedIndex', 0);
        $('#kecamatan').change();
    });

     //form data search
     $('#formFilter').submit(function(e) {
        $('#basic-datatable').show();
        e.preventDefault();
        $.ajax({
            type: 'get',
            url: '<?php echo site_url('admin/gtk_search') ?>',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data) {
                $('.tbl-filter').DataTable( {
                    colReorder: {
                        realtime: true
                    },
                    destroy: true,
                    data: data,
                });      
            }, 
            error: function (data) {
                toastr.error('Data fail!.', 'Errors!', { "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000 });
            }
        })
    });

    $('#kode-tahun').on('change', function () {
       var code = $(this).val();
       $.ajax({
            type: 'post',
            url: '<?php echo base_url('admin/gtk_tahun') ?>',
            dataType: 'json',
            data: {code: code},
            success: function (data) {
                var option = '';
                var tahun = '';
                var i;

                for (let i = 0; i < data.length; i++) {
                    tahun += "<option value=" + data[i].kode + ">" + data[i].tahun_pelajaran + "</option>";
                    option += "<option value=" + data[i].semester + ">" + data[i].semester + "</option>";
                }

                $('#id_semester').html(option);
                $('#tahun-pelajaran').html(tahun);
            }
       })
    });

</script>

<?php require_once  'content/end_head.php' ?> 
