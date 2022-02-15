<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
        <div class="row">
            <?php $this->load->view('layouts/_menu'); ?>
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <img src="<?= $content->image ? base_url("/images/user/$content->image") : base_url('images/user/avatar.JPG') ?>" alt="" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <p>Nama : <?= $content->name ?></p>
                        <p>Email : <?= $content->email ?></p>
                        <p><a href="<?= base_url("/profile/update/$content->id") ?>" class="btn btn-primary">Edit</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>