<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Anurag Gupta Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav
      class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5"
    >
      <a href="index.html" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5">
          <span class="text-primary">ANURAG </span>GUPTA
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
          <a href="#home" class="nav-item nav-link active">Home</a>
          <a href="#about" class="nav-item nav-link">About</a>
          <a href="#qualification" class="nav-item nav-link">Quality</a>
          <a href="#skill" class="nav-item nav-link">Skill</a>
          <a href="#service" class="nav-item nav-link">Service</a>
          <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
          <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>
        <a
          href="https://www.linkedin.com/in/anurag-gupta-4b7b04249?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
          class="btn btn-outline-primary d-none d-lg-block"
          >Hire Me</a
        >
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Video Modal Start -->
    <div
      class="modal fade"
      id="videoModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                class="embed-responsive-item"
                src=""
                id="video"
                allowscriptaccess="always"
                allow="autoplay"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Video Modal End -->

    <!-- Header Start -->
    <div
      class="container-fluid bg-primary d-flex align-items-center mb-5 py-5"
      id="home"
      style="min-height: 100vh"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
            <img
              class="img-fluid w-100 rounded-circle shadow-sm"
              src="img/profile.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7 text-center text-lg-left">
            <h3 class="text-white font-weight-normal mb-3">I'm</h3>
            <h1
              class="display-3 text-uppercase mb-2"
              style="-webkit-text-stroke: 1px rgb(244, 40, 244)"
            >
              Anurag Gupta
            </h1>
            <h1
              class="typed-text-output d-inline font-weight-lighter text-white"
            ></h1>
            <div class="typed-text d-none">
              MERN STACK Developer, Web Developer, Front End Developer, Backend
              Developer, Full Stack Developer
            </div>
            <div
              class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5"
            >
              <a
                href="./resume/AnuragGuptaResume.pdf"
                class="btn btn-outline-light mr-5"
                download
                >Download CV</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
      <div class="container">
        <div
          class="position-relative d-flex align-items-center justify-content-center"
        >
          <h1
            class="display-1 text-uppercase text-white"
            style="-webkit-text-stroke: 1px #dee2e6"
          >
            About
          </h1>
          <h1 class="position-absolute text-uppercase text-primary">
            About Me
          </h1>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-5 pb-4 pb-lg-0">
            <img
              class="img-fluid rounded w-100"
              src="img/about-me.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <h3 class="mb-4">MERN Developer & Full Stack Developer</h3>
            <p>
              I'm deeply immersed in the world of MERN development, specializing
              in crafting immersive user experiences and robust solutions. Armed
              with expertise in TypeScript, React, Redux, and Git, I excel in
              both front-end finesse and back-end brilliance. As a Full Stack
              Developer, I thrive on turning ideas into captivating realities,
              be it through dynamic React tables or secure portfolio websites.
              Currently interning at a forward-thinking product-based company,
              I've honed my skills on projects like AGRLARK Course Purchasing, a
              Netflix-inspired clone, and a weather forecast app.
            </p>
            <div class="row mb-3">
              <div class="col-sm-6 py-2">
                <h6>Name: <span class="text-secondary">Anurag Gupta</span></h6>
              </div>

              <div class="col-sm-6 py-2">
                <h6>
                  Degree:
                  <span class="text-secondary"
                    >Bachelors of Computer Science</span
                  >
                </h6>
              </div>
              <div class="col-sm-6 py-2">
                <h6>
                  Experience:
                  <span class="text-secondary">8 Months Internship</span>
                </h6>
              </div>
              <div class="col-sm-6 py-2">
                <h6>
                  Phone: <span class="text-secondary">+91 91672 43580</span>
                </h6>
              </div>
              <div class="col-sm-6 py-2">
                <h6>
                  Email:
                  <span class="text-secondary">anuraggupta8309@gmail.com</span>
                </h6>
              </div>
              <div class="col-sm-6 py-2">
                <h6>
                  Address:
                  <span class="text-secondary"
                    >Jogeshwari (w), Mumbai-400102, Maharashtra, India</span
                  >
                </h6>
              </div>
              <div class="col-sm-6 py-2">
                <h6>
                  Freelance: <span class="text-secondary">Available</span>
                </h6>
              </div>
            </div>
            <a
              href="https://www.linkedin.com/in/anurag-gupta-4b7b04249?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
              class="btn btn-outline-primary mr-4"
              target="__blank"
              >Hire Me</a
            >
            <a
              href="https://www.linkedin.com/in/anurag-gupta-4b7b04249?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
              class="btn btn-outline-primary"
              target="_blank"
              >Learn More</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
      <div class="container">
        <div
          class="position-relative d-flex align-items-center justify-content-center"
        >
          <h1
            class="display-1 text-uppercase text-white"
            style="-webkit-text-stroke: 1px #dee2e6"
          >
            Quality
          </h1>
          <h1 class="position-absolute text-uppercase text-primary">
            Education & Expericence
          </h1>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h3 class="mb-4">My Education</h3>
            <div class="border-left border-primary pt-2 pl-4 ml-2">
              <div class="position-relative mb-4">
                <i
                  class="far fa-dot-circle text-primary position-absolute"
                  style="top: 2px; left: -32px"
                ></i>
                <h5 class="font-weight-bold mb-1">SSC</h5>
                <p class="mb-2">
                  <strong>SMT.R.M.V.</strong> |
                  <small>2019</small>
                </p>
                <p>Completed 10th from Maharashtra State Board</p>
              </div>
              <div class="position-relative mb-4">
                <i
                  class="far fa-dot-circle text-primary position-absolute"
                  style="top: 2px; left: -32px"
                ></i>
                <h5 class="font-weight-bold mb-1">HSC-SCIENCE</h5>
                <p class="mb-2">
                  <strong>VALIA COLLEGE </strong> |
                  <small>2021</small>
                </p>
                <p>Completed 12th Scicence with PCMB Maharashtra State Board</p>
              </div>
              <div class="position-relative mb-4">
                <i
                  class="far fa-dot-circle text-primary position-absolute"
                  style="top: 2px; left: -32px"
                ></i>
                <h5 class="font-weight-bold mb-1">
                  Bachelors of Computer Science
                </h5>
                <p class="mb-2">
                  <strong>Thakur College</strong> |
                  <small>2024</small>
                </p>
                <p>
                  Pursuing Bachelors of Computer Science with University of
                  Mumbai
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="mb-4">My Expericence</h3>
            <div class="border-left border-primary pt-2 pl-4 ml-2">
              <div class="position-relative mb-4">
                <i
                  class="far fa-dot-circle text-primary position-absolute"
                  style="top: 2px; left: -32px"
                ></i>
                <h5 class="font-weight-bold mb-1">Front End Developer</h5>
                <p class="mb-2">
                  <strong>Agarwal APML Packers And Movers</strong> |
                  <small>03/2023 - 06/2023</small>
                </p>
                <p>
                  - Developed a dynamic React table for enhanced data
                  visualization.Created a secure portfolio website with user
                  registration, login, and logout functionality.Utilized MongoDB
                  for efficient activity tracking and management. Passionate
                  about delivering intuitive user experiences. Contributed to an
                  IoT project, demonstrating strong coding logic skills.Worked
                  extensively on IoT truck container data logger and reaime IoT
                  light control.
                </p>
              </div>
              <div class="position-relative mb-4">
                <i
                  class="far fa-dot-circle text-primary position-absolute"
                  style="top: 2px; left: -32px"
                ></i>
                <h5 class="font-weight-bold mb-1">Machine Learning</h5>
                <p class="mb-2">
                  <strong>OPS COMBINATOR PVT LTD</strong> |
                  <small>07/2023 - 08/2023</small>
                </p>
                <p>
                  - Collected and preprocessed TV news channel data for
                  analysis. Developed a robust data preprocessing pipeline to
                  enhance data quality. Explored and selected appropriate
                  machine learning algorithms for analysis. Trained and
                  fine-tuned machine learning models using collected data.
                  Evaluated model performance and implemented enhancements for
                  better accuracy.
                </p>
              </div>
              <div class="position-relative mb-4">
                <i
                  class="far fa-dot-circle text-primary position-absolute"
                  style="top: 2px; left: -32px"
                ></i>
                <h5 class="font-weight-bold mb-1">Full Stack Developer</h5>
                <p class="mb-2">
                  <strong>A H Satija & Co</strong> |
                  <small>10/2023 - 12/2023</small>
                </p>
                <p>
                  Developed and maintained web applications using MERN,
                  TypeScript, Redux, and Git, ensuring high performance and
                  scalability. Led the development of a restaurant app with a
                  product-based approach, emphasizing user experience and
                  functionality.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Qualification End -->

    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
      <div class="container">
        <div
          class="position-relative d-flex align-items-center justify-content-center"
        >
          <h1
            class="display-1 text-uppercase text-white"
            style="-webkit-text-stroke: 1px #dee2e6"
          >
            Skills
          </h1>
          <h1 class="position-absolute text-uppercase text-primary">
            My Skills
          </h1>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">MERN</h6>
                <h6 class="font-weight-bold">80%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-primary"
                  role="progressbar"
                  aria-valuenow="80"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">JavaScript</h6>
                <h6 class="font-weight-bold">85%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-warning"
                  role="progressbar"
                  aria-valuenow="85"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">PHP</h6>
                <h6 class="font-weight-bold">85%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-danger"
                  role="progressbar"
                  aria-valuenow="85"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">REDUX</h6>
                <h6 class="font-weight-bold">90%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-danger"
                  role="progressbar"
                  aria-valuenow="90"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">GIT</h6>
                <h6 class="font-weight-bold">90%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-dark"
                  role="progressbar"
                  aria-valuenow="90"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">TYPESCRIPT</h6>
                <h6 class="font-weight-bold">60%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-info"
                  role="progressbar"
                  aria-valuenow="60"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">TAILWIND CSS</h6>
                <h6 class="font-weight-bold">70%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-primary"
                  role="progressbar"
                  aria-valuenow="70"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">PYTHON</h6>
                <h6 class="font-weight-bold">85%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-warning"
                  role="progressbar"
                  aria-valuenow="85"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">VITE JS</h6>
                <h6 class="font-weight-bold">85%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-danger"
                  role="progressbar"
                  aria-valuenow="85"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">BOOTSTRAP</h6>
                <h6 class="font-weight-bold">90%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-danger"
                  role="progressbar"
                  aria-valuenow="90"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">HTML</h6>
                <h6 class="font-weight-bold">90%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-dark"
                  role="progressbar"
                  aria-valuenow="90"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="skill mb-4">
              <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold">CSS</h6>
                <h6 class="font-weight-bold">85%</h6>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-info"
                  role="progressbar"
                  aria-valuenow="85"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Skill End -->

    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
      <div class="container">
        <div
          class="position-relative d-flex align-items-center justify-content-center"
        >
          <h1
            class="display-1 text-uppercase text-white"
            style="-webkit-text-stroke: 1px #dee2e6"
          >
            Service
          </h1>
          <h1 class="position-absolute text-uppercase text-primary">
            My Services
          </h1>
        </div>
        <div class="row pb-3">
          <div class="col-lg-4 col-md-6 text-center mb-5">
            <div class="d-flex align-items-center justify-content-center mb-4">
              <i
                class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"
              ></i>
              <h4 class="font-weight-bold m-0">Web Design</h4>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center mb-5">
            <div class="d-flex align-items-center justify-content-center mb-4">
              <i
                class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"
              ></i>
              <h4 class="font-weight-bold m-0">Web Development</h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 text-center mb-5">
            <div class="d-flex align-items-center justify-content-center mb-4">
              <i
                class="fab fa-2x fa-apple service-icon bg-primary text-white mr-3"
              ></i>
              <h4 class="font-weight-bold m-0">Apps Development</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services End -->

    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
      <div class="container">
        <div
          class="position-relative d-flex align-items-center justify-content-center"
        >
          <h1
            class="display-1 text-uppercase text-white"
            style="-webkit-text-stroke: 1px #dee2e6"
          >
            Gallery
          </h1>
          <h1 class="position-absolute text-uppercase text-primary">
            My Portfolio
          </h1>
        </div>
        <div class="row">
          <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
              <li
                class="btn btn-sm btn-outline-primary m-1 active"
                data-filter="*"
              >
                All
              </li>
              <li
                class="btn btn-sm btn-outline-primary m-1"
                data-filter=".first"
              >
                Design
              </li>
              <li
                class="btn btn-sm btn-outline-primary m-1"
                data-filter=".second"
              >
                Development
              </li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
              <img
                class="img-fluid rounded w-100"
                src="img/Weather_app.png"
                alt=""
              />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="img/Weather_app.png" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
            <div class="position-relative overflow-hidden mb-2">
              <img
                class="img-fluid rounded w-100"
                src="img/food_booking.png"
                alt=""
              />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="img/food_booking.png" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
            <div class="position-relative overflow-hidden mb-2">
              <img
                class="img-fluid rounded w-100"
                src="img/netflix_app.png"
                alt=""
              />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="img/netflix_app.png" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio End -->
    
    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post" action="contact.php">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" name="name"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" name="email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" name="subject"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message" name="message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton" name="submit">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5"
    >
      <div class="container text-center py-5">
        <div class="d-flex justify-content-center mb-4">
          <a class="btn btn-light btn-social mr-2"
            ><i class="fab fa-twitter"></i
          ></a>
          <a class="btn btn-light btn-social mr-2"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a
            class="btn btn-light btn-social mr-2"
            href="https://www.linkedin.com/in/anurag-gupta-4b7b04249?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
            target="_blank"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <a class="btn btn-light btn-social"
            ><i class="fab fa-instagram"></i
          ></a>
        </div>
        <div class="d-flex justify-content-center mb-3">
          <a class="text-white" href="#">Privacy</a>
          <span class="px-3">|</span>
          <a class="text-white" href="#">Terms</a>
          <span class="px-3">|</span>
          <a class="text-white" href="#">FAQs</a>
          <span class="px-3">|</span>
          <a class="text-white" href="#">Help</a>
        </div>
        <p class="m-0">
          &copy;
          <a class="text-white font-weight-bold" href="#">AGRLARK</a>. All
          Rights Reserved. Designed by
          <a class="text-white font-weight-bold" href="https://htmlcodex.com"
            >Anurag Gupta</a
          >
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
