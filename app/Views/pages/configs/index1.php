<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="h3 mb-3"><strong>Tài khoản</strong></h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th>Value</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($configs)) { ?>
                        <?php foreach ($configs as $item) : ?>
                            <tr>
                                <td><?= $item['key'] ?></td>
                                <td><?= $item['value'] ?></td>
                                <td><?= $item['status'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="3" class="text-center">No Configs Found</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>