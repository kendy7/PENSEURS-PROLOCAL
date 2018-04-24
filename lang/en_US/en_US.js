/*////////////////////////////////////////////////////
///////////////////// IMPORTANT //////////////////////
//// NOT CHANGE DATA INGLUDED INTO BRACES { } ////////
/////////////////////////////////////////////////////*/
/*
 Validation Message
*/
var validator_message = {
		   'validator_required':"Champ recommander.",
		   'validator_remote':"Valeur existant.",
		   'validator_email':"Adresse e-mail invalid.",
		   'validator_website':"Mauvais URL.",
		   'validator_websitehttp':"Mauvais URL.",
		   'validator_url':"Mauvais URL.",
		   'validator_equalTo':"Mot de passe non identique.",
		   'validator_date':"Date invalide.",
		   'validator_dateISO':"SVP entrer une date valide(ISO).",
		   'validator_number':"Chiffre seulement",
		   'validator_data':"Date invalide",
		   'validator_accept':"Extension invalide.",
		   'validator_maxlength':"Maximum {0} characters.",
		   'validator_minlength':"Au moins {0} characters.",
		   'validator_rangelength':"Seulement les characters entre {0} et {1} de la longueur .",
		   'validator_range':"Seulement les valeurs entre {0} et {1}.",
		   'validator_max':" Seulement des valeurs inférieures ou égales à  {0}.",		   
		   'validator_min':"Seules les valeurs supérieures ou égales à {0}.",
		   'validator_least_one':"Remplissez au moins {0} champ correctement."
};
jsIn.addDict(validator_message);
var $lang_client_ = {           
           'general_error_title':"ERREUR!!!",
		   'general_warning_title':"AVIS!!!",
		   'general_success_title':"FELICITATION!!!",
		   'wrong_login_message':"Mauvais Identifiant et/ou Password",
		   'account_not_confirmed_message':"Désolé, vous ne pouvez pas accéder à votre compte. Vous devez d\'abord confirmer votre inscription pour pouvoir y accéder",		   
		   'tax_code': "Tax Code",
		   'account_not_payed_message':" Désolé,vous ne pouvez pas accéder à votre compte. Votre temps d\'accès est épuisé, veuillez le renouveler pour pouvoir y accéder",
		   'vat':"VAT",
		   'retieve_data_not_match':" Les données entrées n\'existent pas dans notre base de données",
		   'retieve_data_success':"Vérifiez votre boîte e-mail (<strong>{data}</strong>) et suivez les instructions pour définir de nouvelles accès aux données .<br/>Merci.",
		   'send_order_not_success_cart_updated':"Votre panier a été mis à jour que d'autres clients ont placé une commande dans lequel ils ont été impliqués vos produits.<br/>Vous verrez les détails de mise à jour dans le rapport et décider de procéder avec la commande.",
		   'availability_update_after_order':"La quantité de ce produit est {availability}",
		   'product_removed_from_cart_because_not_available':"Ce produit a été retiré de votre panier, car il n\'est plus disponible",
		   'pay_now_button':"Payer maintenant",
		   'alert_title_for_product_not_saleable_online':"Le produit n\'a pas été acheté en ligne",
		   'alert_message_for_product_not_saleable_online':'Ce produit peut être acheté seulement dans notre magasin.<br/> Pour plus d\'information<a href="{link}">Contactez-nous</a>',
		   'contact_form_message_success':"Votre message a été envoyé avec succès.<br/>L\'un de nos opérateurs vous répondra le plus rapide que possible.<br/>Merci",
		   'product_not_available':"Désolé!!!<br/> Ce prduit n\'est pas disponible pour le moment",
		   'wrong_quantity_purchased':"<strong>Entrez une valeur supérieure à 0</strong>",
		   'alert_product_add_to_cart':'{name}<br/><img class="img-polaroid" width="100" src="{url_img}" alt="{name}" /><br/><br/>a été ajouté au panier<br/><br/><span class="close-add-to-cart-loader btn btn-info squared unbordered solid">Continuer vos achats</span> <a href="{link_cart}" class="close-add-to-cart-loader btn btn-primary squared unbordered solid">Voir le panier</a>',
		   'client_address':'<strong>{name}</strong><br/>{address}<br/>{city} - {reference}<br/><abbr title="Phone">T: </abbr> {phone}<br/>{birthdate}<abbr title="E-mail">@: </abbr> {email}',
		   'filter_price_from':"Apartir",
		   'filter_price_to':"de",
		   'userid_exists':"Identifiant existant",
		   'nif_exists':"Ce NIF a été déjà utilisé",
		   'email_exists':"E-mail existant"
};
jsIn.addDict($lang_client_);