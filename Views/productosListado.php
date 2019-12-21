<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

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
                        <a class="nav-link" href="admin-content.php">
                            <span data-feather="file"></span>
                            Basic Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-services.php">
                            <span data-feather="zap"></span>
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin-products.php">
                            <span data-feather="package"></span>
                            Products <span class="sr-only">(current)</span>
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
                <h1 class="h2">Products</h1>
                <div>
                    <a class="d-flex align-items-center text-muted" href="admin.php" aria-label="Back Home" title="Back to Home">
                        <span data-feather="home"></span>
                    </a>
                    <a class="d-flex align-items-center text-muted" href="admin-products.php?c=agregar" aria-label="Add a new user" title="Add a new user">
                        <span data-feather="plus-circle"></span>
                    </a>
                </div>
            </div>



            <div class="table-responsive">
                <?php echo (isset($msg)) ?  '<div class="alert alert-success" role="alert">' . $msg . '</div>' : ''; ?>

                <div class="input-group md-form form-sm form-1 pl-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text purple lighten-3" id="basic-text1"><i data-feather="search" aria-hidden="true"></i></span>
                    </div>
                    <input class="form-control my-0 py-1" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by product description..." aria-label="Search">
                </div>

                <table id="myTable" class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Image</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($elements)) {
                            foreach ($elements as $element) {
                                echo '<tr>
                                        <td>' . $element->get_element("descripcion") . '</td>
                                        <td>' . $element->get_element("precio") . '</td>
                                        <td>' . substr($element->get_element("comentarios"), 0, 60) . '</td>
                                        <td>' . $element->get_element("imagen") . '</td>
                                        <td><a href=admin-products.php?c=editar&id=' . $element->get_element("id") . '><span data-feather="edit-2"></span>Edit  </a>'
                                    . '<a href=admin-products.php?c=ver&id=' . $element->get_element("id") . '><span data-feather="eye"></span> View  </a>'
                                    . '<a href=admin-products.php?c=borrar&id=' . $element->get_element("id") . '><span data-feather="trash-2"></span> Delete  </a></td>
                                        </tr>';
                            }
                        } else {
                            echo '<h2>No hay elementos disponibles</h2>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>