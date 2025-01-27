<<div class="container-fluid">

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
                <a class="d-flex align-items-center text-muted" href="admin-content.php?c=add" aria-label="Add a new content" title="Add a new content">
                    <span data-feather="plus-circle"></span>
                </a>
            </div>
        </div>


        <form method="POST">
        <?php echo (isset($msg)) ?  '<div class="alert alert-danger" role="alert">' . $msg . '</div>' : ''; ?>
            <div class="form-group">
                <label for="ID">ID:</label>
                <input class="form-control" type="text" name="id" <?php echo (isset($element)) ?  'value="' . $element->get_element('id') . '"' : '' ?> readonly>
            </div>
            <div class="form-group">
                <label for="Tittle">Tittle:</label>
                <input class="form-control" type="text" name="tittle" <?php echo (isset($element)) ?  'value="' . $element->get_element('tittle') . '"' : '' ?> readonly>
            </div>
            <div class="form-group">
                <label for="Description">Description:</label>
                <textarea disabled class="form-control" name="description"><?php echo (isset($element)) ?  $element->get_element('description') : '' ?></textarea>
            </div>

            <a href="admin-content.php" class="btn btn-primary"><span data-feather="corner-up-left"></span>Back</a> 
            <a class="btn btn-primary" href="admin-content.php?c=edit&id=<?php echo $element->get_element("id"); ?>">Edit</a>
        </form>


    </main>
</div>
</div>