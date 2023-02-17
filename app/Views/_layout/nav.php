<nav class="navbar navbar-expand-md mb-4 bg-primary position-sticky sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 my-auto">
                <span class="navbar-brand my-auto" style="color:bisque;">
                    <img src="information-management.png" alt="BOHAN GROUP" style="max-width: 15%;">
                    BOHAN GROUP
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-md-9">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav my-auto mx-auto">
                        <li class="nav-item me-3">
                            <a class="nav-link" style="color: aliceblue;" aria-current="page"
                                href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" style="color: aliceblue;" href="<?= base_url('product') ?>">Product</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" style="color: aliceblue;" href="<?= base_url('stock') ?>">Stock</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</nav>