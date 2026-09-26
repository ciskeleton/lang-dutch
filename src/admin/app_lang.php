<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Componenten';
$lang['admin_content'] = 'Inhoud';
$lang['admin_database_backup'] = 'Database­back-ups';
$lang['admin_extensions'] = 'Extensies';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Help';
$lang['admin_languages'] = 'Talen';
$lang['admin_logs'] = 'Systeemlogboeken';
$lang['admin_media'] = 'Mediabibliotheek';
$lang['admin_modules'] = 'Modules';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Activiteiten-log';
$lang['admin_settings'] = 'Systeem-instellingen';
$lang['admin_sysinfo'] = 'Systeem­informatie';
$lang['admin_system'] = 'Systeem';
$lang['admin_system_firewall'] = 'Systeemfirewall';
$lang['admin_themes'] = 'Thema’s';
$lang['admin_updates'] = 'Systeemupdates';
$lang['admin_users'] = 'Gebruikers';
$lang['admin_view_site'] = 'Site bekijken';
$lang['per_page'] = 'Items per pagina';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Bedankt voor het maken met <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Geen actieve items.} other{<b>#</b> van <b>%s</b> items zijn actief.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Installatie mislukt: %s';
$lang['admin_install_location_app'] = 'Alleen deze applicatie';
$lang['admin_install_location_core'] = 'Alle applicaties';
$lang['admin_install_location_select'] = '&#151; Selecteer locatie &#151;';
$lang['admin_install_update_confirm'] = 'Weet u zeker dat u dit pakket wilt bijwerken?';
$lang['admin_install_update_error'] = 'Bijwerken van het pakket is mislukt.';
$lang['admin_install_update_skip_confirm'] = 'Weet u zeker dat u deze update wilt overslaan?';
$lang['admin_install_update_skip_error'] = 'Overslaan van deze update is mislukt.';
$lang['admin_install_update_skip_success'] = 'Update succesvol overgeslagen.';
$lang['admin_install_update_success'] = 'Pakket succesvol bijgewerkt.';
$lang['admin_install_upload_tip'] = 'Installeer een pakket door hier het <b>.zip</b>-bestand te uploaden.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Kon oude back-upbestanden niet opruimen.';
$lang['admin_database_backup_clean_success'] = '%d back-upbestanden verwijderd. %d schijfruimte vrijgemaakt.';
$lang['admin_database_backup_create'] = 'Back-up maken';
$lang['admin_database_backup_create_confirm'] = 'Weet u zeker dat u nu een back-up wilt maken?';
$lang['admin_database_backup_create_error'] = 'Kon back-upbestand niet maken. Zorg dat de map <b>%s</b> schrijfbaar is.';
$lang['admin_database_backup_create_success'] = 'Back-up bestand <b>%s</b> succesvol aangemaakt.';
$lang['admin_database_backup_delete_confirm'] = 'Weet u zeker dat u deze back-upbestanden wilt verwijderen?';
$lang['admin_database_backup_delete_error'] = 'Kon geselecteerde back-upbestanden niet verwijderen.';
$lang['admin_database_backup_delete_success'] = 'Back-upbestanden succesvol verwijderd.';
$lang['admin_database_backup_download_error'] = 'Kon het geselecteerde back-upbestand niet downloaden.';
$lang['admin_database_backup_download_success'] = 'Back-upbestand succesvol gedownload.';
$lang['admin_database_backup_lock_confirm'] = 'Weet u zeker dat u deze back-upbestanden wilt vergrendelen?';
$lang['admin_database_backup_lock_error'] = 'Kon geselecteerde back-upbestanden niet vergrendelen.';
$lang['admin_database_backup_lock_success'] = 'Back-upbestanden succesvol vergrendeld.';
$lang['admin_database_backup_locked_error'] = 'Kon vergrendelde back-upbestanden niet verwijderen.';
$lang['admin_database_backup_missing_error'] = 'Het back-upbestand kon niet gevonden worden.';
$lang['admin_database_backup_unlock_confirm'] = 'Weet u zeker dat u deze back-upbestanden wilt ontgrendelen?';
$lang['admin_database_backup_unlock_error'] = 'Kon geselecteerde back-upbestanden niet ontgrendelen.';
$lang['admin_database_backup_unlock_success'] = 'Back-upbestanden succesvol ontgrendeld.';
$lang['admin_database_prune'] = 'Opschonen';
$lang['admin_database_prune_confirm'] = 'Weet u zeker dat u de database wilt opschonen? Er wordt automatisch een back-up gemaakt.';
$lang['admin_database_prune_error'] = 'Kon de database niet opschonen.';
$lang['admin_database_prune_next'] = 'Volgende opschoning: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Database succesvol opgeschoond.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Logbestanden verwijderen';
$lang['admin_logs_delete_confirm'] = 'Weet u zeker dat u geselecteerde logbestanden wilt verwijderen?';
$lang['admin_logs_delete_error'] = 'Kon logbestanden niet verwijderen.';
$lang['admin_logs_delete_success'] = 'Logbestanden succesvol verwijderd.';
$lang['admin_logs_error_disabled'] = 'Loggen is momenteel niet ingeschakeld.';
$lang['admin_logs_error_empty'] = 'Geen logbestanden gevonden.';
$lang['admin_logs_error_missing'] = 'Het logbestand kon niet gevonden worden of was leeg.';
$lang['admin_logs_tip'] = 'Loggen kan zeer grote bestanden creëren. Denk eraan oude logs te verwijderen op een live-site.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Weet u zeker dat u geselecteerde e-mails wilt verwijderen?';
$lang['admin_emails_delete_error'] = 'Kon geselecteerde e-mails niet verwijderen.';
$lang['admin_emails_delete_success'] = 'Geselecteerde e-mails succesvol verwijderd.';
$lang['admin_emails_email_from'] = 'Verzonden vanaf';
$lang['admin_emails_mail_queue'] = 'E-mailwachtrij';
$lang['admin_emails_mailer'] = 'Massamail';
$lang['admin_emails_search'] = 'Zoeken e-mails op onderwerp of inhoud…';
$lang['admin_emails_send_error'] = 'E-mail kon niet in de wachtrij worden geplaatst. Probeer het opnieuw.';
$lang['admin_emails_send_none'] = 'Er zijn geen gebruikers die aan de geselecteerde criteria voldoen.';
$lang['admin_emails_send_success'] = 'De e-mail is in de wachtrij geplaatst en wordt binnenkort verzonden.';
$lang['admin_emails_send_to_banned'] = 'Sturen naar geblokkeerde gebruikers.';
$lang['admin_emails_send_to_deleted'] = 'Sturen naar verwijderde gebruikers.';
$lang['admin_emails_send_to_disabled'] = 'Sturen naar inactieve gebruikers.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Gebruiker toevoegen';
$lang['admin_users_all_users'] = 'Alle gebruikers';
$lang['admin_users_ban_confirm'] = 'Weet u zeker dat u de geselecteerde gebruikers wilt verbannen?';
$lang['admin_users_ban_error'] = 'Kan de geselecteerde gebruikers niet verbannen.';
$lang['admin_users_ban_success'] = 'Geselecteerde gebruikers succesvol verbannen.';
$lang['admin_users_delete_confirm'] = 'Weet u zeker dat u de geselecteerde gebruikers wilt verwijderen?';
$lang['admin_users_delete_error'] = 'Kan de geselecteerde gebruikers niet verwijderen.';
$lang['admin_users_delete_success'] = 'Geselecteerde gebruikers succesvol verwijderd.';
$lang['admin_users_disable_confirm'] = 'Weet u zeker dat u de geselecteerde gebruikers wilt uitschakelen?';
$lang['admin_users_disable_error'] = 'Kan de geselecteerde gebruikers niet uitschakelen.';
$lang['admin_users_disable_success'] = 'Geselecteerde gebruikers succesvol uitgeschakeld.';
$lang['admin_users_edit'] = 'Gebruiker bewerken';
$lang['admin_users_edit_error'] = 'Gebruiker kon niet worden bijgewerkt.';
$lang['admin_users_edit_success'] = 'Gebruiker succesvol bijgewerkt.';
$lang['admin_users_enable_confirm'] = 'Weet u zeker dat u de geselecteerde gebruikers wilt inschakelen?';
$lang['admin_users_enable_error'] = 'Kan de geselecteerde gebruikers niet inschakelen.';
$lang['admin_users_enable_success'] = 'Geselecteerde gebruikers succesvol ingeschakeld.';
$lang['admin_users_groups'] = 'Groepen';
$lang['admin_users_lock_confirm'] = 'Weet u zeker dat u de geselecteerde gebruikers wilt vergrendelen?';
$lang['admin_users_lock_error'] = 'Kan de geselecteerde gebruikers niet vergrendelen.';
$lang['admin_users_lock_success'] = 'Geselecteerde gebruikers succesvol vergrendeld.';
$lang['admin_users_logged'] = 'Ingelogde gebruikers';
$lang['admin_users_manage'] = 'Gebruikers beheren';
$lang['admin_users_remove_confirm'] = 'Weet u zeker dat u de geselecteerde gebruikers en al hun gegevens permanent wilt verwijderen?';
$lang['admin_users_remove_error'] = 'Kan de geselecteerde gebruikers en al hun gegevens niet permanent verwijderen.';
$lang['admin_users_remove_success'] = 'Geselecteerde gebruikers en al hun gegevens succesvol verwijderd.';
$lang['admin_users_restore_confirm'] = 'Weet u zeker dat u de geselecteerde gebruikers wilt herstellen?';
$lang['admin_users_restore_error'] = 'Kan de geselecteerde gebruikers niet herstellen.';
$lang['admin_users_restore_success'] = 'Geselecteerde gebruikers succesvol hersteld.';
$lang['admin_users_search'] = 'Zoeken op naam, gebruikersnaam of e-mail…';
$lang['admin_users_unban_confirm'] = 'Weet u zeker dat u de verbanning van de geselecteerde gebruikers wilt opheffen?';
$lang['admin_users_unban_error'] = 'Kan de verbanning van de geselecteerde gebruikers niet opheffen.';
$lang['admin_users_unban_success'] = 'Verbanning van geselecteerde gebruikers succesvol opgeheven.';
$lang['admin_users_unlock_confirm'] = 'Weet u zeker dat u de geselecteerde gebruikers wilt ontgrendelen?';
$lang['admin_users_unlock_error'] = 'Kan de geselecteerde gebruikers niet ontgrendelen.';
$lang['admin_users_unlock_success'] = 'Geselecteerde gebruikers succesvol ontgrendeld.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Log wissen';
$lang['admin_reports_clear_confirm'] = 'Weet u zeker dat u het actie-log wilt wissen?';
$lang['admin_reports_clear_error'] = 'Kon het actie-log niet wissen.';
$lang['admin_reports_clear_success'] = 'Actie-log succesvol gewist.';
$lang['admin_reports_latest_actions'] = 'Laatste acties';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Weet u zeker dat u geselecteerde bestanden wilt verwijderen?';
$lang['admin_media_delete_error'] = 'Bestanden konden niet worden verwijderd.';
$lang['admin_media_delete_success'] = 'Bestanden succesvol verwijderd.';
$lang['admin_media_file_delete_error'] = 'Bestand kon niet worden verwijderd.';
$lang['admin_media_file_delete_success'] = 'Bestand succesvol verwijderd.';
$lang['admin_media_file_update_error'] = 'Bestand kon niet worden bijgewerkt.';
$lang['admin_media_file_update_success'] = 'Bestand succesvol bijgewerkt.';
$lang['admin_media_search'] = 'Zoeken op naam, beschrijving of bestandsnaam…';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Geen actieve modules.} other{<b>#</b> van <b>%s</b> modules zijn actief.}';
$lang['admin_modules_add'] = 'Module toevoegen';
$lang['admin_modules_delete_confirm'] = 'Weet u zeker dat u module wilt verwijderen: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Module kon niet worden verwijderd.';
$lang['admin_modules_delete_error_active'] = 'Actieve modules kunnen niet worden verwijderd.';
$lang['admin_modules_delete_success'] = 'Module succesvol verwijderd.';
$lang['admin_modules_disable_all_confirm'] = 'Weet u zeker dat u alle modules wilt uitschakelen?';
$lang['admin_modules_disable_all_error'] = 'Kon niet alle modules uitschakelen.';
$lang['admin_modules_disable_all_success'] = 'Alle modules succesvol uitgeschakeld.';
$lang['admin_modules_disable_confirm'] = 'Weet u zeker dat u module wilt uitschakelen: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Module kon niet worden uitgeschakeld.';
$lang['admin_modules_disable_success'] = 'Module succesvol uitgeschakeld.';
$lang['admin_modules_enable_all_confirm'] = 'Weet u zeker dat u alle modules wilt inschakelen?';
$lang['admin_modules_enable_all_error'] = 'Kon niet alle modules inschakelen.';
$lang['admin_modules_enable_all_success'] = 'Alle modules succesvol ingeschakeld.';
$lang['admin_modules_enable_confirm'] = 'Weet u zeker dat u module wilt inschakelen: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Module kon niet worden geactiveerd.';
$lang['admin_modules_enable_success'] = 'Module succesvol geactiveerd.';
$lang['admin_modules_global'] = 'Globale module (gedeeld)';
$lang['admin_modules_install_confirm'] = 'Weet u zeker dat u de module: <b>%s</b> wilt installeren?';
$lang['admin_modules_install_error'] = 'Installeren van module mislukt.';
$lang['admin_modules_install_success'] = 'Module succesvol geïnstalleerd.';
$lang['admin_modules_install_tip'] = 'Modules voegen nieuwe functionaliteit toe aan uw site. Bekijk beschikbare modules in de <a href="%s" target="_blank" rel="noopener">module-directory</a> of upload er één als <b>.zip</b>-pakket.';
$lang['admin_modules_update_confirm'] = 'Weet u zeker dat u deze module wilt bijwerken?';
$lang['admin_modules_update_error'] = 'Bijwerken van de module is mislukt.';
$lang['admin_modules_update_success'] = 'Module succesvol bijgewerkt.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Geen actieve plugins.} other{<b>#</b> van <b>%s</b> plugins zijn actief.}';
$lang['admin_plugins_add'] = 'Plugin toevoegen';
$lang['admin_plugins_delete_confirm'] = 'Weet u zeker dat u plugin wilt verwijderen: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Plugin kon niet worden verwijderd.';
$lang['admin_plugins_delete_error_active'] = 'Actieve plug-ins kunnen niet worden verwijderd.';
$lang['admin_plugins_delete_success'] = 'Plugin succesvol verwijderd.';
$lang['admin_plugins_disable_all_confirm'] = 'Weet u zeker dat u alle plugins wilt uitschakelen?';
$lang['admin_plugins_disable_all_error'] = 'Kon niet alle plugins uitschakelen.';
$lang['admin_plugins_disable_all_success'] = 'Alle plugins succesvol uitgeschakeld.';
$lang['admin_plugins_disable_confirm'] = 'Weet u zeker dat u plugin wilt uitschakelen: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Plugin kon niet worden uitgeschakeld.';
$lang['admin_plugins_disable_success'] = 'Plugin succesvol uitgeschakeld.';
$lang['admin_plugins_enable_all_confirm'] = 'Weet u zeker dat u alle plugins wilt inschakelen?';
$lang['admin_plugins_enable_all_error'] = 'Kon niet alle plugins inschakelen.';
$lang['admin_plugins_enable_all_success'] = 'Alle plugins succesvol ingeschakeld.';
$lang['admin_plugins_enable_confirm'] = 'Weet u zeker dat u plugin wilt inschakelen: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Plugin kon niet worden geactiveerd.';
$lang['admin_plugins_enable_success'] = 'Plugin succesvol geactiveerd.';
$lang['admin_plugins_global'] = 'Globale plug-in (gedeeld)';
$lang['admin_plugins_install_confirm'] = 'Weet u zeker dat u de plug-in: <b>%s</b> wilt installeren?';
$lang['admin_plugins_install_error'] = 'Installeren van plug-in mislukt.';
$lang['admin_plugins_install_success'] = 'Plug-in succesvol geïnstalleerd.';
$lang['admin_plugins_install_tip'] = 'Plugins breiden bestaande functies uit met extra opties of integraties. Installeer via de <a href="%s" target="_blank" rel="noopener">plugin-directory</a> of upload een <b>.zip</b>-bestand.';
$lang['admin_plugins_update_confirm'] = 'Weet u zeker dat u deze plug-in wilt bijwerken?';
$lang['admin_plugins_update_error'] = 'Bijwerken van de plug-in is mislukt.';
$lang['admin_plugins_update_success'] = 'Plug-in succesvol bijgewerkt.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Thema toevoegen';
$lang['admin_themes_delete_confirm'] = 'Weet u zeker dat u thema wilt verwijderen: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Thema kon niet worden verwijderd.';
$lang['admin_themes_delete_error_active'] = 'U kunt het momenteel actieve thema niet verwijderen.';
$lang['admin_themes_delete_success'] = 'Thema succesvol verwijderd.';
$lang['admin_themes_disable_confirm'] = 'Weet je zeker dat je het thema wilt deactiveren: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Het thema kan niet worden gedeactiveerd.';
$lang['admin_themes_disable_error_active'] = 'Het actieve thema kan niet worden uitgeschakeld.';
$lang['admin_themes_disable_success'] = 'Thema succesvol gedeactiveerd.';
$lang['admin_themes_enable_confirm'] = 'Weet u zeker dat u het thema wilt inschakelen: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Thema kon niet worden geactiveerd.';
$lang['admin_themes_enable_success'] = 'Thema succesvol geactiveerd.';
$lang['admin_themes_install_confirm'] = 'Weet u zeker dat u het thema: <b>%s</b> wilt installeren?';
$lang['admin_themes_install_error'] = 'Installeren van thema mislukt.';
$lang['admin_themes_install_success'] = 'Thema succesvol geïnstalleerd.';
$lang['admin_themes_install_tip'] = 'Thema’s wijzigen het uiterlijk en de lay-out van uw site. Kies uit de <a href="%s" target="_blank" rel="noopener">thema-bibliotheek</a> of upload een <b>.zip</b>-bestand om uw eigen thema te installeren.';
$lang['admin_themes_none_tip'] = 'Deze applicatie wordt uitgevoerd zonder thema. Installeer er een om de openbare interface aan te passen.';
$lang['admin_themes_update_confirm'] = 'Weet u zeker dat u dit thema wilt bijwerken?';
$lang['admin_themes_update_error'] = 'Bijwerken van het thema is mislukt.';
$lang['admin_themes_update_success'] = 'Thema succesvol bijgewerkt.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menu’s';
$lang['admin_menus_assign_error'] = 'Menu-locaties konden niet worden bijgewerkt.';
$lang['admin_menus_assign_success'] = 'Menu-locaties succesvol bijgewerkt.';
$lang['admin_menus_header'] = 'Er zijn <b>%s</b> menulocaties beschikbaar.';
$lang['admin_menus_location'] = 'Locatie';
$lang['admin_menus_locations'] = 'Menu-locaties';
$lang['admin_menus_manage'] = 'Menu’s beheren';
$lang['admin_menus_menu'] = 'Toegewezen menu';
$lang['admin_menus_none'] = '&#151; Geen &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Taal toevoegen';
$lang['admin_languages_default_confirm'] = 'Weet u zeker dat u deze taal wilt instellen als standaard voor de site?';
$lang['admin_languages_default_error'] = 'Kon standaardtaal niet wijzigen.';
$lang['admin_languages_default_error_nochange'] = 'Deze taal is al de standaard.';
$lang['admin_languages_default_success'] = 'Standaardtaal succesvol gewijzigd.';
$lang['admin_languages_delete_confirm'] = 'Weet u zeker dat u de taal wilt verwijderen: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Verwijderen van de taal is mislukt.';
$lang['admin_languages_delete_error_active'] = 'Actieve talen kunnen niet worden verwijderd.';
$lang['admin_languages_delete_error_default'] = 'Standaardtaal kan niet worden verwijderd.';
$lang['admin_languages_delete_success'] = 'Taal succesvol verwijderd.';
$lang['admin_languages_disable_all_confirm'] = 'Weet u zeker dat u alle talen wilt uitschakelen?';
$lang['admin_languages_disable_all_error'] = 'Kon niet alle talen uitschakelen.';
$lang['admin_languages_disable_all_success'] = 'Alle talen succesvol uitgeschakeld.';
$lang['admin_languages_disable_confirm'] = 'Weet u zeker dat u taal wilt uitschakelen: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Kon taal niet uitschakelen.';
$lang['admin_languages_disable_error_default'] = 'De standaardtaal kan niet worden uitgeschakeld.';
$lang['admin_languages_disable_error_nochange'] = 'Deze taal is al uitgeschakeld.';
$lang['admin_languages_disable_success'] = 'Taal succesvol uitgeschakeld.';
$lang['admin_languages_enable_all_confirm'] = 'Weet u zeker dat u alle talen wilt inschakelen?';
$lang['admin_languages_enable_all_error'] = 'Kon niet alle talen inschakelen.';
$lang['admin_languages_enable_all_success'] = 'Alle talen succesvol ingeschakeld.';
$lang['admin_languages_enable_confirm'] = 'Weet u zeker dat u taal wilt inschakelen: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Kon taal niet inschakelen.';
$lang['admin_languages_enable_error_nochange'] = 'Deze taal is al ingeschakeld.';
$lang['admin_languages_enable_success'] = 'Taal succesvol ingeschakeld.';
$lang['admin_languages_install_confirm'] = 'Weet u zeker dat u de taal: <b>%s</b> wilt installeren?';
$lang['admin_languages_install_error'] = 'Installeren van taal mislukt.';
$lang['admin_languages_install_success'] = 'Taal succesvol geïnstalleerd.';
$lang['admin_languages_install_tip'] = 'Talen voegen vertalingen toe voor de interface en inhoud van uw site. Bekijk beschikbare talen in de <a href="%s" target="_blank" rel="noopener">taaldirectory</a> of upload een <b>.zip</b>-pakket om uw eigen taal te installeren.';
$lang['admin_languages_tip'] = 'Schakel talen in of uit en stel de standaardtaal van de site in. Ingeschakelde talen zijn beschikbaar voor bezoekers.';
$lang['admin_languages_update_confirm'] = 'Weet u zeker dat u deze taal wilt bijwerken?';
$lang['admin_languages_update_error'] = 'Bijwerken van de taal is mislukt.';
$lang['admin_languages_update_success'] = 'Taal succesvol bijgewerkt.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Het pakket bestaat al.';
$lang['package_archive_download_failed'] = 'Kan het pakketarchief niet downloaden.';
$lang['package_backup_create_error'] = 'Het aanmaken van een pakketbackup is mislukt.';
$lang['package_backup_dir_failed'] = 'Kan back-upmap %s niet aanmaken';
$lang['package_backup_missing'] = 'Backupbestand bestaat niet.';
$lang['package_backup_path_error'] = 'Het pad naar het backupbestand kon niet worden achterhaald.';
$lang['package_backup_request_invalid'] = 'Ongeldig backupverzoek.';
$lang['package_backup_restore_error'] = 'Het herstellen van de pakketbackup is mislukt.';
$lang['package_catalog_type_unknown'] = 'Onbekend catalogustype.';
$lang['package_checksum_error'] = 'Checksumverificatie van het pakket is mislukt.';
$lang['package_copy_files_error'] = 'Het kopiëren van pakketbestanden naar de bestemming is mislukt.';
$lang['package_copy_updates_error'] = 'Het kopiëren van updatebestanden naar de bestemming is mislukt.';
$lang['package_dest_dir_failed'] = 'Kan doelmap %s niet aanmaken';
$lang['package_destination_error'] = 'De doelmap van het pakket kon niet worden achterhaald.';
$lang['package_download_dir_failed'] = 'Kan downloadmap %s niet aanmaken';
$lang['package_download_empty'] = 'Het downloaden van het pakket gaf een lege respons.';
$lang['package_download_request_invalid'] = 'Ongeldig downloadverzoek voor pakket.';
$lang['package_extract_failed'] = 'Kan ZIP %s niet uitpakken';
$lang['package_invalid_lang_files'] = 'Ongeldige taal — vereiste taalbestanden voor de applicatie ontbreken.';
$lang['package_invalid_lang_structure'] = 'Ongeldige taal — admin- en/of ci3-mappen ontbreken.';
$lang['package_invalid_missing_info'] = 'Ongeldige %s: "info.php" ontbreekt.';
$lang['package_invalid_module_structure'] = 'Ongeldige module — vereiste config- en/of controllers-mappen ontbreken.';
$lang['package_invalid_plugin_boot'] = 'Ongeldige plugin — "boot.php" ontbreekt.';
$lang['package_invalid_plugin_contents'] = 'Ongeldige plugin — plugins mogen geen controllers of views bevatten.';
$lang['package_invalid_theme_boot'] = 'Ongeldig thema — "boot.php" ontbreekt.';
$lang['package_invalid_theme_views'] = 'Ongeldig thema — views-map ontbreekt.';
$lang['package_no_root_dir'] = 'Het pakket bevat geen hoofdmap (root directory).';
$lang['package_not_downloadable'] = 'Het pakket is niet openbaar te downloaden.';
$lang['package_not_in_registry'] = 'Het pakket is niet beschikbaar in het openbare register.';
$lang['package_request_invalid'] = 'Ongeldig pakketverzoek.';
$lang['package_rollback_request_invalid'] = 'Ongeldig terugdraaiverzoek (rollback).';
$lang['package_root_mismatch'] = 'De hoofdmap van het pakketarchief komt niet overeen met %s';
$lang['package_single_root_required'] = 'Het pakket moet precies één hoofdmap bevatten.';
$lang['package_source_error'] = 'De bron van het pakket kon niet worden achterhaald.';
$lang['package_system_core_restricted'] = 'Systeemcomponenten kunnen niet als pakket worden geïnstalleerd.';
$lang['package_temp_dir_failed'] = 'Kan tijdelijke map %s niet aanmaken';
$lang['package_type_unknown'] = 'Onbekend pakkattype.';
$lang['package_update_request_invalid'] = 'Ongeldig updateverzoek voor pakket.';
$lang['package_update_root_mismatch'] = 'De hoofdmap van het update-archief komt niet overeen met %s.';
$lang['package_upload_dir_failed'] = 'Kan uploadmap %s niet aanmaken';
$lang['package_url_invalid'] = 'Ongeldige distributie-URL voor het pakket.';
$lang['package_write_failed'] = 'Kan pakket niet naar %s schrijven';
$lang['package_zip_not_found'] = 'Pakket-ZIP bestaat niet: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Nieuwe updates beschikbaar!';
$lang['update_backup_error'] = 'Kan geen back-up maken van het bestaande pakket. De update is afgebroken.';
$lang['update_check_disabled'] = 'Automatische updatecontroles zijn uitgeschakeld. Schakel ze in om updates te bekijken.';
$lang['update_check_error'] = 'Kan de updatecontrole op dit moment niet uitvoeren.';
$lang['update_check_success'] = 'Updatecontrole succesvol voltooid.';
$lang['update_install_error'] = 'Het pakket kon niet worden geïnstalleerd. De vorige versie is behouden.';
$lang['update_install_success'] = 'Pakket succesvol bijgewerkt naar de meest recente versie.';
$lang['update_interval_3days'] = 'Elke 3 dagen';
$lang['update_interval_biweekly'] = 'Elke 2 weken';
$lang['update_interval_daily'] = 'Elke dag';
$lang['update_interval_monthly'] = 'Eenmaal per maand';
$lang['update_interval_weekly'] = 'Eenmaal per week';
$lang['update_not_available'] = 'Uw website is up-to-date.';
$lang['update_rollback_confirm'] = 'Weet u zeker dat u de vorige versie wilt herstellen?';
$lang['update_rollback_error'] = 'Kan de vorige versie niet herstellen. Handmatige interventie kan nodig zijn.';
$lang['update_rollback_success'] = 'Vorige versie succesvol hersteld.';
$lang['updates_available'] = 'Beschikbare updates';
$lang['updates_check_now'] = 'Nu controleren';
$lang['updates_check_now_confirm'] = 'Weet u zeker dat u nu wilt controleren op updates?';
$lang['updates_current_version'] = 'Huidige versie';
$lang['updates_enable'] = 'Updates inschakelen';
$lang['updates_last_check'] = 'Laatste controle: %s';
$lang['updates_latest_version'] = 'Nieuwste versie';
$lang['updates_next_check'] = 'Volgende geplande controle: %s';
$lang['updates_previous_version'] = 'Vorige versie';
$lang['updates_recent'] = 'Recent bijgewerkt';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blokkeren van het opgegeven IP-adres is mislukt.';
$lang['admin_firewall_ban_success'] = 'IP-adres is succesvol geblokkeerd.';
$lang['admin_firewall_block_ip'] = 'Blokkeer IP-adres';
$lang['admin_firewall_delete_confirm'] = 'Weet u zeker dat u de geselecteerde IP-adressen wilt deblokkeren?';
$lang['admin_firewall_delete_error'] = 'Deblokkeren van geselecteerde IP-adressen is mislukt.';
$lang['admin_firewall_delete_success'] = 'Geselecteerde IP-adressen zijn succesvol gedeblokkeerd.';
$lang['admin_firewall_duration'] = 'Blokkeringsduur';
$lang['admin_firewall_permanent'] = 'Permanent';
$lang['admin_firewall_reason'] = 'Blokkeringsreden';
$lang['admin_firewall_tip'] = 'Bekijk en beheer IP-adressen die door de firewall zijn geblokkeerd vanwege herhaalde overtredingen of verdachte activiteit.';

// Settings
$lang['404_ban_duration'] = '404-blokkeringsduur';
$lang['404_threshold'] = '404-foutlimiet';
$lang['uri_ban_duration'] = 'URI-blokkeringsduur';
$lang['uri_strike_threshold'] = 'URI-limiet';
