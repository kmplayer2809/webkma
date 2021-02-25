<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Học Viện Kĩ Thuật Mật Mã</title>
  <link rel="shortcut icon" href="./img/logoico.png" />
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.2/iconfont/material-icons.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <link href="css/reponsive.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="wrapper">
    <?php
    session_start();
    include("admin/modules/config.php");
    include("modules/header.php");
   /*  include("modules/slider.php"); 
     include("modules/banner.php"); */
    include("modules/content.php");
    /* include("modules/about.php");
    include("modules/teacher.php"); 
     include("modules/feedback.php");
    include("modules/contact.php"); */
    include("modules/footer.php");


    
        // include("modules/banner.php");
    // include("modules/menu.php");
    // include("modules/footer.php");
    ?>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.carousel').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        fade: true,
        prevArrow: '<i class="material-icons left">keyboard_arrow_left</i>',
        nextArrow: '<i class="material-icons right">keyboard_arrow_right</i>',
        cssEase: 'linear'
      });
      $('.feedback__content').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1300,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 950,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          // {
          //   breakpoint: 576,
          //   settings: {
          //     slidesToShow: 1,
          //     slidesToScroll: 1
          //   }
          // }
        ]
      });
      $('.counter').counterUp({
        delay: 3,
        time: 3000
      });
    });
  </script>
  <script>
//         function button_toggle_navbar() {
//           console.log("done");
//           var x = document.getElementById("myTopnav");
//           if (x.className === "topnav") {
//               x.className += " responsive";
//           } else {
//               x.className = "topnav";
//           }
// }
document.getElementById("btn_menu_reponsive").addEventListener("click", ()=>{
  console.log("done");
  document.getElementById("myTopnav").style.transform="translateX(0)";

  
});
document.getElementById("button_cancel").addEventListener("click", ()=>{
  console.log("done");
  document.getElementById("myTopnav").style.transform="translateX(100%)";

  
});

  </script>
</body>

</html>