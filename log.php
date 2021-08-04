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

    <link rel="stylesheet" href="assets/css/style.css" />

    <title>login</title>
  </head>
  <body>
  <?php include("app/include/header.php"); ?>

    <!-- END HEADER -->
    <!-- FORM -->
    <div class="container reg_form">
      <form
        class="row justify-content-md-center"
        method="post"
        action="log.php"
      >
        <h2>LOGIN</h2>
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
          <button type="button" class="btn btn-secondary">LOGIN</button>
          <a href="aut.html">registration</a>
        </div>
      </form>
    </div>
    <!-- END FORM -->
    <!-- FOOTER -->
  <?php include("app/include/footer.php"); ?>
    <!-- FOOTER END -->
  </body>
</html>
