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

    <title>my blog</title>
  </head>
  <body>
  <?php include("app/include/header.php"); ?>

    <!-- block main -->
    <div class="container">
      <div class="content row">
        <div class="main-content col-md-9 col-12">
          <h2>Titel</h2>
          <div class="single_post row">
            <div class="img col-12">
              <img
                src="assets/img/email-3249062_1280.png"
                alt=""
                class="img-thumbnail"
              />
            </div>
            <div class="single_post_text col-12">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
              vero, et, a, libero eaque accusamus id assumenda officiis eveniet
              modi dignissimos. Ad nisi corporis magni fuga, minima laborum ex.
              Similique vel nostrum, deleniti ad itaque alias sunt doloribus
              dolore autem, nam incidunt qui doloremque, commodi quaerat maxime
              sint. Deserunt nihil error facilis perspiciatis illo, itaque
              voluptatem aliquam rem sapiente. Suscipit itaque facilis
              voluptatem corporis soluta iste minus, dolores nemo ducimus vel
              voluptas hic nostrum iusto atque fuga, ipsum doloremque sint nisi
              fugiat ab. Ullam accusantium quaerat, eum voluptatem odit
              praesentium provident beatae modi. Veniam modi itaque molestiae
              fugit aspernatur voluptatem non asperiores rem esse perspiciatis
              facilis nemo voluptatibus rerum, doloremque magni perferendis,
              voluptas sapiente cum iste nihil saepe suscipit ea distinctio? At
              obcaecati eum iste adipisci sapiente nesciunt commodi natus,
              impedit quod ullam sequi unde culpa tenetur deserunt debitis
              expedita molestiae nobis accusantium distinctio et consectetur
              architecto esse! Pariatur vitae perspiciatis velit suscipit alias,
              neque voluptates ab reiciendis aliquam recusandae, soluta ipsam id
              accusamus necessitatibus, sed sunt magni sit nostrum asperiores
              provident! Rerum, minima aperiam eius at consequuntur quibusdam,
              tenetur dolorem, suscipit nulla ipsa exercitationem voluptatem.
              Dolore atque maxime maiores, aspernatur libero dolor est odio
              repudiandae porro veniam nisi blanditiis.
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
