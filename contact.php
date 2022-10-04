<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>
  <div class="container"> <!-- Begin Container -->
    <header>
        <?php include 'header.php' ?>
    </header>

    <main>
        <div class="row">
          <div class="two columns">
            <img src="" alt="">
          </div>
          <div class="eight columns">
            <h2>Reach Out!</h2>
          </div>
          <div class="two columns">
            <img src="" alt="">
          </div>
        </div>

        <div class="row">
          <div class="two columns">
            <img src="" alt="">
          </div>
          <div class="eight columns">
            <form class="contactForm" action="" method="post">
                <label for="name">Your Name</label>
                <input id="name" type="text" name="Name">

                <label for="name">Subject</label>
                <input id="name" type="text" name="Name">

                <label for="email">Your Email</label>
                <input id="email" type="email" name="Email">

                <label for="message">Message</label>
                <textarea id="message" name="Message"></textarea>

                <input class="button-primary" type="submit" value="Send" />
            </form>
          </div>
          <div class="two columns">
            <img src="" alt="">
          </div>
        </div>
    </main>
  </div> <!-- End Container -->

  <div class="footer"></div>

  <script src="javascript/main.js" type="module"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
