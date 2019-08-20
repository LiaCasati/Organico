<!DOCTYPE html>
<html lang="en">
<head>
  <title>Organique</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css"  type="text/css">	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar1 navbar-default">
			<ul class="nav navbar-nav navbar1-left">
				<form class="navbar-form navbar-left" action="/action_page.php">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Busque por produtos da loja...">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>
				</form>
				<li><a href="#">CARRINHO</a></li>
				<li><a href="#"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">LOGIN</button></a></li>
			</ul>
	</nav>
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <center><h4 class="modal-title">LOGIN</h4></center>
				</div>
				<div class="modal-body">
				  <form action="/action_page.php">
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Senha:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				    </div>
				    <div class="checkbox">
					<center><label><input type="checkbox" name="remember">Remember me</label></center>
				    </div>
				    <center><button type="submit" class="btn btn-default">Entrar</button></center><br>
				<center><a href="https://thamiriss.github.io/Organique.github.io/cadastro.html">Cadastre-se</a></center>
				 </form>
				</div>
		      </div>
		</div>
	</div>
	<div class="jumbotron text-center">
		<h1>Organique</h1> 
		 <p>Slogan</p> 
	</div>
		<nav class="navbar navbar-default">
		  <div class="container">
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
			<li><a href=" https://thamiriss.github.io/Organique.github.io/organique">INÍCIO</a></li>
			<li><a href="https://thamiriss.github.io/Organique.github.io/frutas.html">FRUTAS E VERDURAS</a></li>
			<li><a href="https://thamiriss.github.io/Organique.github.io/laticinios.html">LATICÍNIOS</a></li>
			<li><a href="https://thamiriss.github.io/Organique.github.io/proteinas.html">PROTEÍNAS</a></li>
			<li><a href="https://thamiriss.github.io/Organique.github.io/snacks.html">SNACKS</a></li>
			<li><a href="https://thamiriss.github.io/Organique.github.io/bebidas.html">BEBIDAS</a></li>
			<li><a href="https://thamiriss.github.io/Organique.github.io/kits.html">KITS, CESTAS E ASSINATURAS</a></li>
		      </ul>
		    </div>
		  </div>
		</nav> 
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
		<center>
			<img src="https://www.extra-imagens.com.br/criacao/04-banner/busca/2018/04-abr/19/banner_busca_alimentos_cnova.jpg" class="img-fluid" width="1250px"> 
		</center>
	  </div>
      <div class="item">
		<center>
			<img src="https://www.extra-imagens.com.br/criacao/04-banner/busca/2018/04-abr/19/banner_busca_alimentos_cnova.jpg" class="img-fluid" width="1250px"> 
		</center>
	  </div>
      <div class="item">
		<center>
			<img src="https://www.extra-imagens.com.br/criacao/04-banner/busca/2018/04-abr/19/banner_busca_alimentos_cnova.jpg" class="img-fluid" width="1250px"> 
		</center>
	  </div>
    </div>
	<!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  
