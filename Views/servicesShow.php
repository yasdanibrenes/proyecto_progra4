<div class="container-fluid">

    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">
                        <span data-feather="home"></span>
                        Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-content.php">
                        <span data-feather="file"></span>
                        Basic Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin-services.php">
                        <span data-feather="zap"></span>
                        Services <span class="sr-only">(current)</span>
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
                <h1 class="h2">Services</h1>
                <div>
                    <a class="d-flex align-items-center text-muted" href="admin.php" aria-label="Back Home" title="Back to Home">
                        <span data-feather="home"></span>
                    </a>
                    <a class="d-flex align-items-center text-muted" href="admin-services.php?c=add" aria-label="Add a new service" title="Add a new service">
                        <span data-feather="plus-circle"></span>
                    </a>
                </div>
            </div>

            <form method="POST">
            <?php echo (isset($msg)) ?  '<div class="alert alert-danger" role="alert">' . $msg . '</div>' : ''; ?>
                <div class="form-group">
                    <label for="name">Tittle:</label>
                    <input class="form-control" type="text" name="tittle" <?php echo (isset($element)) ?  'value="' . $element->get_element('tittle') . '"' : '' ?> readonly>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="description" rows="5" readonly><?php echo (isset($element))?  $element->get_element('description') : '' ?></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input class="form-control" type="number" name="price" <?php echo (isset($element)) ?  'value="' . $element->get_element('price') . '"' : '' ?> readonly>
                </div>
                <div class="form-group">
                    <label for="img">Image:</label>
                    <input class="form-control" type="text" name="img" <?php echo (isset($element)) ?  'value="' . $element->get_element('img') . '"' : '' ?> readonly>
                </div>

                <a class="btn btn-primary" href="admin-services.php"  class="btn"><span data-feather="corner-up-left"></span> Back</a> 
                <a class="btn btn-primary" href="admin-services.php?c=edit&id=<?php echo $element->get_element("id"); ?>">Edit</a>
            </form>


        </main>
    </div>
</div>