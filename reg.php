<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/style.css" />

    <title>my blog</title>
  </head>
  <body>
    <header class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <h1>
              <a href="/">my blog</a>
            </h1>
          </div>

          <nav class="col-8">
            <ul>
              <li><a href="#">main</a></li>
              <li><a href="#">about us</a></li>
              <li><a href="#"> service</a></li>
              <li>
                <a href="#">
                  <i class="fas fa-user-alt"></i>
                  office</a
                >
                <ul>
                  <li><a href="#">admin</a></li>
                  <li><a href="#"> logout</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!-- END HEADER -->
    <!-- FORM -->
    <div class="container reg_form">
      <form
        class="row justify-content-md-center"
        method="post"
        action="reg.php"
      >
        <h2>registration</h2>
        <div class="mb-3 col-12 col-md-4">
          <label for="formGroupExampleInput" class="form-label"
            >Example label</label
          >
          <input
            type="text"
            class="form-control"
            id="formGroupExampleInput"
            placeholder="Example input placeholder"
          />
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
          <div class="w-100"></div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
          />
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword2" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword2"
          />
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <button type="button" class="btn btn-secondary">Submit</button>
          <a href="aut.html">registered user</a>
        </div>
      </form>
    </div>
    <!-- END FORM -->
    <!-- FOOTER -->
    <div class="footer container-fluid">
      <div class="footer-content container">
        <div class="row">
          <div class="footer-section about col-md-4 col-12">
            <h3 class="logo-text">Lorem, ipsum.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cupiditate voluptates culpa neque hic? Optio placeat, vel animi at
              et magnam.
            </p>
            <div class="contact">
              <span><i class="fas fa-phone"></i>&nbsp;123-456-789</span>
              <span><i class="fas fa-envelope"></i>info@myblog.com</span>
            </div>
            <div class="socials">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>

          <div class="footer-section links col-md-4 col-12">
            <h3>Quick Links</h3>
            <br />
            <ul>
              <a href="#"><i>lorem</i></a>
              <a href="#"><i>lorem</i></a>
              <a href="#"><i>lorem</i></a>
              <a href="#"><i>lorem</i></a>
              <a href="#"><i>lorem</i></a>
            </ul>
          </div>

          <div class="footer-section contact-form col-md-4 col-12">
            <h3>contacts</h3>
            <br />
            <form action="/" method="POST">
              <input
                type="email"
                name="email"
                class="text-input contact-input"
                placeholder="your email address..."
              />
              <textarea
                name="message"
                class="text-input contact-input"
                placeholder="your message..."
              ></textarea>
              <button type="submit" class="btn btn-big contact-btn">
                <i class="fas fa-envelope"></i>
                Send
              </button>
            </form>
          </div>
        </div>
        <div class="footer-bottom">&copy; myblog.com | designed by my</div>
      </div>
    </div>
    <!-- FOOTER END -->
  </body>
</html>