<!DOCTYPE html>
<html lang="en">
<head>
<title>Kelola gallery</title>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<script src="js/jquery-1.6.2.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
  <script type="text/javascript">  
   function PreviewImage() {  
   var oFReader = new FileReader();  
   oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);  
   oFReader.onload = function (oFREvent) {  
   document.getElementById("uploadPreview").src = oFREvent.target.result;  
      };  
    };  
   </script>  
<style type="text/css">table {
    border-collapse: collapse;
    width:70%;
}
th { color: black }
th, td {
    text-align: left;
    padding: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#4CAF50;
    color: white;
}</style>

<body id="page1">
<!--==============================header=================================-->
<header>
  <div class="row-1">
    <div class="main">
      <div class="container_12">
        <div class="grid_12">
        <nav>
              <ul class="menu">
                              <li><a href="keloladata.php">Data Kasongan</a></li>
                <li><a href="kelolagallery.php">Gallery</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
   <div class="row-2">
    <div class="main">
      <div class="container_12">
        <div class="grid_9">
          <h1> <a class="logo" href="index.php">Webs<strong>it</strong>e</a> <span>Kasongan</span> </h1>
        </div>
      
        <div class="clear"></div>
      </div>
    </div>
  </div>
</header>
<!-- content -->
<section id="content">
  <div class="bg-top">
    <div class="bg-top-2">
      <div class="bg">
        <div class="bg-top-shadow">
          <div class="main">
            <div class="box">
              <div class="padding">
                <div class="container_12">
                  <div class="wrapper">
                    <div class="grid_12">
                      <div class="indent-left">
                       <?php
  include('koneksi.php');
  ?>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <center>
<!--slider2end--->

<br>
<br>
    <div class="row">
    <div class="container-fluid background-black padding-10">

       <!-- Monthly Newsletter -->
           <div class="container-fluid background-green text-center padding-x margin-top">
            <div class="headline"> <!-- Monthly Newsletter -->
                <address>
                 <?php
  include('koneksi.php');
  ?> <div class="row-">
    <div class="main">
      <div class="20">
        <div class="grid_5">
          <h1> <a class="logo" href=""><strong>kelola</strong></a> <span>Gallery</span> </h1>
        </div>
        <div class="grid_5">
          <form id="search-form" action="#" method="post" enctype="multipart/form-data">
    
          </form>
        
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <br>
    <center>
  <center>
   <form action="inputdatagallery.php" method="post" enctype="multipart/form-data">
<table border="2">
  <tr>
       <th>No</th>
        <th>File</th>
     <th>Nama</th>
    <th></th>
  </tr>
  </div><!-- .wrapper -->
  </body>
  <?php
    $ambildata=mysqli_query($koneksi,"select * from galery");
    while ($isi=mysqli_fetch_array($ambildata)) {
    ?>
    <tr>
                <td><?php echo $isi['id']; ?></td>
        <td><img src="uploads/<?php echo $isi['file']; ?>" style="width: 70px"></td>
        <td><?php echo $isi['nama']; ?></td>
        <td><a href="editgallery.php?id=<?php echo $isi['id']; ?>"><img src="images/edit.png" width="15" height="15" align="left"/></a> 
                </td>
    </tr>
    <?php
    }
  ?>     
  </table> </center></div>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <br>
 <br>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_4">
          <div>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</div>
          <div>Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></div>
          <!-- {%FOOTER_LINK} -->
        </div>
        <div class="grid_4"> <span class="phone-numb"><span>+1(959)</span> 603 6035</span> </div>
        <div class="grid_4">
          <ul class="list-services">
            <li><a href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
            <li><a class="item-4" href="#"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
$(window).load(function () {
    // We only want these styles applied when javascript is enabled
    $('div.navigation').css({
        'width': '320px',
        'float': 'right'
    });
    $('div.content').css('display', 'block');

    // Initially set opacity on thumbs and add
    // additional styling for hover effect on thumbs
    var onMouseOutOpacity = 0.5;
    $('#thumbs ul.thumbs li span').opacityrollover({
        mouseOutOpacity: onMouseOutOpacity,
        mouseOverOpacity: 0.0,
        fadeSpeed: 'fast',
        exemptionSelector: '.selected'
    });

    // Initialize Advanced Galleriffic Gallery
    var gallery = $('#thumbs').galleriffic({
        delay: 7000,
        numThumbs: 12,
        preloadAhead: 6,
        enableTopPager: false,
        enableBottomPager: false,
        imageContainerSel: '#slideshow',
        controlsContainerSel: '',
        captionContainerSel: '',
        loadingContainerSel: '',
        renderSSControls: true,
        renderNavControls: true,
        playLinkText: 'Play Slideshow',
        pauseLinkText: 'Pause Slideshow',
        prevLinkText: 'Prev',
        nextLinkText: 'Next',
        nextPageLinkText: 'Next',
        prevPageLinkText: 'Prev',
        enableHistory: true,
        autoStart: 7000,
        syncTransitions: true,
        defaultTransitionDuration: 900,
        onSlideChange: function (prevIndex, nextIndex) {
            // 'this' refers to the gallery, which is an extension of $('#thumbs')
            this.find('ul.thumbs li span').css({
                opacity: 0.5
            })
        },
        onPageTransitionOut: function (callback) {
            this.find('ul.thumbs li span').css({
                display: 'block'
            });
        },
        onPageTransitionIn: function () {
            this.find('ul.thumbs li span').css({
                display: 'none'
            });
        }
    });
});
</script>
</body>
</html>
