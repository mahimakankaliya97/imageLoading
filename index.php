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
        <div class="row m-5">
            <div class="col-lg-11">
                <input type="text" class="form-control" id="keyWord" placeholder="Search" name="">
            </div>
            <div  class="col-lg-1">
                <button class="btn btn-sm filtering" onclick="search()"><i class="fa fa-search"></i></button>
            </div>
        </div>


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
            $(document).ready(function(){
              changeBackground();
            });

            function changeBackground() {
              var appID = "9c89b71b1f64592d8c158c4e09c3b76207d2c066b97cb231396dbff515e7aec7";
                // var url = 'https://api.unsplash.com/photos/random?client_id='+pappID;
                // var url = "https://api.unsplash.com/search/photos?page=1&query=office&client_id="+appID;

            var count = 475,     // for nature tag
                tag = "computer",
                randomPage = Math.floor(Math.random() * parseInt(count/11)),
                randomImageInPage = Math.floor(Math.random() * (11)),
                url = 'https://api.unsplash.com/search/photos?page='+randomPage+'&query='+tag+'&client_id='+appID;

                $.getJSON(url,function (data) {
                  if (data !== undefined) {
                    var backgroundImage = data.results[randomImageInPage].urls.full;
                    console.log(backgroundImage);
                    $('body').css({'background-image':'url(' + backgroundImage + ')','background-repeat':'no-repeat','background-size': '1360px 750px'});
                  }

                })
            }
            function search(){
                var appID = "9c89b71b1f64592d8c158c4e09c3b76207d2c066b97cb231396dbff515e7aec7";
                // var url = 'https://api.unsplash.com/photos/random?client_id='+pappID;
                // var url = "https://api.unsplash.com/search/photos?page=1&query=office&client_id="+appID;

                var count = 475,     // for nature tag
                tag = $('#keyWord').val(),
                randomPage = Math.floor(Math.random() * parseInt(count/11)),
                randomImageInPage = Math.floor(Math.random() * (11)),
                randomImageInPage1 = Math.floor(Math.random() * (10)),
                randomImageInPage2 = Math.floor(Math.random() * (9)),
                randomImageInPage3 = Math.floor(Math.random() * (8)),
                url = 'https://api.unsplash.com/search/photos?page='+randomPage+'&query='+tag+'&client_id='+appID;

                $.getJSON(url,function (data) {
                  if (data !== undefined) {
                    var backgroundImage = data.results[randomImageInPage].urls.full;
                    console.log(backgroundImage);
                    $('body').css({'background-image':'url(' + backgroundImage + ')','background-repeat':'no-repeat','background-size': '1360px 750px'});


                  }

                })
            }

        </script>

    </body>
</html>