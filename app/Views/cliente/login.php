<div class="container py-3">
    <?php
    helper('form');
    echo form_open('cliente/login/login');
    ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputUser" aria-describedby="emailHelp" name="email" required >
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" class="form-control" id="inputPassword" value="" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <?= form_close() ?>
    <!-- <script src="assets/js/form.js"></script> -->
</div>