<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="d-flex g-4 justify-content-between">
                <div class="">
                    <a href="#" class="text-decoration-none">
                        <h1 class="text-white mb-0">NoahFashion</h1>
                        <p class="text-warning mb-0">High fashion</p>
                    </a>
                </div>
                <div class="">
                    <div class="d-flex justify-content-end pt-3">
                        <a class="btn  btn-outline-secondary mx-2 rounded-circle" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-secondary mx-2 rounded-circle" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary mx-2 rounded-circle" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-secondary rounded-circle" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-12">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Why People Like us!</h4>
                    <p class="mb-4">
                        We know how to make you shine.<br>
                        Your style, we understand.<br>
                        Quality and style are both ours.
                    </p>
                    <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Shop Info</h4>
                    <a class="text-decoration-none text-white-50" href="">About Us</a>
                    <a class="text-decoration-none text-white-50" href="<?php echo getUrl("?action=contact")?>">Contact Us</a>
                    <a class="text-decoration-none text-white-50" href="">Privacy Policy</a>
                    <a class="text-decoration-none text-white-50" href="">Terms &amp; Condition</a>
                    <a class="text-decoration-none text-white-50" href="">Return Policy</a>
                    <a class="text-decoration-none text-white-50" href="">FAQs &amp; Help</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div>
                    <h4 class="text-light mb-3">Contact</h4>
                    <p>Address: Le Hong Phong, Binh Thuy, Can Tho</p>
                    <p>Email: phamtien3069@gmail.com</p>
                    <p>Phone: +84 3915 9518</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab"
                            data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="login-tab-pane"
                            aria-selected="true">
                            Login
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="register-tab" data-bs-toggle="tab"
                            data-bs-target="#register-tab-pane" type="button" role="tab"
                            aria-controls="register-tab-pane" aria-selected="false">
                            Register
                        </button>
                    </li>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab"
                    tabindex="0">
                    <form action="<?php echo getUrl("login.php") ?>" method="POST">
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" required class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="loginPasswordInput" required
                                            class="form-control">
                                        <button type="button" id="toggleLoginPassword" data-inputId="loginPasswordInput"
                                            class="input-group-text btn btn-outline-secondary">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="submit" class="btn btn-primary">
                                Login
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="register-tab-pane" role="tabpanel" aria-labelledby="register-tab"
                    tabindex="0">
                    <form action="<?php echo getUrl("register.php") ?>" method="POST">
                        <div class="modal-body">

                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="">
                                        First Name (*)
                                    </label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First name"
                                        id="first_name">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="">
                                        Last Name (*)
                                    </label>
                                    <input type="text" name="last_name" class="form-control" id="last_name"
                                        placeholder="Last name">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="form-group col-12 col-md-6">
                                    <label for="">
                                        Email (*)
                                    </label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email name">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="">
                                        Password (*)
                                    </label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="registerInputPassword" required
                                            class="form-control">
                                        <button type="button" id="toggleRegisterPassword"
                                            data-inputId="registerInputPassword"
                                            class="input-group-text btn btn-outline-secondary">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <label for="confirm">
                                    <input type="checkbox" id="confirm">
                                    I've read Terms & Condition
                                </label>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="submit" class="btn btn-primary">
                                Register
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>