<?php $this->load->view('navbar') ?>
<div class="container-fluid vh-100">
    <div class="row">
        <div class="col-sm-4">
            <h3 class="p-5">Produk Dibeli</h3>
            <div class="container-fluid" style="height: 55vh;background-color: rgb(130,205,71);">
                <ul class="list-group list-group-flush p-5" style="background-color: transparent;">
                    <?php foreach ($cookies['order'] as $c) : ?>
                        <li class="list-group-item text-white" style="background-color: transparent;font-size: larger;"><?= $c ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="nama" id="nama" style="margin-top: 150px;margin-left:30px" placeholder="Silahkan isi nama Anda">
            <textarea class="form-control" name="alamat" id="alamat" style="margin-top: 15px;margin-left:30px" placeholder="Silahkan isi alamat Anda" rows="4"></textarea>
            <textarea class="form-control" name="catatan" id="catatan" style="margin-top: 15px;margin-left:30px" placeholder="Catatan" rows="5"></textarea>
            <button class="btn bayar" type="button" style="background-color: rgb(130,205,71);margin-top: 15px;margin-left:30px;width: 100%;color: white">Order</button>
        </div>
        <div class="col-sm-4">
            <h3 class="p-5">Metode Pembayaran</h3>
            <div class="container-fluid ms-5" style="width: auto;height: 55vh;background-color: rgb(130,205,71);">
                <p class="p-5 text-white">Buat informasi permbayaran lebih lengkap bisa diambil</p>
                <center>
                    <img src="<?= base_url() ?>assets/img/app/wa.png" width="100">
                </center>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
<script>
    $(document).ready(function() {
        $('.bayar').on('click', function(e) {
            e.preventDefault();
            var api = 'https://api.whatsapp.com/send?phone=6281225118369&text=';
            var pesan = 'Nama : ' + $('#nama').val() + '\n' +
                'Alamat : ' + $('#alamat').val() + '\n' +
                'Order  :   ' + '\n' +
                <?php foreach ($cookies['order'] as $no => $c) : ?> '<?= $no += 1 ?>. ' + '<?= $c ?>' + '\n' +
                <?php endforeach; ?> '\n' +
                'Catatan : ' + $('#catatan').val();
            $.post('<?= site_url('dashboard/home/clear') ?>', {
                },
                function(data) {
                    console.log(data);
                }, 'json');
            window.location.replace(encodeURI(api + pesan));
        });
    })
</script>