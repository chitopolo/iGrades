<div class="lr-page span4 offset4">

<div class = "alert alert-info">
Este es el nuevo acceso a la plataforma de la UCATEC, si deseas ingresar a la plataforma por favor inicia sesion con tu cuenta de Facebook posteriormente ingresa tu usuario y contraseña correspondiente, gracias por tu comprension muy pronto entrar a la plataforma sera mucho mas sencillo!
</div>
				<div id="login-box">
	<!-- start: Row -->
					<div class="row-fluid">

						<div id="login-form" class="span12">

						<div class="page-title-small">
<legend>Loggeate</legend>
								<h3>Ingresa con tu cuenta</h3>

							</div>
					<form method="post" action="">


								<div class="page-title-small">


							</div>
								<?php echo $this->Html->link(__('Facebook'), array('controller' => 'users', 'action' => 'loginFacebook'), array('class' => 'text facebook_connect')); ?>
								<?php // echo $this->Html->link(__('Google'), array('controller' => 'users', 'action' => 'loginGoogle'), array('class' => 'text twitter_connect')); ?>


								<h3>O logeate sin facebook</h3>
								<div id = "btnhide" class = "btn">
									Loggear sin Facebook
								</div>
								<?php echo $this->Html->link(__('Entrar a plataforma'), array('controller' => 'Users', 'action' => 'entrar'), array('class' => 'btn ')); ?>




								<div id = "loghide">
							<div class="row-fluid" >
								<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'))); ?>
									<fieldset>
										
									<?php
										echo $this->Form->input('email', array('class' => 'span12', 'id' => 'user'));
										echo $this->Form->input('password', array('class' => 'span12', 'id' => 'pass'));
									?>
									</fieldset>
								</div>
								<?php
								if ($this->params['params']['controller'] == 'users' && $this->params['params']['action'] == 'login' ) {
									echo $this->Html->link(__('Cancelar'), '/', array('class' => 'btn')).' ';	
								}
								echo $this->Form->submit(__('Entrar'), array('div' => false, 'class' => 'btn btn-primary'));

								echo $this->Html->link(__('Nueva Cuenta'), array('controller' => 'users', 'action' => 'register'), array( 'class' => 'btn pull-right'));
								echo $this->Form->end();
								?>

							</div>


							</form>

						</div>

					</div>
					<!-- end: Row -->	

				</div>
				<!-- end: Login Box  -->
			</div>


			<script type="text/javascript">
			$('#loghide').hide();
			$('#btnhide').click(function(){
				$('#loghide').show('slow');
				$('#loghide').hide();
				
			});

			</script>