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
                        <a class="nav-link" href="admin-basicContent.php">
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
                    <a class="d-flex align-items-center text-muted" href="admin-users.php?c=add" aria-label="Add a new user" title="Add a new user">
                        <span data-feather="plus-circle"></span>
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <?php echo (isset($msg)) ?  '<div class="alert alert-success" role="alert">' . $msg . '</div>' : ''; ?>
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th>Tittle</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($elements)) {
                        foreach ($elements as $element) {
                            echo '<tr>
                                    <td>' . $element->get_element("tittle") . '</td>
                                    <td>' . substr($element->get_element("description"),0,100) . '</td>
                                    <td>' . $element->get_element("price") . '</td>
                                    <td>' . $element->get_element("img") . '</td>
                                    <td><a href=admin-services.php?c=edit&id=' . $element->get_element("id") . '><span data-feather="edit-2"></span> Edit </a>'
                                    . '<a href=admin-services.php?c=view&id=' . $element->get_element("id") . '><span data-feather="eye"></span> View </a>'
                                    . '<a href=admin-services.php?c=delete&id=' . $element->get_element("id") . '><span data-feather="trash-2"></span> Delete</a></td>
                                </tr>';
                            }
                        } else {
                            echo '<h2>No services available to show.</h2>';
                        }
                    ?>
                </tbody>
                </table>
            </div>
            </main>
        </div>
    </div>