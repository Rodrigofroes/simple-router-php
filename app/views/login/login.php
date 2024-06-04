<link rel="stylesheet" href="/css/adminlte.min.css">
<div class="container">
    <div class="row justify-content-center align-items-center h-100 ">
        <div class="col-md-4 shadow-lg p-4">
            <form action="/login" method="post">
                <p class="h4 mb-2">Login</p>
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Usuario:</label>
                    <input type="text" id="form2Example1" name="usuario" class="form-control" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Senha:</label>
                    <input type="password" id="form2Example2" name="senha" class="form-control" />
                </div>

                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-2">Entrar</button>
                <div>
                    <?php if (isset($msg)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $msg ?>
                        </div>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>