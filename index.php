<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free coming soon template with jQuery countdown">
    <meta name="author" content="http://bootstraptaste.com">
	
    <title>Em Construção</title>

    <!-- Bootstrap -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
    		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    		<link href="assets/css/font-awesome.css" rel="stylesheet">
			<link rel="shortcut icon" href="mdl/img/Data-Doughnut-Chart-icon.png" >

    <!-- siimple style -->
        <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- =======================================================
        Theme Name: WeBuild
        Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

    <body>
	<div id="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Em construção</h1>
                        <h2 class="subtitle">Nossa equipe esta trabalhando para te surpreender</h2>
                        <div id="countdown"></div>
                        <form class="form-inline signup" role="form">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Informe seu email aqui">
                            </div>
                            <button type="submit" class="btn btn-theme">Fale conosco!</button>
                        </form>		
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    </div>				
                </div>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <p class="copyright">® Em construção <!--- Todos os direitos reservados</p> -->
                    </div>
                </div>		
            </div>
	</div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script type="text/javascript">
            $('#countdown').countdown('2018/08/01', function(event) {
              $(this).html(event.strftime('%w Semanas %d dias <br /> %H:%M:%S'));
            });
        </script>    
    </body>
</html>
