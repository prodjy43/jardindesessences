@extends('default')
@section('content')
	<div class="grid-container">
		<div class="panel grid-80 suffix-10 prefix-10"">
	      <div class="panel-banner" style="background-image: url('{{ elixir('images/contact.jpeg') }}"')>
	        <div class="opacity">
	          <h1>contactez-moi</h1>
	        </div>
	      </div>
	      <div class="panel-content">
	        <h2>Les moyens de me contacter</h2>
	        <p>Voici les differents moyens de me contacter</p>
	        <ul class="info-list fa-ul">
		    	<li><i class="fa-li fa fa-dot-circle-o"></i>Téléphone : 000 / 000.00.00</li>
		    	<li><i class="fa-li fa fa-dot-circle-o"></i>E-Mail: contact@aujardindesessences.ch</li>
		    	<li><i class="fa-li fa fa-dot-circle-o"></i>Via le formulaire de contact ci-dessous</li>
			</ul>
			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d3185.772970462498!2d6.887539136250947!3d46.99016847479713!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x478de195a5b8596f%3A0x94dc4954a09afba5!2sRue+de+Rugin+1A%2C+2034+Peseux%2C+Suisse!3m2!1d46.989494799999996!2d6.887829699999999!5e1!3m2!1sfr!2sch!4v1466690286368" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen="" id="maps" scrolling="no"></iframe>
	      </div>
	    </div>
	    <div class="panel grid-80 suffix-10 prefix-10"">
	      <div class="panel-content">
	        <form action="#" method="post" accept-charset="utf-8">
		        <input type="text" name="nom" value="" placeholder="Votre nom ..." class="input-50">
		        <input type="text" name="prenom" value="" placeholder="Votre prenom ..." class="input-50">
		        <input type="text" name="mail" value="" placeholder="Votre adresse e-mail ...">
		        <input type="text" name="subject" value="" placeholder="Le sujet de votre demande ...">
		        <textarea name="msg" placeholder="Contenu du message ..."></textarea>
		        <button type="submit">Envoyer</button>
	        </form>
	      </div>
	    </div>
	</div>
@stop