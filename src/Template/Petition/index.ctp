<div class="row">
    <div class="col-lg-4 col-md-6 columns">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Add Signature') ?></h2>
            </div>
            <div class="panel-body">
                <?= $this->Form->create($signature, [
                    // 'horizontal' => true,
                ]) ?>
                <?= $this->Form->input('first_name'); ?>
                <?= $this->Form->input('last_name'); ?>
                <?= $this->Form->input('email'); ?>
                <?= $this->Form->textarea('comment'); ?>
                <?= $this->Form->input('newsletter'); ?>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
    <div class="signatures index col-lg-8 col-md-6 columns content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= __('Signatures') ?></h2>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="col-xs-1" ><span data-toggle="tooltip" title="<?= __('Identifier'); ?>"><?= __('Id') ?></span></th>
                            <th scope="col"><?= __('Name') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($signatures as $signature): ?>
                        <tr class="bg-info">
                            <td><?= $this->Number->format($signature->id) ?></td>
                            <td><?= h($signature->name) ?></td>
                        </tr>
                        <?php  if($signature->comment): ?>
                        <tr>
                            <td colspan="2"><?= h($signature->comment) ?></td>
                        </tr>
                        <?php  endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <nav class="paginator text-center">
                    <?= $this->Paginator->numbers([
                        'prev' => 'i:chevron-left ' . __('previous'),
                        'next' =>  __('next') . ' i:chevron-right',
                        ]) ?>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php $this->append('script'); ?>
<script>tinymce.init({ selector:'.tinymce' });</script>
<script>
    (function ($) {
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    }) (jQuery)
</script>
<?php $this->end();?>
