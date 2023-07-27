<?php $this->load->view('navbar') ?>
<style>
    td {
        color: #5653FE;
    }

    td.active {
        color: #ffffff;
        background-color: #5653FE;
    }
</style>
<div class="container-fluid vh-100">
    <div class="row">
        <div class="col-sm-3">
            <div class="container-fluid m-4">
                <table class="table rounded" style="border: 2px solid;border-radius: 10px;border-color:  #5653FE; height: 60vh;">
                    <tr>
                        <td class="align-middle" style="color: #5653FE;">
                            <h4>Kategori</h4>
                        </td>
                    </tr>
                    <tr>
                        <td id="semua" class="align-middle">Semua Produk</td>
                    </tr>
                    <tr>
                        <td id="promo" class="align-middle">Promo</td>
                    </tr>
                    <tr>
                        <td id="terbaru" class="align-middle">Terbaru</td>
                    </tr>
                    <tr>
                        <td id="terlaris" class="align-middle">Terlaris</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-sm-9">
            <div id="main"></div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>

<script>
    $(document).ready(function() {
        $('td').removeClass('active');
            $(this).addClass('active');
            $.post('<?= site_url('dashboard/home/ajax') ?>', {
                    view_name: 'semua'
                },
                function(data) {
                    
                    $('#main').html(data.html);
                }, 'json');
        $('#semua').on('click', function(e) {
            e.preventDefault();
            $('td').removeClass('active');
            $(this).addClass('active');
            $.post('<?= site_url('dashboard/home/ajax') ?>', {
                    view_name: 'semua'
                },
                function(data) {
                    
                    $('#main').html(data.html);
                }, 'json');
        });
        $('#promo').on('click', function(e) {
            e.preventDefault();
            $('td').removeClass('active');
            $(this).addClass('active');
            $.post('<?= site_url('dashboard/home/ajax') ?>', {
                    view_name: 'semua'
                },
                function(data) {
                    
                    $('#main').html(data.html);
                }, 'json');
        });
        $('#terbaru').on('click', function(e) {
            e.preventDefault();
            $('td').removeClass('active');
            $(this).addClass('active');
            $.post('<?= site_url('dashboard/home/ajax') ?>', {
                    view_name: 'semua'
                },
                function(data) {
                    
                    $('#main').html(data.html);
                }, 'json');
        });
        $('#terlaris').on('click', function(e) {
            e.preventDefault();
            $('td').removeClass('active');
            $(this).addClass('active');
            $.post('<?= site_url('dashboard/home/ajax') ?>', {
                    view_name: 'semua'
                },
                function(data) {
                    
                    $('#main').html(data.html);
                }, 'json');
        });
    });
</script>