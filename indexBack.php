<!DOCTYPE html>
<html lang="en">
    <head>

    	<!-- Metas -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="author" content="" />

		<!-- Title  -->
		<title>Images</title>

		<!-- Favicon -->

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

		<!-- Plugins -->
		<link rel="stylesheet" href="css/plugins.css" />

        <!-- Core Style Css -->
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>

        <!-- ========================================= Start Works -->
        
        <section class="works">
            <div class="container-fluid">
                <!-- <div class="row m-5">
                    <div class="col-lg-11">
                        <input type="text" class="form-control" id="keyWord" placeholder="Search" name="">
                    </div>
                    <div  class="col-lg-1">
                        <button class="btn btn-sm filtering" onclick="search()"><i class="fa fa-search"></i></button>
                    </div>
                </div> -->
                    
                    <div class="gallery text-center full-width">
                        <div class="firstRow">
                            
                            <div class="col-lg-3 col-md-6 items graphic">
                                <div class="item-img">
                                    <img src="img/portfolio/1.jpg" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 items web">
                                <div class="item-img">
                                    <img src="img/portfolio/2.jpg" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 items brand">
                                <div class="item-img">
                                    <img src="img/portfolio/3.jpg" alt="image">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 items graphic">
                                <div class="item-img">
                                    <img src="img/portfolio/4.jpg" alt="image">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <ul class="pagination m-4 float-right">
          <li class="page-item"><a class="page-link" onclick="location.reload()">1</a></li>
          <li class="page-item"><a class="page-link" onclick="getSecondRow()">2</a></li>
        </ul>

        <!-- End Works =========================================== -->

        <!-- jQuery -->
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>

        <!-- popper.min -->
        <script src="js/popper.min.js"></script>

        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>

        <!-- isotope.pkgd.min js -->
        <script src="js/isotope.pkgd.min.js"></script>

        <!-- custom scripts -->
        <script src="js/scripts.js"></script>
        <script type="text/javascript">
            function getSecondRow(){
                $.ajax({
                    url:'ajax.php',
                    type:'POST',
                })
                .done(function(response){
                    $('.works').html(response);
                });
            }
            function search(){
                var key = $('#keyWord').val();
                $.ajax({
                    url:'ajaxSearch.php',
                    type:'POST',
                    data:{key:key}
                })
                .done(function(response){
                    $('.works').html(response);
                });
            }

        </script>

    </body>
</html>