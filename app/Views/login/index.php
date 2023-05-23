<?php
/**
 * @var \CodeIgniter\View\View $this
 *
 */

$this->extend('template');

?>

<?php $this->section('content')?>

<?= form_open(current_url(), ['method'=>'post'])?>



    <div class=" --bs-body-bg">
        <div class="w-25  position-absolute top-50 start-50 translate-middle p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3 " >
            <h3 class="text-center"> Login </h3>
            <input class="form-control " type="text" placeholder="username"></input><br>
            <input class="form-control " type="password" placeholder="password"></input><br>
<!--            <label ><input class=" form-check-input text-left" type="checkbox" > Remember me</input></label><br>-->
            <input class="form-control btn btn-primary" type="submit" value="login"></input> <br> <br>
            <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary'])?>
        </div>
    </div>



<!--    <div class="form-group">-->
<!--        --><?php //= form_label('Login', 'login', ['for'=>'login', 'class' => 'control-label']) ?>
<!--        --><?php //= form_input('Login', '', ['class' => 'form-control']) ?>
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        --><?php //= form_label('Password', 'password', ['for'=>'password', 'class' => 'control-label']) ?>
<!--        --><?php //= form_input('password', '', ['class' => 'form-control'], 'password') ?>
<!--    </div>-->
<?php //= form_submit('submit', 'Submit', ['class' => 'btn btn-primary'])?>
<?= form_close()?>

<?php $this->endSection()?>