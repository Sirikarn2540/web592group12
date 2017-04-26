<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
<style>
  .modal-header, h5, .close {
      background-color:Gray;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  </style>
</head>
<body>

<div id="tabs">
  <ul >
    <li><a href="#tabs-1">Adidas</a></li>
    <li><a href="#tabs-2">Converse</a></li>
    <li><a href="#tabs-3">Nike</a></li>
  </ul>
  
<div id="tabs-1" >
    <p>ADIDAS</p>
<div class="row">
         <div class="col-xs-12 text-center col-sm-6">
                 <div class="thumbnail product-box">
                      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BA7137_SL_eCom.jpg" alt="" />
                            <div class="caption">
                                
                                <h4><p style="color:black">SUPERSTAR</p></h4><br>
                                <p>Price : <strong>3,490 THB</strong>  </p>
                               
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#01">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="01" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">ADIDAS SUPERSTAR</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel01" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel01" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel01" data-slide-to="1"></li>
    <li data-target="#myCarousel01" data-slide-to="2"></li>
    <li data-target="#myCarousel01" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BA7137_LSL_eCom.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BA7137_FM_eCom.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BA7137_BL_eCom.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BA7137_TPP_eCom.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel01" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel01" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Adidas</p>
 <p>Price : 3,490 Bath</p>
 <p>Color : White-Blue</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->

                            </div>
                  </div>
             </div>
   <!-- /.col -->

        <div class="col-xs-12 text-center col-sm-6">
                <div class="thumbnail product-box">
                       <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BB0189_SL_eCom.jpg" alt="" />
                            <div class="caption">
                            
                            <h4><p style="color:black">SUPERSTAR BOOST SHOES</p></h4><br>
                             <p>Price : <strong>4,290 THB</strong>  </p>

                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#02">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="02" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">ADIDAS SUPERSTAR BOOST SHOES</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel02" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel02" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel02" data-slide-to="1"></li>
    <li data-target="#myCarousel02" data-slide-to="2"></li>
    <li data-target="#myCarousel02" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BB0189_LSL_eCom.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BB0189_FM_eCom.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BB0189_BL_eCom.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BB0189_TPP_eCom.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel02" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel02" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Adidas</p>
 <p>Price :4,290 Bath</p>
 <p>Color : Black-White</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->

 
                             </div>
                </div>
          </div>
   <!-- /.col -->

       <div class="col-xs-12 text-center col-sm-6">
                <div class="thumbnail product-box">
                        <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/S75147_SL_eCom.jpg" alt="" />
                            <div class="caption">
                            
                            <h4><p style="color:black">STAN SMITH OG PRIMEKNIT</a></h4><br>
                             <p>Price : <strong>4,990 THB</strong>  </p>
                            
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#03">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="03" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">ADIDAS STAN SMITH  OG PRIMEKNIT</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel03" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel03" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel03" data-slide-to="1"></li>
    <li data-target="#myCarousel03" data-slide-to="2"></li>
    <li data-target="#myCarousel03" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/S75147_LSL_eCom.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/S75147_FM_eCom.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/S75147_BL_eCom.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/S75147_TPP_eCom.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel03" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel03" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Adidas</p>
 <p>Price :4,990 Bath</p>
 <p>Color : White-Red</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->

  
                             </div>
                 </div>
         </div>
  <!-- /.col -->

               <div class="col-xs-12 text-center col-sm-6">
                       <div class="thumbnail product-box">
                          <img src="http://d12vfgykacfet6.cloudfront.net/tmp/catalog/product/large/BY2791_SL_eCom.jpg" alt="" />
                                <div class="caption">
                                
                                <h4><p style="color:black">PRIMEKNIT FLB</p></h4><br>
                                <p>Price : <strong>5,990 THB</strong>  </p>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#04">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="04" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">ADIDAS PRIMEKNIT FLB</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel04" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel04" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel04" data-slide-to="1"></li>
    <li data-target="#myCarousel04" data-slide-to="2"></li>
    <li data-target="#myCarousel04" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://demandware.edgesuite.net/sits_pod14-adidas/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw40576ae4/zoom/BY2791_02_standard.jpg?sw=2000&sfrm=jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://demandware.edgesuite.net/sits_pod14-adidas/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw39e38a43/zoom/BY2791_05_standard.jpg?sw=2000&sfrm=jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://demandware.edgesuite.net/sits_pod14-adidas/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dwfe02f905/zoom/BY2791_04_standard.jpg?sw=2000&sfrm=jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://demandware.edgesuite.net/sits_pod14-adidas/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw9e8191e8/zoom/BY2791_41_detail.jpg?sw=2000&sfrm=jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel04" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel04" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Adidas</p>
 <p>Price : 5,990 Bath</p>
 <p>Color : Black-White</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                               </div>
                       </div>
                </div>
       <!-- /.col -->
    </div>
<!-- /.row 2  -->

  </div>


  <div id="tabs-2" >
    <p>CONVERSE</p>
    <div class="row">
    
               <div class="col-xs-12 text-center col-sm-6">
                       <div class="thumbnail product-box">
                              <img src="http://www.limstreet.com/wp-content/uploads/2016/12/stussy-converse-one-star-74-02-768x512.jpg" alt="" />
                                <div class="caption">
                                
                                <h4><p style="color:black">X STUSSY ONE STAR’74</p></h4><br>
                                <p>Price : <strong>4,900 THB</strong>  </p>
                                
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#05">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="05" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">CONVERSE X STUSSY ONE STAR ’74</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel05" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel05" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel05" data-slide-to="1"></li>
    <li data-target="#myCarousel05" data-slide-to="2"></li>
    <li data-target="#myCarousel05" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://s-media-cache-ak0.pinimg.com/originals/32/44/b8/3244b8d86fdd04c12f58bda53aaba818.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="https://klekt.s3.amazonaws.com/4170065-klekt-converse-x-stussy-one-star-74-stussy-icons-normal.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="https://www.eukicks.com/wp-content/uploads/2016/11/FH16_FS_OneStar74_Stussy_ToeSingle_Pink_64373.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://undefeated.com/sites/default/files/styles/1024/public/products/foootwear_stussy_x-converse-one-star-74-ox_155342c.view_1.jpg?itok=GHAojPPt" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel05" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel05" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Converse</p>
 <p>Price : 4,900 Bath</p>
 <p>Color : Pink</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                                </div>
                        </div>
              </div>
       <!-- /.col -->

                  <div class="col-xs-12 text-center col-sm-6">
                         <div class="thumbnail product-box">
                           <img src="http://www.limstreet.com/wp-content/uploads/2016/11/Converse-onestarupdate-3-768x512.jpg" alt="" />
                                <div class="caption">

                                <h4><p style="color:black">ONE STAR’74 TECH COLLECTION</p></h4><br>
                                <p>Price : <strong>4,900 THB</strong>  </p>
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#06">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="06" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">CONVERSE ONE STAR ’74 TECH COLLECTION</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel06" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel06" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel06" data-slide-to="1"></li>
    <li data-target="#myCarousel06" data-slide-to="2"></li>
    <li data-target="#myCarousel06" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://d1gb2jjgc1xisz.cloudfront.net/media/catalog/product/cache/1/image/1800x/040ec09b1e35df139433887a97daa66f/c/o/converse-one-star-74-tech-low-top-mens-shoe-middle_11.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://theillest.pl/wp-content/uploads/2016/11/Converse-One-Star-74-Tech-6.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://d1839fwqq2d13y.cloudfront.net/media/wysiwyg/_10180_hd_1600.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="https://s-media-cache-ak0.pinimg.com/originals/50/41/64/504164f2515b9b8802d49e82f8921a46.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel06" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel06" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Converse</p>
 <p>Price : 4,900 Bath</p>
 <p>Color : Brown-Green</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                                </div>
                          </div>
                  </div>
          <!-- /.col -->


            <div class="col-xs-12 text-center col-sm-6">
                    <div class="thumbnail product-box">
                     <img src="https://www.converse.co.th/wp-content/uploads/2016/01/121457-1000x667.jpg" alt="" />
                            <div class="caption">
                            
                            <h4><p style="color:black">JACK PURCELL SIGNATURE OX</p></h4><br>
                             <p>Price : <strong>4,700 THB</strong>  </p>
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#07">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="07" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">CONVERSE JACK PURCELL SIGNATURE</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel07" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel07" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel07" data-slide-to="1"></li>
    <li data-target="#myCarousel07" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://www.converse.co.th/wp-content/uploads/2016/01/121457-720x480.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="https://scontent.cdninstagram.com/t51.2885-15/e15/1390241_898173326946682_1504326127_n.jpg?ig_cache_key=MTIwNzM1NDI0MTQ4NTIwMTk2MQ%3D%3D.2" alt="Chania">
    </div>

    <div class="item">
      <img src="http://s3-ap-southeast-1.amazonaws.com/wpimages.mover.in.th/wp-content/uploads/2016/09/01045138/12825694_1698102993797048_81508929_n.jpg" alt="Flower">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel07" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel07" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Converse</p>
 <p>Price : 4,700 Bath</p>
 <p>Color : Brown-Green</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                             </div>
                    </div>
              </div>
     <!-- /.col -->

            <div class="col-xs-12 text-center col-sm-6">
                  <div class="thumbnail product-box">
                          <img src="https://www.converse.co.th/wp-content/uploads/2017/03/12100643P.jpg" alt="" />
                                <div class="caption">
                                
                                <h4><p style="color:black">CHUCK TAYLOR ALL STAR MODERN COLOR OX</a></h4>
                                <p>Price : <strong>4,200 THB</strong>  </p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#08">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="08" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">CONVERSE CHUCK TAYLOR ALL STAR MODERN COLOR OX</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel08" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel08" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel08" data-slide-to="1"></li>
    <li data-target="#myCarousel08" data-slide-to="2"></li>
    <li data-target="#myCarousel08" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://www.converse.co.th/wp-content/uploads/2017/03/12100643P.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="https://www.converse.co.th/wp-content/uploads/2017/03/CTAS_Modern_Colors_156643_DeepBordeaux_Ox_02.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="https://www.converse.co.th/wp-content/uploads/2017/03/CTAS_Modern_Colors_156643_DeepBordeaux_Ox_03.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="https://www.converse.co.th/wp-content/uploads/2017/03/CTAS_Modern_Colors_156643_DeepBordeaux_Ox_04.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel08" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel08" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Converse</p>
 <p>Price : 4,290 Bath</p>
 <p>Color : Red</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                                 </div>
                    </div>
             </div>
    <!-- /.col -->
</div>
    <!-- /.row 2 -->

  </div>



 <div id="tabs-3">
    <p>NIKE</p>
    <div class="row">
    <div class="col-xs-12 text-center col-sm-6">
                   <div class="thumbnail product-box">
                           <img src="http://images.nike.com/is/image/DotCom/PDP_HERO/864025_200_A_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89CE0B8B9E0B989-air-force-1-ultraforce-mid.jpg" alt="" />
                            <div class="caption">
                      
                             <h4><p style="color:black">AIR FORCE 1 ULTRAFORCE MID</p></h4><br>
                              <p>Price : <strong>4,200 THB</strong>  </p>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#09">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="09" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">NIKE AIR FORCE 1 ULTRAFORCE MID</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel09" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel09" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel09" data-slide-to="1"></li>
    <li data-target="#myCarousel09" data-slide-to="2"></li>
    <li data-target="#myCarousel09" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://images3.nike.com/is/image/DotCom/PDP_HERO_M/864025_200_BRAND_A/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89CE0B8B9E0B989-air-force-1-ultraforce-mid.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://images.nike.com/is/image/DotCom/PDP_HERO_M/864025_200_D_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89CE0B8B9E0B989-air-force-1-ultraforce-mid.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://images2.nike.com/is/image/DotCom/PDP_HERO_M/864025_200_E_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89CE0B8B9E0B989-air-force-1-ultraforce-mid.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://images.nike.com/is/image/DotCom/PDP_HERO_M/864025_200_F_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89CE0B8B9E0B989-air-force-1-ultraforce-mid.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel09" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel09" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Nike</p>
 <p>Price : 4,200 Bath</p>
 <p>Color : Old-Rose</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                            </div>
                    </div>
             </div>
   <!-- /.col -->

             <div class="col-xs-12 text-center col-sm-6">
                     <div class="thumbnail product-box">
                            <img src="http://images.nike.com/is/image/DotCom/PDP_HERO/896445_100_A_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89CE0B8B9E0B989-roshe-two-breathe.jpg" alt="" />
                                <div class="caption">
                                
                                <h4><p style="color:black">ROSHE TWO BREATHE</p></h4><br>
                                <p>Price : <strong>4,200 THB</strong>  </p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#010">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="010" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">NIKE ROSHE TWO BREATHE</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel010" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel010" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel010" data-slide-to="1"></li>
    <li data-target="#myCarousel010" data-slide-to="2"></li>
    <li data-target="#myCarousel010" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://images.nike.com/is/image/DotCom/PDP_HERO_M/844931_100_2_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-roshe-two.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://images2.nike.com/is/image/DotCom/PDP_HERO_M/844931_100_E_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-roshe-two.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://images3.nike.com/is/image/DotCom/PDP_HERO_M/844931_100_C_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-roshe-two.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://images.nike.com/is/image/DotCom/PDP_HERO_M/844931_100_D_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-roshe-two.jpg" alt="Flower">
    </div>
  </div>

   <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel010" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel010" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Nike</p>
 <p>Price : 4,200 Bath</p>
 <p>Color : White</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                                </div>
                      </div>
           </div>
  <!-- /.col -->
                <div class="col-xs-12 text-center col-sm-6">
                        <div class="thumbnail product-box">
                            <img src="http://images.nike.com/is/image/DotCom/PDP_HERO/844973_300_A_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-juvenate-premium.jpg" alt="" />
                            <div class="caption">
                          
                             <h4><p style="color:black">JUVENATE PREMIUM</a></h4><br>
                              <p>Price : <strong>4,200 THB</strong>  </p>
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#011">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="011" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">NIKE JUVENATE PREMIUM</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel011" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel011" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel011" data-slide-to="1"></li>
    <li data-target="#myCarousel011" data-slide-to="2"></li>
    <li data-target="#myCarousel011" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://images.nike.com/is/image/DotCom/PDP_HERO_M/844973_300_A_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-juvenate-premium.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://images2.nike.com/is/image/DotCom/PDP_HERO_M/844973_300_B_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-juvenate-premium.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://images3.nike.com/is/image/DotCom/PDP_HERO_M/844973_300_C_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-juvenate-premium.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://images.nike.com/is/image/DotCom/PDP_HERO_M/844973_300_D_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2-juvenate-premium.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel011" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel011" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Nike</p>
 <p>Price : 4,200 Bath</p>
 <p>Color : Green</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                               </div>
                      </div>
                    </div>
                    <!-- /.col -->
                  

                   <div class="col-xs-12 text-center col-sm-6">
                        <div class="thumbnail product-box">
                            <img src="http://images.nike.com/is/image/DotCom/PDP_HERO/845037_007_A_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89AE0B8B2E0B8AAE0B980E0B881E0B987E0B895E0B89AE0B8ADE0B8A5-air-jordan-31.jpg" alt="" />
                            <div class="caption">
                              
                                <h4><p style="color:black">AIR JORDAN XXXI</p></h4><br>
                                <p>Price : <strong>7,000 THB</strong>  </p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#012">See Detail</button>

 <!-- .เปิดmodal -->
    <div id="012" class= "modal fade" >
             <div class="modal-dialog modal-lg" role="document">
    
 <!-- Modal content-->
     <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">NIKE AIR JORDAN XXXI</h5>
     </div>

     <div class="modal-body">
<!-- .เปิดไสลด์ -->
<center>
   <div id="myCarousel012" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel012" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel012" data-slide-to="1"></li>
    <li data-target="#myCarousel012" data-slide-to="2"></li>
    <li data-target="#myCarousel012" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://images.nike.com/is/image/DotCom/PDP_HERO_M/845037_007_A_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89AE0B8B2E0B8AAE0B980E0B881E0B987E0B895E0B89AE0B8ADE0B8A5-air-jordan-31.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://images2.nike.com/is/image/DotCom/PDP_HERO_M/845037_007_B_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89AE0B8B2E0B8AAE0B980E0B881E0B987E0B895E0B89AE0B8ADE0B8A5-air-jordan-31.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="http://images3.nike.com/is/image/DotCom/PDP_HERO_M/845037_007_C_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89AE0B8B2E0B8AAE0B980E0B881E0B987E0B895E0B89AE0B8ADE0B8A5-air-jordan-31.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="http://images.nike.com/is/image/DotCom/PDP_HERO_M/845037_007_D_PREM/E0B8A3E0B8ADE0B887E0B980E0B897E0B989E0B8B2E0B89AE0B8B2E0B8AAE0B980E0B881E0B987E0B895E0B89AE0B8ADE0B8A5-air-jordan-31.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel012" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel012" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<p>Type : Shoes</p>
<p>Brand : Nike</p>
 <p>Price : 7,000 Bath</p>
 <p>Color : Blue</p>
</center>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 <!-- .ปิดmodal -->
                            </div>
                        </div>
                    </div>
      <!-- /.col -->
   </div>
<!-- /.row 2 -->
             
    </div>

 
</div>
</body>
</html>