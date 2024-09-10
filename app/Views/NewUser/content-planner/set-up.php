<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
            margin-bottom: 20px;
        }

        td[contenteditable="true"]:focus {
            background-color: #e9ecef;
        }

        .card {
            background-color: #ffff;
            padding: 20px;
            border-radius: 30px;
            margin-bottom: 20px;
        }

        .card-content {
            padding: 15px;
            background-color: #ffff;
        }

        .header {
            margin-top: 30px;
            position: relative;
            padding-bottom: 20px;
        }

        .line-separator {
            width: 100%;
            height: 2px;
            background-color: #000;
            border: none;
            margin-top: 5px;
            margin-bottom: 40px;
        }

        .textcontent {
            margin-top: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .line-separatorkecil {
            width: 10%;
            height: 2px;
            background-color: #000;
            margin: 10px 0;
        }

        .input-smaller {
            width: 65%;
        }

        .button-container {
            display: flex;
            gap: 10px;
        }

        .button-container .btn {
            flex-shrink: 0;
            /* Mencegah tombol mengecil */
            white-space: nowrap;
            /* Mencegah teks membungkus ke baris berikutnya */
        }
    </style>
</head>

<body class="card-content">
    <div class="container">
        <div class="header">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between">
                <h2 class="mb-3 mb-md-0">Set Up</h2>
                <div class="d-flex flex-wrap gap-2">
                    <a href="/content-calendar"><button type="button" class="btn btn-primary">Content Calendar</button></a>
                    <a href="/content-planner"><button type="button" class="btn btn-success">Content Planner</button></a>
                    <a href="/kpi"><button type="button" class="btn btn-secondary">Metrics</button></a>
                </div>
            </div>
        </div>
        <hr class="line-separator">

        <div class="card">
            <!-- Tabel Sosial Media -->
            <!-- start nama data -->
            <div class="main-card card mb-3">
                <div class="card-body border-white border-warning">
                    <h4 class="text-primary fw-bold">Media Sosial</h4>
                    <!-- end nama data -->
                    <div class="table-responsive">
                        <table class="table table-light" style="border-collapse: separate; border-radius: 20px; overflow: hidden;">
                            <thead class="text-center">
                                <tr class="table-secondary">
                                    <th>No</th>
                                    <th class="w-50">Nama Sosial Media</th>
                                    <th>Warna Sosial Media</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($sosmeds as $item): ?>
                                    <tr>
                                        <td class="text-center"><?= $i++ ?></td>
                                        <td contenteditable="true" data-id="<?= $item['id_sosial_media'] ?>" data-column="nama_sosial_media"><?= esc($item['nama_sosial_media']) ?></td>
                                        <td contenteditable="true" data-id="<?= $item['id_sosial_media'] ?>" data-column="warna_sosial_media">
                                            <div class="color-box" style="display: flex; align-items: center;">
                                                <div style="width: 20px; height: 20px; background-color: <?= esc($item['warna_sosial_media']) ?>; border: 1px solid #000; margin-right: 5px;"></div>
                                                <span><?= esc($item['warna_sosial_media']) ?></span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger btn-sm delete-sosial-media" style="width: 100%; min-width: 80px; border-radius:10px;" data-id="<?= $item['id_sosial_media'] ?>">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <th class="py-3 text-center">New Data</th>
                                    <td><input type="text" id="newNamaSosialMedia" class="form-control" placeholder="Nama Sosial Media"></td>
                                    <td><input type="color" id="newWarnaSosialMedia" class="color-picker form-control" value="#000000"></td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm" id="addSosialMedia" style="width: 100%; min-width: 80px; border-radius:10px;">Add Data</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tabel Content Type -->
            <!-- start nama data -->
            <div class="main-card card mb-3">
                <div class="card-body border-white border-warning">
                    <h4 class="text-primary fw-bold">Content Type</h4>
                    <!-- end nama data -->

                    <div class="table-responsive">
                        <table class="table table-light" style="border-collapse: separate; border-radius: 20px; overflow: hidden;">
                            <thead class="text-center">
                                <tr class="table-secondary">
                                    <th>No</th>
                                    <th class="w-75">Nama Content Type</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($c_types as $item): ?>
                                    <tr>
                                        <td class="text-center"><?= $i++ ?></td>
                                        <td contenteditable="true" data-id="<?= $item['id_content_type'] ?>" data-column="nama_content_type"><?= esc($item['nama_content_type']) ?></td>
                                        <td class="text-center">
                                            <button class="btn btn-danger btn-sm delete-content-type" style="width: 100%; min-width: 80px; border-radius:10px;" data-id="<?= $item['id_content_type'] ?>">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <th class="py-3 text-center">New Data</th>
                                    <td><input type="text" id="newNamaContentType" class="form-control" placeholder="Nama Content Type"></td>
                                    <td><button class="btn btn-primary btn-sm" id="addContentType" style="width: 100%; min-width: 80px; border-radius:10px;">Add Data</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- Tabel Content Pillar -->
            <!-- start nama data -->
            <div class="main-card card mb-3">
                <div class="card-body border-white border-warning">
                    <h4 class="text-primary fw-bold">Content Pillar</h4>
                    <!-- end nama data -->

                    <div class="table-responsive">
                        <table class="table table-light" style="border-collapse: separate; border-radius: 20px; overflow: hidden;">
                            <thead class="text-center">
                                <tr class="table-secondary">
                                    <th>No</th>
                                    <th class="w-75">Nama Content Pillar</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($c_pillars as $item): ?>
                                    <tr>
                                        <td class="text-center"><?= $i++ ?></td>
                                        <td contenteditable="true" data-id="<?= $item['id_content_pillar'] ?>" data-column="nama_content_pillar"><?= esc($item['nama_content_pillar']) ?></td>
                                        <td><button class="btn btn-danger btn-sm delete-content-pillar" style="width: 100%; min-width: 80px; border-radius:10px;" data-id="<?= $item['id_content_pillar'] ?>">Delete</button></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <th class="py-3 text-center">New Data</th>
                                    <td><input type="text" id="newNamaContentPillar" class="form-control" placeholder="Nama Content Pillar"></td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm" id="addContentPillar" style="width: 100%; min-width: 80px; border-radius:10px;">Add Data</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- Tabel Status -->
            <!-- start nama data -->
            <div class="main-card card mb-3">
                <div class="card-body border-white border-warning">
                    <h4 class="text-primary fw-bold">Status Content</h4>
                    <!-- end nama data -->

                    <div class="table-responsive">
                        <table class="table table-light" style="border-collapse: separate; border-radius: 20px; overflow: hidden;">
                            <thead class="text-center">
                                <tr class="table-secondary">
                                    <th>No</th>
                                    <th class="w-75">Nama Status</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($statuses as $item): ?>
                                    <tr>
                                        <td class="text-center"><?= $i++ ?></td>
                                        <td contenteditable="true" data-id="<?= $item['id_status'] ?>" data-column="nama_status"><?= esc($item['nama_status']) ?></td>
                                        <td><button class="btn btn-danger btn-sm delete-status" style="width: 100%; min-width: 80px; border-radius:10px;" data-id="<?= $item['id_status'] ?>">Delete</button></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <th class="py-3 text-center">New Data</th>
                                    <td><input type="text" id="newNamaStatus" class="form-control" placeholder="Status"></td>
                                    <td><button class="btn btn-primary btn-sm" id="addStatus" style="width: 100%; min-width: 80px; border-radius:10px;">Add Data</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var csrfName = '<?= csrf_token() ?>'; // Nama token CSRF
            var csrfHash = '<?= csrf_hash() ?>'; // Nilai token CSRF

            function updateCsrfToken(newToken) {
                csrfHash = newToken;
            }

            function updateData(id, column, value, url) {
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        id: id,
                        column: column,
                        value: value,
                        [csrfName]: csrfHash // Menambahkan token CSRF
                    },
                    success: function(response, textStatus, xhr) {
                        // Update token CSRF dari respons
                        var newToken = xhr.getResponseHeader('X-CSRF-Token');
                        if (newToken) {
                            updateCsrfToken(newToken);
                        }
                        if (column === 'warna_sosial_media') {
                            // Update warna div yang terkait
                            var colorBox = $('td[data-id="' + id + '"][data-column="warna_sosial_media"] .color-box > div');
                            colorBox.css('background-color', value);
                            // Update span text dengan warna baru
                            $('td[data-id="' + id + '"][data-column="warna_sosial_media"] .color-box > span').text(value);
                        }
                    },
                    error: function() {
                        alert('Gagal memperbarui data');
                    }
                });
            }

            function deleteData(id, url) {
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: {
                            id: id,
                            [csrfName]: csrfHash // Menambahkan token CSRF
                        },
                        success: function(response, textStatus, xhr) {
                            // Update token CSRF dari respons
                            var newToken = xhr.getResponseHeader('X-CSRF-Token');
                            if (newToken) {
                                updateCsrfToken(newToken);
                            }
                            location.reload();
                        },
                        error: function() {
                            alert('Gagal menghapus data');
                        }
                    });
                }
            }

            // Handle delete Sosial Media
            $('.delete-sosial-media').click(function() {
                var id = $(this).data('id');
                var url = '<?= base_url('/delete_sosial_media') ?>';
                deleteData(id, url);
            });

            // Handle delete Content Type
            $('.delete-content-type').click(function() {
                var id = $(this).data('id');
                var url = '<?= base_url('/delete_content_type') ?>';
                deleteData(id, url);
            });

            // Handle delete Content Pillar
            $('.delete-content-pillar').click(function() {
                var id = $(this).data('id');
                var url = '<?= base_url('/delete_content_pillar') ?>';
                deleteData(id, url);
            });

            // Handle delete Status
            $('.delete-status').click(function() {
                var id = $(this).data('id');
                var url = '<?= base_url('/delete_status') ?>';
                deleteData(id, url);
            });

            function addData(data, url) {
                data[csrfName] = csrfHash; // Menambahkan token CSRF ke data
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: data,
                    success: function(response, textStatus, xhr) {
                        // Update token CSRF dari respons
                        var newToken = xhr.getResponseHeader('X-CSRF-Token');
                        if (newToken) {
                            updateCsrfToken(newToken);
                        }
                        location.reload();
                    },
                    error: function() {
                        alert('Gagal menambah data');
                    }
                });
            }

            // Handle edit langsung pada tabel
            $('td[contenteditable="true"]').on('blur', function() {
                var id = $(this).data('id');
                var column = $(this).data('column');
                var value = $(this).text().trim();
                var url = '';

                if ($(this).closest('table').find('th').eq(1).text().includes('Sosial Media')) {
                    url = '<?= base_url('/update_sosial_media') ?>';
                } else if ($(this).closest('table').find('th').eq(1).text().includes('Content Type')) {
                    url = '<?= base_url('/update_content_type') ?>';
                } else if ($(this).closest('table').find('th').eq(1).text().includes('Content Pillar')) {
                    url = '<?= base_url('/update_content_pillar') ?>';
                } else if ($(this).closest('table').find('th').eq(1).text().includes('Status')) {
                    url = '<?= base_url('/update_status') ?>';
                }

                updateData(id, column, value, url);
            });

            // Handle add Sosial Media
            $('#addSosialMedia').click(function() {
                var namaSosialMedia = $('#newNamaSosialMedia').val().trim();
                var warnaSosialMedia = $('#newWarnaSosialMedia').val();

                if (namaSosialMedia === '') {
                    alert('Nama Sosial Media tidak boleh kosong');
                    return;
                }

                addData({
                    nama_sosial_media: namaSosialMedia,
                    warna_sosial_media: warnaSosialMedia
                }, '<?= base_url('/add_sosial_media') ?>');
            });

            // Handle add Content Type
            $('#addContentType').click(function() {
                var namaContentType = $('#newNamaContentType').val().trim();

                if (namaContentType === '') {
                    alert('Nama Content Type tidak boleh kosong');
                    return;
                }

                addData({
                    nama_content_type: namaContentType
                }, '<?= base_url('/add_content_type') ?>');
            });

            // Handle add Content Pillar
            $('#addContentPillar').click(function() {
                var namaContentPillar = $('#newNamaContentPillar').val().trim();

                if (namaContentPillar === '') {
                    alert('Nama Content Pillar tidak boleh kosong');
                    return;
                }

                addData({
                    nama_content_pillar: namaContentPillar
                }, '<?= base_url('/add_content_pillar') ?>');
            });

            // Handle add Status
            $('#addStatus').click(function() {
                var namaStatus = $('#newNamaStatus').val().trim();

                if (namaStatus === '') {
                    alert('Nama Status tidak boleh kosong');
                    return;
                }

                addData({
                    nama_status: namaStatus
                }, '<?= base_url('/add_status') ?>');
            });
        });
    </script>

</body>

</html>