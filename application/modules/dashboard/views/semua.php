<h3 class="text-center p-5">Semua Produk</h3>
<div class="row">
    <div class="col-sm-4">
        <div class="container-fluid" style="background-color: #E5FFCE;height: 50vh;">
            <center>
                <img src="<?= base_url() ?>assets/img/app/sayurpack.png" width="200">
            </center>
            <h5>Sayur Bening Pack</h5>
            <h6 style="color: rgb(130,205,71);">Rp 12.000,00</h6>
            <div class="row m-1">
                <button class="col-lg-2 btn cart" data-nama="Sayur-Bening-Pack" type="button" style="background-color: rgb(130,205,71);"><i class="fa fa-shopping-cart"></i></button>
                <button class="col-lg-10 btn beli" data-nama="Sayur-Bening-Pack" type="button" style="background-color: rgb(130,205,71);">Beli Sekarang</button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="container-fluid" style="background-color: #E5FFCE;height: 50vh;">
            <center>
                <img src="<?= base_url() ?>assets/img/app/brokolipack.png" width="200">
            </center>
            <h5>Brokoli Pack</h5>
            <h6 style="color: rgb(130,205,71);">Rp 10.000,00</h6>
            <div class="row m-1">
                <button class="col-lg-2 btn cart" data-nama="Brokoli-Pack" type="button" style="background-color: rgb(130,205,71);"><i class="fa fa-shopping-cart"></i></button>
                <button class="col-lg-10 btn beli" data-nama="Brokoli-Pack" type="button" style="background-color: rgb(130,205,71);">Beli Sekarang</button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="container-fluid" style="background-color: #E5FFCE;height: 50vh;">
            <center>
                <img src="<?= base_url() ?>assets/img/app/parepack.png" width="200">
            </center>
            <h5>Pare Pack</h5>
            <h6 style="color: rgb(130,205,71);">Rp 9.000,00</h6>
            <div class="row m-1">
                <button class="col-lg-2 btn cart" data-nama="Pare-Pack" type="button" style="background-color: rgb(130,205,71);"><i class="fa fa-shopping-cart"></i></button>
                <button class="col-lg-10 btn beli" data-nama="Pare-Pack" type="button" style="background-color: rgb(130,205,71);">Beli Sekarang</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.cart').on('click',function(e){
            e.preventDefault();
            $.post('<?= site_url('dashboard/home/pesan') ?>', {
                    nama: $(this).attr('data-nama')
                },
                function(data) {
                    console.log(data);
                }, 'json');
        });
        $('.beli').on('click',function(e){
            e.preventDefault();
            $.post('<?= site_url('dashboard/home/pesan') ?>', {
                    nama: $(this).attr('data-nama')
                },
                function(data) {
                    window.location.replace('<?= site_url('dashboard/home/cart') ?>');
                }, 'json');
        });
    });
</script>