# formcalcinjection
Sensitive information disclosing via PDF FormCalc injection.
PDF plugin from Adobe supports FormCalc scripting.
This plugin still supported in IE11 and Firefox ESR.

Files:

leak.pdf - file with FormCalc injection which grab sensitive data from the several pages of Victim website (victimsite.com) and then sends data to the Malicious website (malicious.lol).

proc.php - processes requests from leak.pdf.

Scenario:

1. Malicious user register up at the Victim website and realizes that every user of this website has a profile page with personal sensitive data.
2. Malicious user uploads PDF file to the Victim website. This PDF file includes FormCalc injection which request pages with sensitive data from Victim website and sends them to Malicious website.
3. By using fishing or social engineering techniques Malicious user can convince Victim website user or Victim website admin to open direct link to the uploaded PDF file.
If Victim website user or Victim admin user opens PDF file, sensitive data will send to Malicious site.
In this case Malicious user can use this sensitive data for more deep attacks: social engineering against Victim website user, brute forcing of webservice or database access, etc.
