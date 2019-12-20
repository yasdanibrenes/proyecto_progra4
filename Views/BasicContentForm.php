<div class="container-fluid">

    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">
                        <span data-feather="home"></span>
                        Dashboard 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin-content.php">
                        <span data-feather="file"></span>
                        Basic Content <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-services.php">
                        <span data-feather="zap"></span>
                        Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-products.php">
                        <span data-feather="package"></span>
                        Products
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Settings</span>
                    <a class="d-flex align-items-center text-muted">
                        <span data-feather="settings"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-users.php">
                            <span data-feather="users"></span>
                            Users
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Basic Content</h1>
                <div>
                    <a class="d-flex align-items-center text-muted" href="admin.php" aria-label="Back Home" title="Back to Home">
                        <span data-feather="home"></span>
                    </a>
                    <a class="d-flex align-items-center text-muted" href="admin-content.php?c=agregar" aria-label="Add a new user" title="Add a new user">
                        <span data-feather="plus-circle"></span>
                    </a>
                </div>
            </div>


            <form method="POST">
            <?php echo (isset($msg)) ?  '<div class="alert alert-danger" role="alert">' . $msg . '</div>' : ''; ?>
                <div class="form-group">
                    <label for="name">id:</label>
                    <input class="form-control" type="text" name="Id" <?php echo (isset($element)) ?  'value="' . $element->get_element('Id') . '"' : '' ?>>
                </div>
                <div class="form-group">
                    <label for="name">Tittle:</label>
                    <input class="form-control" type="text" name="tittle" <?php echo (isset($element)) ?  'value="' . $element->get_element('tittle') . '"' : '' ?>>
                </div>
                <div class="form-group">
                    <label for="titulo">Description:</label>
                    <input class="form-control" type="text" name="Description" <?php echo (isset($element)) ?  'value="' . $element->get_element('Description') . '"' : '' ?>>
                </div>
                <input type="hidden" name="id" <?php echo (isset($element))? 'value="'.$element->get_element('id').'"' : '' ?>>
                <input class="btn btn-primary" type="submit" value="Enviar">
                <a href="admin-products.php" class="btn btn-primary">Volver</a>
            </form>


        </main>
    </div>
</div>