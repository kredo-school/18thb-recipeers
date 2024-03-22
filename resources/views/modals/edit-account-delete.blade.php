{{-- still editing --}}

<!doctype html>
<html lang="en">
    <head>
        <title></title>

        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="modal fade" id="delete-account-id" aria-labelledby="accountDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h2 class="modal-title h5 color1" id="accountDeleteModal">
                            <i class="fa-solid fa-user-xmark"></i>
                            Delete Account
                        </h2>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->

                        <div class="horizontal-line2"></div>
                        <div class="horizontal-line3"></div>
                        <div class="horizontal-line4"></div>
                    </div>

                    <div class="modal-body">
                        <p>You are about to delete your account.</p>
                    </div>

                    <!-- Avatar -->
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-user icon-lg color1" class="icon-md"></i>
                        <p class="text-center">Username</p>
                    </div>

                    <!-- buttons -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sub" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-main">Delete</button>
                    </div>

                    <!-- bottom image -->
                    <div class="box">
                        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
                        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
                        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
                        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
