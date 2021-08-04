<?php include("path.php"); ?>

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
<link rel="stylesheet" href="assets/css/style.css">
<!--    <link rel="stylesheet" href="/css/style.css" />-->

    <title>my blog</title>
  </head>
  <body>

  <?php include("app/include/header.php"); ?>

    <!-- start carousel -->
    <div class="container">
      <div class="row">
        <h2 class="slider-title">Top posts</h2>
      </div>
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/city-6238228_1280.jpg" class="d-block w-100" />
            <div
              class="carousel-caption-hack carousel-caption d-none d-md-block"
            >
              <h5><a href="#">First slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/flower-4774929_1280.jpg" class="d-block w-100" />
            <div
              class="carousel-caption-hack carousel-caption d-none d-md-block"
            >
              <h5><a href="#">First slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/seagulls-6309501_1280.jpg" class="d-block w-100" />
            <div
              class="carousel-caption-hack carousel-caption d-none d-md-block"
            >
              <h5><a href="#">First slide label</a></h5>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- end carousel -->

    <!-- block main -->
    <div class="container">
      <div class="content row">
        <div class="main-content col-md-9 col-12">
          <h2>lest posts</h2>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="assets/img/email-3249062_1280.png"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
              <i class="far fa-user">outer name</i>
              <i class="far fa-calendar">mar 11 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                reiciendis soluta delectus ipsa. Provident, nisi facilis vero ad
                quidem autem?
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="assets/img/email-3249062_1280.png"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
              <i class="far fa-user">outer name</i>
              <i class="far fa-calendar">mar 11 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                reiciendis soluta delectus ipsa. Provident, nisi facilis vero ad
                quidem autem?
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="assets/img/email-3249062_1280.png"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
              <i class="far fa-user">outer name</i>
              <i class="far fa-calendar">mar 11 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                reiciendis soluta delectus ipsa. Provident, nisi facilis vero ad
                quidem autem?
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="assets/img/email-3249062_1280.png"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
              <i class="far fa-user">outer name</i>
              <i class="far fa-calendar">mar 11 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                reiciendis soluta delectus ipsa. Provident, nisi facilis vero ad
                quidem autem?
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="assets/img/email-3249062_1280.png"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
              <i class="far fa-user">outer name</i>
              <i class="far fa-calendar">mar 11 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                reiciendis soluta delectus ipsa. Provident, nisi facilis vero ad
                quidem autem?
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img
                src="assets/img/email-3249062_1280.png"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
              <i class="far fa-user">outer name</i>
              <i class="far fa-calendar">mar 11 2019</i>
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio
                reiciendis soluta delectus ipsa. Provident, nisi facilis vero ad
                quidem autem?
              </p>
            </div>
          </div>
        </div>

        <div class="sidebar col-md-3 col-12">
          <div class="section search">
            <h3>Search</h3>
            <form action="/" method="POST">
              <input
                type="text"
                name="search-term"
                class="text-input"
                placeholder="Search..."
              />
            </form>
          </div>
          <div class="section topics">
            <h3>Topics</h3>
            <ul>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Quotes</a></li>
              <li><a href="#">Fiction</a></li>
              <li><a href="#">Biography</a></li>
              <li><a href="#">Motivation</a></li>
              <li><a href="#">Inspiration</a></li>
              <li><a href="#">Life Lessons</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- block main END-->

    <!-- FOOTER -->
  <?php include("app/include/footer.php"); ?>
    <!-- FOOTER END -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
