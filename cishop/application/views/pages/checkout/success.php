<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Checkout Berhasil
                    </div>
                    <div class="card-body">
                        <h5>Nomer Order: <?=  $content->invoice  ?></h5>
                        <p>Terimakasih Sudah Berbelanja.</p>
                        <p>Silahkan lakukan pembayaran untuk bisa kami proses lebih lanjut dengan cara:</p>
                        <ol>
                            <li>Lakukan pembayaran pada rekening <strong>BCA 33115049</strong> a/n <strong>PT.DemoA</strong></li>
                            <li>Sertakan keterangan dengan nomor order: <strong><?=  $content->invoice  ?></strong></li>
                            <li>Total pembayaran: <strong>Rp.<?=  number_format($content->total, 0, ',', '.')   ?>,-</strong></li>
                        </ol>
                        <p>Jika sudah, silahkan kirimkan bukti transfer dihalaman konfirmasi atau bisa <a href="<?= base_url("/myorder/detail/$content->invoice") ?>">Klik disini</a>!</p>
                        <a href="<?=  base_url('/')  ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </main>