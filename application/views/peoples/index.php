<div class="container">
    <h3 class="mt-3">Data People</h3>
    <div class="row mt-3">
        <div class="col-md-5">
            <form action="<?= base_url('peoples'); ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Keyword.." name="keyword" autofocus autocomplete="off">
                    <div class="input-group-append">
                        <input class="btn btn-outline-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-1">
        <div class="col-md-10">
            <table class="table">
                <small class="form-text text-muted">Result Search: <?= $total_rows; ?>.</small>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4">
                            <?php if (empty($peoples)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    Data Not Found!
                                </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php foreach ($peoples as $people) : ?>
                        <tr>
                            <td><?= ++$start; ?></td>
                            <td><?= $people['name']; ?></td>
                            <td><?= $people['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-primary">Detail</a>
                                <a href="" class="badge badge-warning">Ubah</a>
                                <a href="" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>