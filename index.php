<?php
include 'koneksi.php';
session_start();
$level=$_SESSION['level'];
isset ($_GET['m']) ? $m = $_GET['m'] : $m = 'home';
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kwarcab sleman</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fa/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
 
    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>
</head>
 
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>kwarcab</span>sleman</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo $_SESSION['username']  ?><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            
                            <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
 
        </div><!-- /.container-fluid -->
    </nav>
 
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            
        </form>
        <?php
        if($level=='1'){
            ?>
            <!--Menu admin-->
            <ul class="nav menu">
                <li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> BERANDA</a></li>
 
                <li><a href="http://localhost/kp/index.php?m=instansi"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> INSTANSI</a></li>
 
                <li><a href="http://localhost/kp/index.php?m=bagian"><svg class="glyph stroked table"><use xlink:href="glyph stroked table"></use></svg> BAGIAN</a></li>
                <li><a href="http://localhost/kp/index.php?m=bagsur"><svg class="glyph stroked table"><use xlink:href="glyph stroked table"></use></svg>USER</a></li>
                <li><a href="http://localhost/kp/index.php?m=surat-masuk"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>SURAT MASUK</a></li>
                <li><a href="http://localhost/kp/index.php?m=surat-keluar"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> SURAT KELUAR</a></li>
                <li><a href="http://localhost/kp/index.php?m=disposisi"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>DISPOSISI</a></li>
                
            </ul>
            <?php
        }
        elseif($level=='2'){
            ?>
            <!--Menu petugas-->
            <ul class="nav menu">
                <li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> BERANDA</a></li>
 
                <li><a href="http://localhost/kp/index.php?m=instansi"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> INSTANSI</a></li>
 
                <li><a href="http://localhost/kp/index.php?m=bagian"><svg class="glyph stroked table"><use xlink:href="glyph stroked table"></use></svg> BAGIAN</a></li>
              
                <li><a href="http://localhost/kp/index.php?m=surat-masuk"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>SURAT MASUK</a></li>
                <li><a href="http://localhost/kp/index.php?m=surat-keluar"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> SURAT KELUAR</a></li>
                <li><a href="http://localhost/kp/index.php?m=disposisi"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>DISPOSISI</a></li>
            </ul>
            <?php
        }
        elseif($level=='3'){
            ?> 
            <!-- menu kepala -->
            <li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> BERANDA</a></li>
            <li><a href="http://localhost/kp/index.php?m=bagian-kep"><svg class="glyph stroked table"><use xlink:href="glyph stroked table"></use></svg> BAGIAN</a></li>
            <li><a href="http://localhost/kp/index.php?m=surat-masuk-kep"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>SURAT MASUK</a></li>
            <li><a href="http://localhost/kp/index.php?m=disposisi-kep"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>DISPOSISI</a></li>
          <?php
        }
        else{
            header("location:login.php");
        }
        ?>
 
    
 
    </div><!--/.sidebar-->
    <?php
    include 'isi.php';
    ?>
 
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-table.js"></script>
    <script>
        $('#calendar').datepicker({
            
        });
        $('#kalender').datepicker({
            
        });
 
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);
 
        $(window).on('resize', function () {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
</script>  
</body>
 
</html>