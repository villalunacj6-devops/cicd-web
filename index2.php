
<?php

$websiteName = "My PHP CI/CD Website";
$message = "Successfully deployed using GitHub Actions and InfinityFree FTP!";

$currentDate = date("F d, Y");
$currentTime = date("h:i:s A");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($websiteName); ?></title>

    <!-- Bootstrap 5 CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                PHP CI/CD Demo
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- Main Content -->
    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="card shadow border-0">

                    <div class="card-body text-center p-5">

                        <span class="badge bg-success mb-3">
                            Deployment Successful
                        </span>

                        <h1 class="fw-bold text-primary">
                            <?php echo htmlspecialchars($websiteName); ?>
                        </h1>

                        <p class="lead mt-3">
                            <?php echo htmlspecialchars($message); ?>
                        </p>

                        <hr class="my-4">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <div class="bg-light rounded p-3">

                                    <h6 class="text-secondary">
                                        Current Date
                                    </h6>

                                    <h5>
                                        <?php echo $currentDate; ?>
                                    </h5>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="bg-light rounded p-3">

                                    <h6 class="text-secondary">
                                        Server Time
                                    </h6>

                                    <h5>
                                        <?php echo $currentTime; ?>
                                    </h5>

                                </div>

                            </div>

                        </div>

                        <div class="mt-4">

                            <button
                                class="btn btn-primary btn-lg"
                                onclick="showMessage()"
                            >
                                Test JavaScript
                            </button>

                        </div>

                        <div id="result" class="mt-3"></div>

                    </div>

                </div>


                <!-- About Section -->
                <div class="card shadow-sm border-0 mt-4" id="about">

                    <div class="card-body p-4">

                        <h4 class="fw-bold">About This Project</h4>

                        <p class="text-secondary mb-0">
                            This is a sample PHP application used to test
                            automated deployment using GitHub Actions.
                            The application is hosted on InfinityFree
                            through FTP.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">

        <p class="mb-0">
            &copy; <?php echo date("Y"); ?>
            My PHP CI/CD Website
        </p>

    </footer>


    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <!-- Custom JavaScript -->
    <script>

        function showMessage() {

            document.getElementById("result").innerHTML =
                '<div class="alert alert-success">' +
                'JavaScript is working successfully!' +
                '</div>';

        }

    </script>

</body>
<footer>test</footer>
</html>