<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
    <h2>MAIS VENDIDOS</h2>
  <div class="row slideanim">
    <div class="col-sm-3 col-xs-3">
      <div class="panel panel-default text-center">
        <div class="panel-body">
          <p><strong>Farinha de Trigo Orgânica MIRELLA</strong></p>
		  <img src="https://www.paodeacucar.com/img/uploads/1/339/538339.jpg?type=product" class="img-fluid" width="100px" height="100px">
        </div>
        <div class="panel-footer">
          <h4>$19<br>Pacote 1kg</h4>
          <button class="btn btn-lg">ADICIONAR</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-3 col-xs-3">
      <div class="panel panel-default text-center">
        <div class="panel-body">
          <p><strong>Fit Food Snacks - Salgadinho Vegano - Sabor Tomate e Manjericão</strong></p>
		  <img src="https://assets.xtechcommerce.com/uploads/images/medium/29ca33a8dd92472214e18115b8e29fb3.png" class="img-fluid" width="100px" height="100px">
        </div>
        <div class="panel-footer">
          <h4>$29<br>50g</h4>
          <button class="btn btn-lg">ADICIONAR</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-3 col-xs-3">
      <div class="panel panel-default text-center">
        <div class="panel-body">
          <p><strong>Banana Orgânica</strong></p>
		  <img src="https://mercadoorganico.com/1320-large_default/banalight-organica-600g-mj-maciel.jpg" class="img-fluid" width="100px" height="100px">
        </div>
        <div class="panel-footer">
          <h4>$49<br>600 g</h4>
		<div class="qty mt-5">
                        <span class="minus bg-dark">-</span>
                        <input type="number" class="count" name="qty" value="0">
                        <span class="plus bg-dark">+</span>
                </div>	
          <button class="btn btn-lg">ADICIONAR</button>
        </div>
      </div>      
    </div> 
	<div class="col-sm-3 col-xs-3">
      <div class="panel panel-default text-center">
        <div class="panel-body">
          <p><strong>Banana Orgânica</strong></p>
		  <img src="https://mercadoorganico.com/1320-large_default/banalight-organica-600g-mj-maciel.jpg" class="img-fluid" width="100px" height="100px">
        </div>
        <div class="panel-footer">
          <h4>$49<br>600 g</h4>
          <button class="btn btn-lg">ADICIONAR</button>
        </div>
      </div>      
    </div> 
  </div>
</div>
	
<!-- Container (operation Section) -->
	<h1>Como funciona: </h1>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4" style="background-color:white;font-size: 16px;">
    	<center><img src="http://separenaopare.com.br/wp-content/uploads/2017/10/04_piso.png" style="with:100px; height: 100px"></center>
    	<p> Produtos altamente selecionados para você escolher e adicionar ao seu carrinho.</p>
    </div>
    <div class="col-sm-4" style="background-color:white;font-size: 16px;">
    	<center><img src=" https://images.emojiterra.com/twitter/v12/512px/1f69b.png" style="with:100px; height: 100px"></center>
		<p>Quando estiver concluindo sua compra você coloca seu endereço e hora para efetuarmos a entrega.</p>    
    </div>
    <div class="col-sm-4" style="background-color:white; font-size: 16px;">
    	<center><img src="http://nunescaricaturas.com.br/blog/wp-content/uploads/2018/05/pagamento-caricaturas.png " style="with: 100px; height: 100px"></center>
        <p> O pagamento pode ser realizado usando o cartão, no site, ou pessoalmente na entrega.</p>    
    </div>
  </div>
</div>
	
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
	
 <center><h1>Contato</h1></center>

  
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <h3>Email:</h3>
     
    	<left><img src="https://pt.seaicons.com/wp-content/uploads/2016/03/Email-icon-15.png " style="with:100px; height: 100px"></left>
    	<p> organique@contato.com </p>
      
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <h3>Telefone:</h3>
     
    	<left><img src="https://st.depositphotos.com/1005920/1832/i/950/depositphotos_18323423-stock-photo-phone-green-glossy-icon-on.jpg " style="with:100px; height: 100px"></left>
    	<p> (27)3030-3030 </p>
      
</div>
   
<div class="col-sm-2">  
      <h3> Informações: </h3>
      <p> ºSobre o Organique  </p> 
      <p> ºTrocas e devoluções </p>
      <p> ºPolíticas de privacidade </p>
      <p> ºControle de qualidade </p>
      
 
  </div>
  
<div class="col-sm-2">  
      <h3> Minha Conta: </h3>
      <p> ºMeu perfil  </p> 
      <p> ºUltimos pedidos </p>
      <p> ºEndereços cadastrados </p>
     
 </div>
 
 <div class="col-sm-2">  
      <h3> Categorias: </h3>
      <left><img src=" icone " style="with:10px; height: 10px"></left>
      <p> ºorgânicos  </p> 
      <left><img src=" icone " style="with:10px; height: 10px"></left>
      <p> ºSem lactose </p>
      <left><img src=" icone " style="with:10px; height: 10px"></left>
      <p> ºSem glúten </p>
     
 </div>
 
</div>


 
 
 


	<footer>
		<a href="#myPage" title="To Top">
		<center><span class="glyphicon glyphicon-chevron-up"></span></center>
		</a>
	</footer>
  </div>
</div>
<script>
	$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });	
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
