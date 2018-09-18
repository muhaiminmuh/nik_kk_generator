<?php
  include 'function.php';

  $kueri = query("SELECT kk,nik FROM `kknik` ORDER BY RAND() LIMIT 1");
  
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NIK KK - Generator</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mina">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=VT323">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="assets/js/typed-custom.js"></script>
    </head>
    <body onload="myFunction()" style="margin:0;">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand visible-xs" href="#">Home</a>
                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">                    
                        <ul class="nav navbar-nav">                            
                            <li><a href="index.html">Home</a></li>
                            <li><a href="https://github.com/muhaiminmuh" target="_blank">Projects</a></li>
                            <li><a href="http://www.dummygenerator.epizy.com/" target="_blank">Dummy Generator</a></li>
                            <li><a href="https://muhaiminmuh.github.io" target="_blank">About Me</a></li>
                        </ul>                                        
                        <ul class="nav navbar-nav navbar-right">                            
                            <li class="navbar-icon"><a href="mailto:lomo.wedang.lw@gmail.com"><i class="fa fa-envelope-o"></i></a></li>                            
                            <li class="navbar-icon"><a href="https://github.com/muhaiminmuh/" target="_blank"><i class="fa fa-github"></i></a></li>       
                            <li class="navbar-icon"><a href="#"><i class="fa fa-medium"></i></a></li>
                            <li class="navbar-icon"><a href="#"><i class="fa fa-linkedin-square"></i></a></li>       
                            <li class="navbar-icon"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="navbar-icon"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>                    
                </div>
            </div>
        </nav>
        <main>
            <div class="intro">
                <h1>NIK KK GENERATOR</h1>
                <h2><span id="typed"></span></h2><br/><br/>
                <button type="button" class="generate btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Generate</button><br/><br/>
            </div>


    <!-- Modal -->

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Generate NIK KK Sukses</h4>
                </div>
                <!-- body modal -->
                
                <div id="loader"></div>
                    <div class="hasil">
                        <div style="display:none;" id="myDiv" class="animate-bottom">
                            <?php foreach ( $kueri as $data ) : ?>
                                <?php
                                  $kk = $data["kk"];
                                  $nik = $data["nik"];
                                ?>

                            <h4><span id="typednik"></span></h4>
                            <h4><span id="typedkk"></span></h4>

                            <?php endforeach; ?>

                            <br/><br/>
                            <p>Setelah tidak terpakai jangan lupa UNREG, agar yang lain ikut menikmati</p>
                            <p>Gunakan dengan bijaksana</p>
                        </div>
                    </div>
                <button type="button" class="btn btn-primary" onClick="window.location.reload()" >Generate Again</button>
                <br/><br/>


                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>




        </main>
        <footer>
            <p class="copyright text-muted"><span class="fa fa-code"></span> With <span class="fa fa-heart"></span> by <a href="https://muhaiminmuh.github.io">Muhaimin Muhammad</a>. Design by <a href="https://github.com/calintat/minimal" target="_blank">Minimal</a></p>
        </footer>
        <script>
            $(document).on('click', function() { $('.collapse').collapse('hide'); })
            
            $(function(){
                $("#typed").typed({
                strings: ["Generate NIK KK Here","Membuat Data NIK KK Secara Random","    by _muhaimin_m","Gunakan tool ini dengan bijaksana"],
                typeSpeed: 30
                });
            });


            var myVar;
            function myFunction() {
                myVar = setTimeout(showPage, 2000);
            };

            function showPage() {
              document.getElementById("loader").style.display = "none";
              document.getElementById("myDiv").style.display = "block";
            };


            $(".generate").click(function(){
            

                $(function(){
                    $("#typedkk").typed({
                    strings: ["KK : <?= $kk; ?> "],
                    typeSpeed: 200
                    });
                });

                $(function(){
                    $("#typednik").typed({
                    strings: ["NIK : <?= $nik; ?> "],
                    typeSpeed: 200
                    });
                });
            });


        </script>
    </body>
</html>
