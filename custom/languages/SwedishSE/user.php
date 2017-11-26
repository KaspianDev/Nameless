<?php 
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr2
 *
 *  License: MIT
 *
 *  Translated by IsS127
 *  SwedishSE Language - User
 */

$language = array(
	/*
	 *  User Related
	 */
	'guest' => 'Gäst',
	'guests' => 'Gäster',
	
	// UserCP
	'user_cp' => 'UserKP',
	'user_cp_icon' => '<i class="fa fa-cogs" aria-hidden="true"></i>',
	'overview' => 'Översikt',
	'user_details' => 'Användaruppgifter',
	'profile_settings' => 'Profil Inställningar',
	'successfully_logged_out' => 'Du har blivit utloggad!',
	'messaging' => 'Meddelande',
	'click_here_to_view' => 'Klicka här för att visa.',
	'moderation' => 'Moderation',
	'administration' => 'Administration',
	'alerts' => 'Alerts',
	'delete_all' => 'Radera Alla',
	'private_profile' => 'Privat profil',
	
	// Profile settings
	'field_is_required' => '{x} krävs', // Don't replace {x}
	'settings_updated_successfully' => 'Inställningarna uppdateras!',
	'password_changed_successfully' => 'Lösenordet har ändrats!',
	'change_password' => 'Byt Lösenord',
	'current_password' => 'Nurvarande Lösenord',
	'new_password' => 'Ny Lösenord',
	'confirm_new_password' => 'Bekräfta ditt nya lösenord',
	'incorrect_password' => 'Ditt lösenord är fel!',
	'two_factor_auth' => 'Two Factor Authentication',
	'enabled' => 'Aktiverat',
    'disabled' => 'Inaktiverat',
	'enable' => 'Aktivera',
	'disable' => 'Inaktivera',
	'tfa_scan_code' => 'Vänligen skanna följande kod i din autentiserings app:',
	'tfa_code' => 'Om din enhet inte har en kamera eller om du inte kan skanna QR-koden, ange följande kod:',
	'tfa_enter_code' => 'Ange koden som visas i din autentiseringsapp:',
	'invalid_tfa' => 'Ogiltig kod, försök igen.',
	'tfa_successful' => 'Two factor authentication har upprättats. Du måste autentisera varje gång du loggar in från och med nu.',
	'active_language' => 'Aktiv Språk',
	'timezone' => 'Tidzon',
	'upload_new_avatar' => 'Ladda upp en ny avatar',
    'nickname_already_exists' => 'Your chosen nickname already exists.',
	
	// Alerts
	'user_tag_info' => 'Du har blivit taggat i ett inlägg av {x}.', // Don't replace {x}
	'no_alerts' => 'Inga nya alerter.',
	'view_alerts' => 'Visa alerter',
	'x_new_alerts' => 'Du har {x} nya alerter', // Don't replace {x}
	'no_alerts_usercp' => 'Du har inga nya alerter.',
	
	// Registraton
	'registration_check_email' => 'Tack för att du registrerade! Vänligen kolla i din e-post för en valideringslänk för att slutföra din registrering. Om du inte hittar e-postmeddelandet, kolla i din skräppostmapp.',
	'username' => 'Användarnamn',
	'nickname' => 'Smeknamn',
	'minecraft_username' => 'Minecraft Användarnamn',
	'email_address' => 'E-postadress',
	'email' => 'E-post',
	'password' => 'Lösenord',
	'confirm_password' => 'Bekräfta Lösenord',
	'i_agree' => 'Jag accepterar.',
	'agree_t_and_c' => 'Genom att klicka på <strong class="label label-primary">Registrera</strong> godkänner du våra <a href="{x}" target="_blank">användarvillkor</a>.',
	'create_an_account' => 'Skapa ett konto',
	'terms_and_conditions' => 'AnvändarVillkor',
	'validation_complete' => 'Ditt konto har validerats, du kan nu logga in.',
	'validation_error' => 'Det fanns ett okänt fel medans vi validerade ditt konto, var god kontakta en webbplats administratör.',
	'signature' => 'Signatur',
	'signature_max_900' => 'Your signature must be a maximum of 900 characters.',

	// Registration - Authme
    'connect_with_authme' => 'Anslut ditt konto med AuthMe',
	'authme_help' => 'Please enter your ingame AuthMe account details. If you don\'t already have an account ingame, join the server now and follow the instructions provided.',
	'unable_to_connect_to_authme_db' => 'Unable to connect to the AuthMe database. If this error persists, please contact an administrator.',
	'authme_account_linked' => 'Account linked successfully.',
	'authme_email_help_1' => 'Slutligen, ange en e-postadress',
	'authme_email_help_2' => 'Slutligen, ange en e-postadress och ange ett smeknamn',
	
	// Registration errors
	'username_required' => 'Ett användarnamn krävs.',
	'email_required' => 'En e-postadress krävs.',
	'password_required' => 'Ett lösenord krävs.',
	'mcname_required' => 'Ett Minecraft användrarnamn krävs.',
	'accept_terms' => 'Du måste acceptera vilkoren innan du registrerar!',
	'username_minimum_3' => 'Ditt användrarnamn måste minst innehålla 3 tecken.',
	'mcname_minimum_3' => 'Ditt Minecraft användrarnamn måste minst innehålla 3 tecken.',
	'password_minimum_6' => 'Ditt lösenord måste minst innehålla 3 tecken.',
	'username_maximum_20' => 'Ditt användrarnamn får högst innehålla 20 tecken.',
	'mcname_maximum_20' => 'Ditt Minecraft användrarnamn får högst innehålla 20 tecken',
	'password_maximum_30' => 'Ditt lösenord får högst innehålla 30 tecken.',
	'passwords_dont_match' => 'Dina lösenord matchar inte.',
	'username_mcname_email_exists' => 'Användrarnamnet eller e-postadressen finns redan.',
	'invalid_mcname' => 'Ditt Minecraft användarnamn är ogiltigt.',
	'invalid_email' => 'Din e-postadress är ogiltig.',
	'mcname_lookup_error' => 'Det har varit ett fel att kommunicera med Mojangs servrar för att verifiera ditt användarnamn. Vänligen försök igen senare.',
	'invalid_recaptcha' => 'Ogiltigt reCAPTCHA svar.',
	'verify_account' => 'Bekräfta Konto',
	'verify_account_help' => 'Var god och följ instruktionerna nedan så att vi kan verifiera att du äger det här Minecraft kontot.',
	'verification_failed' => 'Verifiering misslyckades, vänligen försök igen.',
	'verification_success' => 'Du har validerats! Nu kan du logga in.',
	'authme_username_exists' => 'Ditt Authme konto har redan anslutits till den här webbplatsen!',
	
	// Login
	'successful_login' => 'Du har loggat in.',
	'incorrect_details' => 'Du har angivit felaktiga uppgifter.',
	'inactive_account' => 'Ditt konto är inaktivt. Vänligen kolla dina e-postmeddelanden för en valideringslänk. Om du inte hittar det, så kan du kolla i din skräppostmapp.',
	'account_banned' => 'Det kontot är bannad.',
	'forgot_password' => 'Glömt ditt lösenord?',
	'remember_me' => 'Kom ihåg mig',
	'must_input_username' => 'Du måste ange ett användarnamn.',
	'must_input_password' => 'Du måste ange ett lösenord.',

	// Forgot password
    'forgot_password_instructions' => 'Var god och ange din e-postadress så att vi kan skicka dig ytterligare instruktioner om hur du återställer ditt lösenord.',
	'forgot_password_email_sent' => 'Om ett konto med e-postadressen finns, har ett e-postmeddelande skickats med ytterligare instruktioner. Om du inte hittar det, så kan du kolla din skräppostmapp.',
	'unable_to_send_forgot_password_email' => 'Det gick inte att skicka glömt lösenords e-post. Vänligen kontakta en administratör.',
	'enter_new_password' => 'Vänligen bekräfta din e-postadress och ange ett nytt lösenord nedan.',
	'incorrect_email' => 'Den e-postadresseb du har angett matchar inte förfrågan.',
	'forgot_password_change_successful' => 'Ditt lösenord har ändrats! Nu kan du logga in.',
	
	// Profile pages
	'profile' => 'Profil',
	'follow' => 'Följ',
	'no_wall_posts' => 'TDet finns inga väggposter här än.',
	'change_banner' => 'Ändra banner',
	'post_on_wall' => 'Skriv något på {x}s vägg', // Don't replace {x}
	'invalid_wall_post' => 'Var goc och se till att ditt inlägg är mellan 1 och 10000 tecken.',
	'1_reaction' => '1 reaktion',
	'x_reactions' => '{x} reaktioner', // Don't replace {x}
	'1_like' => '1 like',
	'x_likes' => '{x} likes', // Don't replace {x}
	'1_reply' => '1 svar',
	'x_replies' => '{x} svar', // Don't replace {x}
	'no_replies_yet' => 'Inga svar än',
	'feed' => 'Flöde',
	'about' => 'Om',
	'reactions' => 'Reaktioner',
	'replies' => 'Svar',
	'new_reply' => 'Ny svar',
	'registered' => 'Registrerad:',
	'last_seen' => 'Senast Inloggad:',
	'new_wall_post' => '{x} har skrivit på din profil.',
	'couldnt_find_that_user' => 'Kunde inte hitta det där användraren.',
	'block_user' => 'Blockera Användrare',
	'unblock_user' => 'Avblockera Användrare',
	'confirm_block_user' => 'Är du säker på att du vill blockera den här användaren? De kommer inte att kunna skicka privata meddelanden eller tagga dig i inlägger.',
	'confirm_unblock_user' => 'Är du säker på att du vill avblockera den här användaren? De kommer att kunna skicka privata meddelanden och tagga dig i inlägger.',
	'user_blocked' => 'Användrare blockerad.',
	'user_unblocked' => 'Användrare avblockerad.',
	'views' => 'Profil Visningar:',
	'private_profile_page' => 'Det här är en privat profil!',
	
	// Reports
	'invalid_report_content' => 'Det gick inte att skapa en anmäla. Var god och se till att din anmälnings orsak är mellan 2 och 1024 tecken.',
	'report_post_content' => 'Vänligen ange en anledning till din anmälning',
	'report_created' => 'Din Anmäla har skapats!',
	
	// Messaging
	'no_messages' => 'Inga nya meddelanden',
	'no_messages_full' => 'Du har inga meddelanden.',
	'view_messages' => 'Visa meddelanden',
	'x_new_messages' => 'Du har {x} nya meddelanden', // Don't replace {x}
	'new_message' => 'Ny meddelande',
	'message_title' => 'Meddelande Titel',
	'to' => 'Till',
	'separate_users_with_commas' => 'Separera användrare med kommatecken',
	'title_required' => 'Var god och ange en titel',
	'content_required' => 'Var god och ange något innehåll',
	'users_to_required' => 'Vänligen ange vissa meddelandemottagare',
	'cant_send_to_self' => 'Du kan inte skicka ett meddelande till dig själv!',
	'title_min_2' => 'Titeln måste vara minst 2 tecken',
	'content_min_2' => 'Innehållet måste vara minst 2 teckens',
	'title_max_64' => 'Titeln måste vara högst 64 tecken',
	'content_max_20480' => 'Innehållet får vara högst 20480 tecken',
	'max_pm_10_users' => 'Du kan bara skicka ett meddelande till högst 10 användare',
	'message_sent_successfully' => 'Meddelande har skicats!',
	'participants' => 'Mottagare',
	'last_message' => 'Senaste meddelande',
	'by' => 'av',
	'leave_conversation' => 'Lämna konversationen',
	'confirm_leave' => 'Är du säker på att du vill lämna den här konversationen?',
	'one_or_more_users_blocked' => 'Du kan inte skicka privata meddelanden till minst en medlem i samtalet.',

	/*
	 *  Infractions area
	 */
	'you_have_been_banned' => 'Du är bannad!',
	'you_have_received_a_warning' => 'Du har fått en varning!',
	'acknowledge' => 'Erkänna',
	
	/*
	 *  Emails
	 */
	'email_greeting' => 'Hej,',
	'email_message' => 'Tack för att du registrerade! För att slutföra din registrering klickar du på följande länk:',
	'forgot_password_email_message' => 'För att återställa ditt lösenord, klicka på följande länk. Om du inte begärt det själv kan du radera det här e-postmeddelandet.',
	'email_thanks' => 'Tack,'
);
