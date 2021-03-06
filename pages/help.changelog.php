<fieldset>
	<legend>MultiNewsletter Changelog</legend>
	<p>3.1.3</p>
	<ul>
		<li>Bugfix: Benutzerliste speichert wieder korrekt.</li>
		<li>Bugfix: Empfänger im Archiv werden wieder korrekt dargestellt.</li>
		<li>Bugfix: Einstellungen Optionen werden vor dem Speichern ausgeklappt,
			damit Pflichtfelder fokussierbar werden.</li>
	</ul>
	<p>3.1.2</p>
	<ul>
		<li>Bugfix: Import scheiterte, wenn Adresse mit Leerstelle endete.</li>
		<li>Bugfix: GruppenIDs wurden seit 3.0.8 nicht mehr importiert.</li>
		<li>Bugfix: Newsletter Voreinstellungen beim ersten Versandschritt werden wieder korrekt geladen.</li>
	</ul>
	<p>3.1.1</p>
	<ul>
		<li>Englisches Backend hinzugefügt.</li>
		<li>Bugfix: Import war seit Version 3.0.8 kaputt.</li>
		<li>Bugfix: Update war in Version 3.1.0 kaputt.</li>
		<li>Bugfix: Aktivierungslink war ohne E-Mailadresse.</li>
		<li>Bugfix: SEO42 aus Beispieltemplate entfernt.</li>
	</ul>
	<p>3.1.0: Danke an Alex Platter! Das ist wieder deine Version.</p>
	<ul>
		<li>MailChimp Anbindung.</li>
		<li>Bugfix: Sonderzeichen in Artikelname werden jetzt korrekt in DB gespeichert.</li>
		<li>Bugfix: Wenn während des Versands die Session abbricht wird beim erneuten Login nun der Versandstatus korrekt initialisiert.</li>
		<li>Bugfix: Löschen einer Sprache löscht nun auch entsprechende Archive und setzt Sprache der Benutzer zurück.</li>
	</ul>
	<p>3.0.8: Danke an Alex Platter! Das ist deine Version.</p>
	<ul>
		<li>Italienische Presets hinzugefügt.</li>
		<li>Newsletter Versand Reload JavaScript verbessert.</li>
		<li>SMTP Override.</li>
		<li>BCC Override.</li>
	</ul>
	<p>3.0.7:</p>
	<ul>
		<li>Bugfix: Update von 3.0.x auf 3.0.6 schlug fehl</li>
	</ul>
	<p>3.0.6:</p>
	<ul>
		<li>Beim Versand werden zuletzt versendete Adressen angezeigt.</li>
		<li>Klasse zum Verwalten von Einstellungen in das D2U Helper Addon ausgelagert.</li>
		<li>Komfortable Modulverwaltung mit Updateoption hinzugefügt.</li>
	</ul>
	<p>3.0.5:</p>
	<ul>
		<li>Anzahl Empfänger im Archiv angezeigt.</li>
		<li>Sortierung beim Versand nach E-Mailadresse.</li>
	</ul>
	<p>3.0.4:</p>
	<ul>
		<li>Bugfix: Settings textarea field without rex_redactor2 possible.</li>
		<li>Bugfix: Fehler bei Benutzern mit Nachnamen mit '.</li>
		<li>Bugfix: Keine Meldung bei Versand an Gruppe ohne Nutzer behoben.</li>
	</ul>
	<p>3.0.3:</p>
	<ul>
		<li>Bugfix: Einstellungen Fehler wenn Artikel nicht gefunden wird.</li>
		<li>Bugfix: Bei Mehrsprachigkeit wird beim Absender auch die Sprachbezeichnung wieder angezeigt.</li>
	</ul>
	<p>3.0.2:</p>
	<ul>
		<li>Bugfix: Fehler unter PHP 5.5 und 5.6 beim Anzeigen der Einstellungsseitebehoben.</li>
		<li>Bugfix: Fehler beim Anzeigen der Linkmap, wenn noch keine Standardsprache festgelegt ist.</li>
		<li>Bugfix: Bei Benutzern ist die Gruppe jetzt Pflichtfeld. Sonst kann nicht gespeichert werden.</li>
		<li>Bugfix: Versand bricht bei ungüligen Userdaten nicht mehr ab.</li>
		<li>Bugfix: Fehlermeldungen beim Versand werden korrekt angezeigt.</li>
	</ul>
	<p>3.0.1:</p>
	<ul>
		<li>Bugfix: Newsletter nur an aktive Nutzer mailen.</li>
		<li>Optische Korrekturen und Verbesserungen.</li>
		<li>Übersetzungen aufgeräumt.</li>
		<li>Bugfix Einstellungen.</li>
	</ul>
	<p>3.0.0:</p>
	<ul>
		<li>Alte Platzhalter die mit /// beginnen und enden entfernt.</li>
		<li>Portierung auf Redaxo 5.</li>
		<li>Fehler wenn doppelte E-Mailadressen im Import vorhanden sind behoben.</li>
		<li>Suche in Benutzerliste wird in Session gespeichert.</li>
		<li>Tabellenengine auf InnoDB umgestellt (Redaxo 5 Standard).</li>
	</ul>
	<p>2.2.3:</p>
	<ul>
		<li>Nutzer mit GruppenID NULL werden in Liste der Benutzer ohne Gruppe angezeigt.</li>
		<li>E-Mailadressen konnten mit Leerzeichen gespeichert werden und haben so den Versand blockiert.</li>
		<li>Auf Bootstrap basierendes Beispieltemplate hinzugefügt.</li>
	</ul>
	<p>2.2.2:</p>
	<ul>
		<li>HTMLBody im Archiv nun auch vom Typ Longtext.</li>
		<li>Anzahl Benutzer anzeigen.</li>
	</ul>
	<p>2.2.1:</p>
	<ul>
		<li>Funktion MultiNewsletterUser:initByMail() gibt jetzt bei nicht
		gefundener E-Mailadresse korrekt false zurück.</li>
		<li>Anmeldung und Abmeldung verbessert.</li>
		<li>Platzhalter für Links beginnen und enden jetzt mit +++.</li>
	</ul>
	<p>2.2:</p>
	<ul>
		<li>Bessere Dokumentation für Aktivierungslink. Thx @missmissr</li>
		<li>Vor Import werden unnötige Leerzeichen entfernt. Thx @missmissr</li>
		<li>Speichert jetzt auch IPv6 Adressen.</li>
	</ul>
	<p>2.1.1:</p>
	<ul>
		<li>Fallbacksprache in den Einstellungen hatte Fehler wenn nur eine Sprache
			vorhanden war. Thx @missmissr</li>
	</ul>
	<p>2.1.0:</p>
	<ul>
		<li>Auswahl Aktion beim Abmelden: Status auf Löschen oder Abgemeldet setzbar.</li>
		<li>Möglichkeit einer Benachrichtigung per Mail bei bei An- und Abmeldung.</li>
	</ul>
	<p>2.0.0:</p>
	<ul>
		<li>Anpassungen an Redaxo 4.6: Einstellungen werden jetzt im data Verzeichnis gespeichert.</li>
		<li>Übersetzungen können jetzt ohne FTP in den Einstellungen bearbeitet werden.</li>
		<li>Minimal PHP 5.2; Notices entfernt.</li>
		<li>GUI Anpassungen.</li>
		<li>Bestätigungsmail bei Anmeldung</li>
		<li>Benutzerverwaltung: Suchkriterien bleiben beim Verlassen des Formulars erhalten</li>
		<li>Vorbelegungen für Absender bei Gruppen möglich.</li>
		<li>Vorbelegung für Testmails einstellbar</li>
		<li>BCC Versand von Newslettern entfernt.</li>
		<li>Bugfixing</li>
		<li>Objektorientierte Programmierung.</li>
		<li>Versand an mehrere Gruppen gleichzeitig möglich.</li>
		<li>Viele Kleinigkeiten mehr.</li>
	</ul>
	<p>1.4.2:</p>
	<ul>
		<li>Mehrfache Anmeldung wird geblockt (Danke Frood)</li>
	</ul>
	<p>1.4.1:</p>
	<ul>
		<li>Anrede wird korrekt gesetzt.</li>
		<li>Fehler wiederholtes Datenbankupdate wird bei leerer Tabelle behoben.</li>
	</ul>
	<p>1.4:</p>
	<ul>
		<li>Akademischer Grad als zweiten Titel hinzugf&uuml;gt (Danke "steri").</li>
		<li>Probleme mit RexSEO und leading Slash behoben ("/" nach Domainnamen).</li>
	</ul>
	<p>1.3:</p>
	<ul>
		<li>CSV Import hat nun die M&ouml;glichkeit eine Aktion auszuw&auml;hlen: l&ouml;schen, nur neue hinzuf&uuml;gen, &uuml;berschreiben.</li>
		<li>Module werden bei der Installation in Redaxo installiert.</li>
	</ul>
	<p>1.2.5 Bugfixing:</p>
	<ul>
		<li>Hilfe f&uuml;r Sprache de_de aktualisiert.</li>
		<li>Fehler bei Personalisierung der Anrede bei Mehrsprachigkeit behoben.</li>
		<li>GruppenID kann in Spalte send_group im Import mit angegeben werden.</li>
	</ul>
	<p>1.2.4 Bugfixing:<br />
	<ul>
		<li>Mehrfache Anmeldung wird geblockt (Danke Frood)</li>
		<li>Lang Fallback Fehler behoben</li>
	</ul>
	<p>1.2.3 Bugfixing:<br />
	<ul>
		<li>Kompatibilit&auml;t zu Redaxo 4.1 im Ausgabemodul hergestellt.</li>
	</ul>
	<p>1.2.2 Bugfixing:<br />
	<ul>
		<li>Falls max_execution_time in der PHP Config auf 0 gesetzt wird, wird jetzt ein Standardwert gesetzt.</li>
	</ul>
	<p>1.2.1 Bugfixing:<br />
	<ul>
		<li>Fehler im Abmeldungsmodul behoben</li>
	</ul>
	<p>1.2:<br />
	<ul>
		<li>Usertracking verbessert. Gespeichert wird jetzt: Erstellungsdatum und -IP,
			Aktivierungsdatum und -IP, Updatedatum und IP sowie Anmeldeart (Web, Import, Backend)</li>
		<li>Bugfix: ab jetzt k&ouml;nnen auf Mac erzeugte Import CSV Dateien importiert werden.</li>
	</ul>
	<p>1.1.7 Bugfixing und mehr:<br />
	<ul>
		<li>Nach Abmeldung funktioniert die erneute Anmeldung jetzt wieder.</li>
		<li>Es werden keine Abmeldebest&auml;tigungsmails mehr verschickt. Die Abmeldung erfolgt immer sofort.</li>
		<li>Sprachdatei de_de.lang hinzugef&uuml;gt</li>
		<li>kleinen &Uuml;bersetzungsfehler behoben</li>
		<li>In Benutzer&uuml;bersicht Erstellungs- und Aktualisierungsdatum hinzugef&uuml;gt</li>
	</ul>
	<p>1.1.6 Bugfixing:<br />
	<ul>
		<li>Verzeichnis Module enth&auml;lt jetzt die Module f&uuml;r Anmeldung und Abmeldung</li>
		<li>Nutzt jetzt rex_mailer Klasse des PHP Mailer Addons (bisher PHPMailer Klasse).</li>
	</ul>
	<p>1.1.5 Bugfixing:<br />
	<ul>
		<li>Weiteres PHP short_open_tag entfernt.</li>
		<li>Nutzt jetzt einheitlich PHPMailer Addon.</li>
	</ul>
	<p>1.1.4 Bugfixing:<br />
	<ul>
		<li>&Uuml;bersetzungsfehler bei invalid_email behoben.</li>
		<li>Meldung wenn E-Mailadresse schon angemeldet ist.</li>
		<li>Backend PHP Einstellung short_open_tag = Off kompatibel.</li>
	</ul>
	<p>1.1.3 Bugfixing:<br />
	<ul>
		<li>Link der Best&auml;tigungsmail wurde im Frontend angezeigt. Jetzt entfernt.</li>
	</ul>
	<p>1.1.2 Bugfixing:</p>
	<ul>
		<li>Erkennt und l&ouml;scht ung&uuml;ltige E-Mailadressen w&auml;hrend dem Newsletterversand.</li>
		<li>peichert bei neuen Benutzern auch die Gruppen.</li>
		<li>Fehler beim Speichern von neuen Benutzern ohne Namen behoben</li>
		<li>Wenn w&auml;hrend dem Newsletterversand benutzer ge&auml;ndert werden, wird Versand nicht mehr unterbrochen.</li>
		<li>Sprachfallback Fehler beim Versenden behoben.</li>
	</ul>
	<p>1.1</p>
	<ul>
		<li>Serverlimits und Sprachfallback</li>
	</ul>
	<p>1.0 Ver&ouml;ffentlicht am 20. August 2008 von <a href="http://thomasgoellner.de/" target="_blank">Thomas G&ouml;llner</a>.
		Spätere	Weiterentwicklung von <a href="http://www.design-to-use.de" target="blank">Tobias Krais</a>.</p>
</fieldset>