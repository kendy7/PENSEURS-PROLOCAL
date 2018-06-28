<?php
    $B_language = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
	$B_language = strtolower(substr(chop($B_language[0]),0,2));
?>
<!DOCTYPE html>
<html lang="<?php echo $B_language; ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="include/css/install.css" rel="stylesheet">
    <title>Paramètre de Configuration</title>
  </head>
  <body>
   <div style="text-align:center"><img src="bc-admin/img/logo.png" style="width:100%;max-width:296px;" /></div>
   <?php
	  if ( ! file_exists( dirname(__FILE__) . '/config-sample.php' ) )
	   die('Désolé! J\'ai besoin une forme d\'echantillon de configuration pour fonctionner. S\'il vous plait recharger ce fichier a partir d\' installation de Ascension');  
	  
	  $config_file = file(dirname(__FILE__) . '/config-sample.php');
	   
	  if (file_exists(dirname(__FILE__) . '/config.php') )
	   die('<p>Le fichier \'config.php\' existe déjà. si vous avez besion de réinitialiser n\'importe quelle instance de configuration dans ce fichier,supprimer le maintenant.Vous pouvez essayer<a href="install.php">installer Maintenant.</a></p>');
	  
	  $step = isset( $_GET['step'] ) ? (int) $_GET['step'] : 0;
	  switch($step) {
		  case 0:	  
   ?>
          <p>Bienvenu(e) sur Ascension Goup. Avant de commencer, On a besoin quelque information sur la base de donnée.  Nous aurons besoin de connaitre ses informations avant de continuer.</p>
          <ol>
              <li>Nom de la base de donnée</li>
              <li>Nom d'utilisateur</li>
              <li>Mot de passe</li>
              <li>Hote de la base de donnée</li>
              <li>Table prefix ( Si vous voulez utiliser Ascension Goup dans une simple base de donnée)</li>
          </ol>
          <p><strong>Si pour n'importe quelle raison que le fichier crée automatique ne fonctionne pas, ne vous perdez pas la tête, juste remplir les informations de creation de fichier de configuration. Vous pouvez simplement ouvrir le fichier  <code>config-sample.php</code> dans un editeur de texte, et entre les informations et enregistrer le etant <code>config.php</code></strong></p>
          <p>In all likelihood, these items were supplied to you by your Web Host. If you do not have this information, then you will need to contact them before you can continue. If you&#8217;re all ready&hellip;</p>          
          <p class="step"><a href="setup-config.php?step=1" class="button button-large">Allons-y!</a></p>   
   <?php
         break;
	     case 1:
   ?>
          <form method="post" action="setup-config.php?step=2">
              <p>Au-dessous vous devez entrer les details de votre connection. Si vous n'êtes pas sur d'elles, contactez votre hôte.</p>
              <table class="form-table">
                  <tr>
                      <th scope="row"><label for="db_name">Nom de la base de donnée</label></th>
                      <td><input name="db_name" id="db_name" type="text" size="25" value="" /></td>
                      <td>Le nom de la base de donnée, vous voulez utiliser pour Ascension Group..</td>
                  </tr>
                  <tr>
                      <th scope="row"><label for="db_username">Utilisateur</label></th>
                      <td><input name="db_username" id="db_username" type="text" size="25" value="<?php echo htmlspecialchars('username', ENT_QUOTES ); ?>" /></td>
                      <td>Nom d'utilisateur de votre MySQL</td>
                  </tr>
                  <tr>
                      <th scope="row"><label for="db_password">Mot de passe</label></th>
                      <td><input name="db_password" id="db_password" type="text" size="25" value="<?php echo htmlspecialchars('password', ENT_QUOTES ); ?>" /></td>
                      <td>&hellip;Le Mot de passe de votre MySQL.</td>
                  </tr>
                  <tr>
                      <th scope="row"><label for="db_hostname">Hôte de la base de donnée</label></th>
                      <td><input name="db_hostname" id="db_hostname" type="text" size="25" value="localhost" /></td>
                      <td>Vous devez avoir ces informations de votre , Si  <code>localhost</code> ne fonctionne pas.</td>
                  </tr>
                  <tr>
                      <!--<th scope="row"><label for="table_prefix">Table Prefix</label></th>-->
                      <td><input name="table_prefix" id="table_prefix" type="hidden" value="ag_" size="25" /></td>
                      <!--<td>Si vous voulez exécuter plusieurs installations d'AG dans une seule base de données, changer cela.</td>-->
                  </tr>
              </table>
              <p class="step"><input name="submit" type="submit" value="<?php echo htmlspecialchars('Submit', ENT_QUOTES ); ?>" class="button button-large" /></p>
          </form>   
   <?php
		 break;	
		 case 2: 
		  foreach ( array( 'db_name', 'db_username', 'db_password', 'db_hostname', 'table_prefix' ) as $key )
			  @$$key = trim( stripslashes( $_POST[ $key ] ) );
		      $tryagain_link = '<p class="step"><a href="setup-config.php?step=1" onclick="javascript:history.go(-1);return false;" class="button button-large">Try again</a></p>';
	  
		  if ( empty( $table_prefix ) )
			  die('<p><strong>ERROR</strong>: "Table Prefix" must not be empty.</p>' . $tryagain_link );
	  
		  // Validate $table_prefix: it can only contain letters, numbers and underscores.		  
		  if ( preg_match( '|[^a-z0-9_]|i', $table_prefix ) )
			  die('<p><strong>ERROR</strong>: "Table Prefix" can only contain numbers, letters, and underscores.</p>' . $tryagain_link );		     	 
		// Test the db connection.	
		$error_connection = false;			
		$connection = @mysql_connect($db_hostname, $db_username, $db_password);							
		if (!$connection) $error_connection = true;
		if ($connection && !$db_name) $error_connection = true;
		if ($db_name) {
		   $dbcheck = @mysql_select_db($db_name);
		   if (!$dbcheck) $error_connection = true;
		}
		@mysql_close($connection);	
		if($error_connection){
   ?>
        <h1>ERREUR établit lors de la connection de la base</h1>  
        <p> Ceci veut dire que les données utilisateur et mot de passe du fichier <code>config.php</code> sont incorrect ou nous ne pouvons pas contacter le serveur base de donnée à partir de  <code><?php echo $db_hostname; ?></code>. ca pourrait que votre serveur  base de donnee est injoiniable.</p> 
        <ul>
          <li>Avez-vous sur d'avoir le bon mot de passe et le nom d'utilisateur?</li>
          <li>Avez-vous sur d'avoir rentre le bon nom d'hôte?</li>
          <li>Avez-vous sur que le serveur base de donnée est en fonction?</li>
        </ul>
        <p>Si vous n'êtes pas sur des informations, vous devez probablement contacter votre administrateur reseau.</p>
        <?php echo $tryagain_link; ?>
   <?php
		}else{
		  foreach( $config_file as $line_num => $line ) {
			  $match = explode('=',$line);
			  if(isset($match[1])){	
				$var_name = str_replace('$','',trim($match[0]));
				if(isset(${$var_name})){
					if(is_numeric(trim(str_replace(';','',$match[1])))){
				      $config_file[$line_num] = trim($match[0]).' = '.${$var_name}.';'."\r\n";  
					}else{
					  $config_file[$line_num] = trim($match[0]).' = \''.${$var_name}.'\';'."\r\n";
					}
				}
			  }
		  }
		  if ( ! is_writable(dirname(__FILE__)) ){
   ?>
				<p>Désolé! mais je n'arrive pas a écrire le fichier <code>config.php</code> le fichier </p>
				<p>Vous pouvez créer  <code>config.php</code> manuellement et coller les informations suivantes à l'interieur de lui.</p>
                <textarea id="bc-config" style="width:100%" rows="15" class="code" readonly><?php				   
                          foreach( $config_file as $line ) {
                              echo htmlentities($line, ENT_COMPAT, 'UTF-8');
                          }
                  ?></textarea>                
                <p>Après avoir terminé, cliquer sur, Exécuter l'installation.&#8221;</p>	
                <p class="step"><a href="install.php" class="button button-large">Exécuter l'installation</a></p>
				<script>
                (function(){
				  var el=document.getElementById('bc-config');
				  el.focus();
				  el.select();
                })();
                </script>                
   <?php
		  }else if ( ! is_writable(dirname(__FILE__).'/content/plugins') ){
			  echo '<p>Désolé, mais <code>content/plugins</code> ce dossier n\'a pas d\'autorisations inscriptibles</p>';
			  echo '<p>Correction du problème manuellement</p>';
			  echo '<p>Une fois que vous avez fait cela, cliquez sur "Exécuter l\'installation.</p>';
			  echo '<p class="step"><a href="install.php" class="button button-large">Exécuter l\'installation</a></p>';		
		  }else if ( ! is_writable(dirname(__FILE__).'/content/updates') ){
			  echo '<p>Désolé, mais<code>content/updates</code>ce dossier n\'a pas d\'autorisations inscriptibles</p>';
			  echo '<p>Correction du problème manuellement</p>';
			  echo '<p>Une fois que vous avez fait cela, cliquez sur "Exécuter l\'installation.</p>';
			  echo '<p class="step"><a href="install.php" class="button button-large">Exécuter l\'installation</a></p>';		
		  }else if ( ! is_writable(dirname(__FILE__).'/content/uploads') ){
			  echo '<p>Désolé, mais <code>content/uploads</code>ce dossier n\'a pas d\'autorisations inscriptibles</p>';
			  echo '<p>Correction du problème manuellement</p>';
			  echo '<p>Une fois que vous avez fait cela, cliquez sur "Exécuter l\'installation.</p>';
			  echo '<p class="step"><a href="install.php" class="button button-large">Exécuter l\'installation</a></p>';	   
		  }else if ( ! is_writable(dirname(__FILE__).'/content/products') ){
			  echo '<p>Désolé, mais  <code>content/products</code> ce dossier n\'a pas d\'autorisations inscriptibles</p>';
			  echo '<p>Correction du problème manuellement</p>';
			  echo '<p>Une fois que vous avez fait cela, cliquez sur "Exécuter l\'installation.</p>';
			  echo '<p class="step"><a href="install.php" class="button button-large">Exécuter l\'installation</a></p>';
		  }else if ( ! is_writable(dirname(__FILE__).'/content/up-products-images') ){
			  echo '<p>Désolé, mais  <code>content/up-products-images</code> ce dossier n\'a pas d\'autorisations inscriptibles</p>';
			  echo '<p>Correction du problème manuellement</p>';
			  echo '<p>Une fois que vous avez fait cela, cliquez sur "Exécuter l\'installation.</p>';
			  echo '<p class="step"><a href="install.php" class="button button-large">Exécuter l\'installation</a></p>';			  		  
		  }else{
			 // create config.php file		  
			  $handle = fopen(dirname(__FILE__) . '/config.php', 'w');
			  foreach( $config_file as $line ) {
				  fwrite($handle, $line);
			  }
			  fclose($handle);			 
			 chmod(dirname(__FILE__) . '/config.php', 0666);
   ?>
			  <p>Tout fonctionne normalement! Vous avez franchit une bonne partie de l'installation. Ascension Group peut maintenant communiquer avec votre base de donnée. Si vous êtes prêt, vous pouvez commencer.&hellip;</p>			  
			  <p class="step"><a href="install.php" class="button button-large">Installation</a></p>	
   <?php		    
		  }
		}
	    break;
	  }
   ?>
  </body>
</html>      	