<?php
$errors = [];
$errorMessage = '';
$successMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }
    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
    if (empty($errors)) {
        $toEmail = 'chris@athenablue.dev;rich@cflnm.com';
        $emailSubject = 'CFLNM Contact Form Submission';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $body = "Name: {$name} <br><br>Email: {$email} <br><br>Phone: {$phone}<br><br>Message:<br>{$message}";

        if (mail($toEmail, $emailSubject, $body, $headers)) {
			            $successMessage = "<div class='alert alert-success text-center'>Thank you for your message. </div>";
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later.';
            $errorMessage = "<div class='alert alert-danger'>We were unable to send your message. Please try again later.</div>";
        }

    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CFLNM</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/CFLNM.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#recommendations">Referrals</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
              <div class="masthead-heading text-uppercase">Central Florida<br>Network Management</div>
                <div class="masthead-subheading">Helping Central Florida businesses stay connected, secure, and efficient for over 15 years.</div>
                
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
           
                <div class="container">
                  <div class="text-center">
                      <h2 class="section-heading text-uppercase">Services</h2>
                      <h3 class="section-subheading text-muted">Central Florida’s Trusted Technology Experts – Over 15 Years of Excellence in Network Design, Wi-Fi, and Security Solutions</h3>
                  </div>
                  <h2>Network Design & Management</h2>
                    <p>A reliable, well-designed network is the backbone of any modern business. At CFLNM, we specialize in creating tailored network solutions that ensure your business stays connected and productive. Our network design and management services include:</p>
                    <ul>
                        <li>Comprehensive network assessments</li>
                        <li>Custom network architecture and infrastructure design</li>
                        <li>Scalable solutions for growing businesses</li>
                        <li>Ongoing network monitoring and maintenance</li>
                    </ul>
               
                    <h2>Low Voltage Wiring</h2>
                    <p>Proper wiring is essential for seamless communication and technology integration. Our expert technicians provide professional low-voltage wiring installations for networks, telecommunication systems, and security equipment. Our services include:</p>
                    <ul>
                        <li>Structured cabling for voice, data, and video</li>
                        <li>Fiber optic installations</li>
                        <li>Cable management and troubleshooting</li>
                        <li>Standards-compliant, code-safe installations</li>
                    </ul>
               
                    <h2>Wi-Fi Solutions</h2>
                    <p>From small offices to large industrial spaces, our Wi-Fi solutions provide reliable, fast wireless connectivity where you need it most. We offer:</p>
                    <ul>
                        <li>Wi-Fi design and deployment for optimal coverage</li>
                        <li>Solutions for business premises, warehouses, and outdoor areas</li>
                        <li>Secure, high-speed networks for employees and guests</li>
                        <li>Troubleshooting and ongoing support</li>
                    </ul>
                
                    <h2>Point-to-Point Wireless Systems</h2>
                    <p>Our point-to-point wireless systems are ideal for businesses that need to connect multiple locations without the hassle of laying cables. We provide:</p>
                    <ul>
                        <li>Long-range wireless bridge solutions</li>
                        <li>Secure, high-speed data transmission between buildings</li>
                        <li>Remote site connectivity with minimal infrastructure</li>
                        <li>Solutions tailored to your bandwidth and distance needs</li>
                    </ul>
                
                    <h2>Camera Security Systems</h2>
                    <p>Protecting your business is critical, and we make it easier with professional security camera installations. Whether you need monitoring for your office, warehouse, or commercial space, we offer:</p>
                    <ul>
                        <li>High-definition IP camera systems</li>
                        <li>Remote monitoring and mobile access</li>
                        <li>Motion detection and alert systems</li>
                        <li>Scalable solutions for businesses of all sizes</li>
                    </ul>
  </div>
                
     </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">

            <div class="container">
              <div class="text-center">
              <img src="assets/img/logo-square-transparent.png" width="50%" />
            </div>
              <br>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Central Florida’s Trusted Technology Experts – Over 15 Years of Excellence in Network Design, Wi-Fi, and Security Solutions</h3>
                </div>
                Founded in 2006, CFLNM has grown from a small local operation into Central Florida’s go-to consulting firm for cutting-edge network solutions and security services. With over 15 years of experience, we have worked with businesses of all sizes, delivering customized solutions tailored to their unique needs.
<br><br>
Our Mission: Our mission is simple: to provide reliable, secure, and high-performance technology solutions that empower businesses to thrive. Whether it's designing a robust network infrastructure, installing high-quality security systems, or optimizing wireless connectivity, we’ve got you covered.
<br><br>
Why Choose Us?
<br>
<ul>
  <li>15+ Years of Experience: Our team brings deep technical expertise and practical solutions to every project.  </li>
  <li>Customer-Centric Approach: We work closely with you to ensure we meet your exact needs, on time and on budget.</li>
  <li>End-to-End Service: From consultation and design to installation and support, we handle everything for you.
</li>
</ul>
</div>
        </section>

        <!-- About-->
        <section class="page-section" id="recommendations">
          <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase">Referrals</h2>
                  <h3 class="section-subheading text-muted">What Our Clients Are Saying</h3>
              </div>
              "Always a pleasure working with Rich. Worked along side him and CFLNM for over 15 years  on a variety of systems. CFLNM is always the first place I call when I need help with any network." - <a href="https://www.athenablue.dev" target="_blank">Athena Blue, LLC</a></div>
              <br><br>
</div>
      </section>
       
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-white">
                      Have questions or ready to get started? We’re here to help. Contact us today for a free consultation and let’s discuss how we can assist with your network, security, or wiring needs.
                      </h3>
                </div>
                <form method="post" id="contactForm" action="index.php">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="sendMessage" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; cflnm.com 2006-2024</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <!---<a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>--->
                    </div>
                </div>
            </div>
        </footer>
              <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
