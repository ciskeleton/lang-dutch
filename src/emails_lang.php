<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Systeemupdates beschikbaar';
$lang['emails_updates_available_message'] = <<<EOT
Hallo,

Er zijn nieuwe systeemupdates gedetecteerd voor {site_anchor}.

Deze updates kunnen beveiligingsoplossingen, prestatieverbeteringen of nieuwe functies bevatten.
We raden u aan deze zo snel mogelijk te bekijken.

U kunt de beschikbare updates bekijken en beheren via het beheerdersdashboard:
{link}

Als u de updates al hebt bekeken of toegepast, hoeft u verder niets te doen.

Dit is een automatisch systeembericht dat is verzonden door {site_name}.
Beantwoord deze e-mail niet.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Accountactivering';
$lang['emails_account_activation_request_message'] = <<<EOT
Hallo {name},

Bedankt voor je registratie op {site_anchor}. Je account is aangemaakt maar moet worden geactiveerd voordat je het kunt gebruiken.

Klik op de onderstaande link of kopieer-plak deze in je browser om je account te activeren:
{link}

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nieuwe activeringslink';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hallo {name},

Je hebt onlangs een nieuwe activatielink aangevraagd op {site_anchor} omdat je account nog niet actief was.
Klik op de onderstaande link of kopieer-plak deze in je browser om je account te activeren:
{link}

Als jij dit niet hebt aangevraagd, hoef je niets te doen.

Dit verzoek werd gedaan vanaf dit IP-adres: {ip_link}.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Account geactiveerd';
$lang['emails_account_activation_success_message'] = <<<EOT
Hallo {name},

Je account op {site_anchor} is succesvol geactiveerd. Je kunt nu op elk moment <a href="{login_url}" target="_blank" rel="noopener">inloggen</a>.

We hopen dat je een fijne tijd bij ons hebt.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Account wacht op goedkeuring';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hallo {name},

Bedankt voor je registratie op {site_anchor}. Je account is aangemaakt maar moet eerst worden goedgekeurd door een beheerder voordat deze actief wordt.
Onze excuses voor deze extra stap — dit is enkel om veiligheidsredenen.

Je ontvangt een bevestigingsmail zodra je account is goedgekeurd.

We hopen dat je een fijne tijd bij ons hebt. Met vriendelijke groet,

-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Account goedgekeurd';
$lang['emails_account_approval_success_message'] = <<<EOT
Hallo {name},

Goed nieuws! Je account bij {site_anchor} is zojuist goedgekeurd.

Je kunt nu inloggen en je account meteen gebruiken:
{link}

We zijn blij dat je bij ons bent.

-- Het {site_name}-team.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Account hersteld';
$lang['emails_account_restored_message'] = <<<EOT
Hallo {name},

Deze e-mail bevestigt dat je account op {site_anchor} succesvol is hersteld.

Welkom terug! We hopen dat je deze keer een geweldige ervaring bij ons hebt.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Welkom bij {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hallo {name},

De meeste websites sturen ellenlange welkomstsequenties nadat je je registreert.

Goed nieuws: wij niet.
Maar we willen je toch graag welkom heten en je bedanken dat je je hebt aangesloten bij {site_anchor}.

We hopen dat je een fijne tijd bij ons hebt. Met vriendelijke groet,

-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Verzoek tot wijziging van e-mailadres';
$lang['emails_email_change_request_message'] = <<<EOT
Hallo {name},

Je ontvangt deze e-mail omdat we een verzoek voor het wijzigen van je e-mailadres hebben ontvangen op {site_anchor}.

Klik op de onderstaande link of kopieer-plak deze in je browser als je wilt doorgaan:
{link}

Als jij geen wijziging hebt aangevraagd, is geen verdere actie vereist.

Dit verzoek werd gedaan vanaf dit IP-adres: {ip_link}.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-mailadres gewijzigd';
$lang['emails_email_change_success_message'] = <<<EOT
Hallo {name},

Deze e-mail bevestigt dat het e-mailadres dat je gebruikt op {site_anchor} succesvol is gewijzigd.

Als jij deze actie niet hebt uitgevoerd, neem dan zo snel mogelijk contact met ons op.

Deze actie werd uitgevoerd vanaf dit IP-adres: {ip_link}.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Waarschuwing mislukte aanmelding';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hallo {name},

Iemand heeft onlangs meerdere verkeerde wachtwoorden gebruikt om in te loggen op je {site_name}-account.

Serverdatum: {date}
Apparaat: {browser}, {platform}
IP-adres: {ip_link}

Als jij dit niet was, maak je geen zorgen — de inlogpoging is niet gelukt.

Als jij dit wél was en je je wachtwoord niet meer weet, klik dan op de onderstaande link om het te resetten:
{reset_link}

Heb je problemen met inloggen, neem dan contact op met ons team of vraag een eenmalige inloglink aan.

-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Melding geslaagde aanmelding';
$lang['emails_login_alert_success_message'] = <<<EOT
Hallo {name},

We sturen je deze e-mail naar aanleiding van een succesvolle login op je {site_name}-account.

Serverdatum: {date}
Apparaat: {browser}, {platform}
IP-adres: {ip_link}

Als jij dit was, kun je deze e-mail veilig negeren.

Als jij dit niet was, wijzig dan onmiddellijk je wachtwoord om je account te beveiligen.

Voor hulp kun je altijd ons supportteam contacteren.

-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Snelle inloglink';
$lang['emails_login_magic_link_message'] = <<<EOT
Hallo {name},

Je hebt een eenmalige inloglink aangevraagd voor je account op {site_anchor}.

Klik op de onderstaande link, of kopieer-plak deze in je browser, en je wordt direct ingelogd:
{link}

Deze link verloopt over 15 minuten. Als jij dit niet hebt aangevraagd, kun je deze e-mail negeren.

Dit verzoek werd gedaan vanaf dit IP-adres: {ip_link}.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Tweestapsverificatie';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hallo {name},

Je verificatiecode voor twee-factor authenticatie is: <strong>{code}</strong>

Je kunt twee-factor authenticatie altijd uitschakelen in je accountinstellingen.

Deze actie werd uitgevoerd vanaf dit IP-adres: {ip_link}.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Verzoek tot wachtwoordherstel';
$lang['emails_password_change_request_message'] = <<<EOT
Hallo {name},

Je ontvangt deze e-mail omdat we een verzoek voor een wachtwoordreset hebben ontvangen voor je account op {site_anchor}.

Klik op de onderstaande link of kopieer-plak deze in je browser als je wilt doorgaan:
{link}

Als jij geen wachtwoordreset hebt aangevraagd, hoef je niets te doen.

Dit verzoek werd gedaan vanaf dit IP-adres: {ip_link}.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Wachtwoord gewijzigd';
$lang['emails_password_change_success_message'] = <<<EOT
Hallo {name},

Deze e-mail bevestigt dat je wachtwoord op {site_anchor} succesvol is gewijzigd. Je kunt nu <a href="{login_url}" target="_blank" rel="noopener">inloggen</a> met je nieuwe wachtwoord.

Als jij deze wijziging niet hebt uitgevoerd, neem dan zo snel mogelijk contact met ons op.

Deze actie werd uitgevoerd vanaf dit IP-adres: {ip_link}.

Met vriendelijke groet,
-- Het {site_name} Team.
EOT;
