<div class="row">
    <div class="col-lg-3 col-md-4 columns" id="actions-sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title"><?= __('Actions') ?></div>
            </div>
            <div class="list-group">
                <?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $signature->id],
                        [
                            'confirm' => __('Are you sure you want to delete # {0}?', $signature->id),
                            'class' => 'list-group-item'
                        ]
                    )
                ?>
                <?= $this->Html->link(__('List Signatures'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
            </div>
        </div>
    </div>
    <div class="signatures form col-lg-9 col-md-8 columns content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><?= __('Edit Signature') ?></h2>
        </div>
        <div class="panel-body">
            <?= $this->Form->create($signature, ['horizontal' => true]) ?>
            <?= $this->Form->input('comment'); ?>
            <?= $this->Form->input('email'); ?>
            <?= $this->Form->input('first_name'); ?>
            <?= $this->Form->input('last_name'); ?>
            <?= $this->Form->input('newsletter'); ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    </div>
</div>
