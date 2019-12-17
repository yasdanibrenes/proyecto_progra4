        <?php require_once 'Views/admin_header.php'; ?>
        
        <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="admin.php">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-products.php">
                        <span data-feather="shopping-cart"></span>
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
                <h1 class="h2">Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                        <span data-feather="shopping-bag"></span>
                        </div>
                        <div class="mr-5">Orders!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                        <span data-feather="chevron-right"></span>
                        </span>
                    </a>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                        <span data-feather="package"></span>
                        </div>
                        <div class="mr-5">Products!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="admin-products.php">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                        <span data-feather="chevron-right"></span>
                        </span>
                    </a>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                        <span data-feather="users"></span>
                        </div>
                        <div class="mr-5">Users!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="admin-users.php">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                        <span data-feather="chevron-right"></span>
                        </span>
                    </a>
                    </div>
                </div>
            </div>

            <canvas class="my-4 w-100" id="myChart" width="900" height="200"></canvas>

            <h2>Section title</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>dolor</td>
                        <td>sit</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </main>
        </div>
    </div>

