<div class="left_background"></div>

<div class="left">
	<br>
	<br>
	<table cellpadding="1" cellspacing="5" align="left">
		<tr><th>Colleges</th></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=1">College 1</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=2">College 2</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=3">College 3</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=4">College 4</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=5">College 5</a></td></tr>
		<tr><td><a class="navy" href="index.php?controller=logged_in&action=colleges&display=6">College 6</a></td></tr>
	</table>
</div>



<div class="college">
	<br>
	<br>	
	<?php 
		if (isset($_GET['display'])){
			switch ($_GET['display']){
				case '1':
					echo '<p><b>Inleiding</b></p>' ;

					echo '<p>Probleem = Huidige onwenselijke situatie.<br>
							 Doel = Toekomstig wenselijke situatie.<br>
							 Middel = De realisatie van de opdrachtnemer waarmee de opdrachtgever het doel kan bereiken.</p>';

					echo '<p>Stappenplan:<br>
							 1.	Onderzoeken<br>
							 2.	Definiëren<br>
							 3.	Kiezen<br>
							 4.	Beslissen<br>
							 5.	Uitvoeren<br>
							 6.	Controleren<br>
							 7.	Evalueren<br>
							 8.	Documenteren</p>';

					echo '<p>Werkvormen:<br>
							 Improvisatie = helemaal nieuw en onverwacht.<br>
							 Planmatig = redelijk nieuw, maar toch vast punt.<br>
							 Routinematig = bekend en altijd vast.</p>';

					echo '<p>SMART formuleren:<br>
							 [S]pecifiek<br>
							 [M]eetbaar<br>
							 [A]cceptabel<br>
							 [R]ealistisch<br>
							 [T]ijdgebonden</p>';
				break;

				case '2':
					echo '<p><b>Projectplan</b></p>' ;

					echo '<p>Achtergrond = relevante informatie over de organisatie met betrekking tot het project.<br>
							 Aanleiding = welke gebeurtenis zorgt ervoor dat de huidige onwenselijke situatie actueel geworden is?<br>
							 Probleemstelling = wat is het probleem op hoog strategisch niveau?<br>
							 Doelstelling = wat wil de organisatie op hoog strategisch niveau bereiken?<br>
							 Resultaat = met welk middel kan de opdrachtgever het gestelde doel bereiken? <br>
							 Afbakening = wat behoort tot het resultaat en wat niet?<br>
							 Gebruikers = aan wie wordt het resultaat opgeleverd en wie gaat ermee aan de slag?<br>
							 Relaties = welke consequenties heeft dit project op voorgaande of lopende projecten?<br>
							 Effecten = welke bedoelde of onbedoelde en positieve of negatieve effecten kan dit project op de organisatie hebben?<br>
							 Randvoorwaarden = aan welke voorwaarden moet absoluut worden voldaan om het projectresultaat te kunnen opleveren?</p>';

					echo '<p>Projectplan:<br>
							 Wat je moet opzetten en geautoriseerd moet hebben voor de start van de uitvoering van een project onderverdeeld in 6 hoofdstukken:<br>
							 Configuratiepagina<br>
							 Managementsamenvatting<br>
							 Inhoudsopgave<br>
							 1.	Inleiding<br>
							 1.1.	Probleem<br>
							 1.2.	Doel<br>
							 1.3.	Middel<br>
							 2.	Projectdefinitie <br>
							 2.1.	Achtergrond<br>
							 2.2.	Aanleiding<br>
							 2.3.	Probleemstelling<br>
							 2.4.	Doelstelling<br>
							 2.5.	Resultaat<br>
							 2.6.	Afbakening<br>
							 2.7.	Gebruikers<br>
							 2.8.	Relaties<br>
							 2.9.	Effecten<br>
							 2.10.	Randvoorwaarden<br>
							 3.	Producten<br>
							 3.1.	Product Description (hoofdproduct)<br>
3.2.	Product Breakdown Structure  <br>
3.3.	Product Description (deelproduct)<br>
3.4.	Product Flow Diagram<br>
4.	Activiteiten <br>
4.1.	Procesfasering <br>
4.2.	Taken en activiteiten <br>
4.3.	Relaties activiteiten<br>
4.4.	Mijlpalen<br>
4.5.	Ganttchart<br>
4.6.	Capaciteiten/Resources<br>
4.7.	Projectkalender<br>
5.	Beheersing<br>
5.1.	Geld<br>
5.2.	Tijd<br>
5.3.	Kwaliteit<br>
5.4.	Organisatie<br>
5.5.	Informatie<br>
5.6.	Communicatie<br>
6.	Risicomanagement<br>
6.1.	Risicoanalyse<br>
6.2.	Risicomanagement<br>
6.3.	Risicoprofiel en -logboek<br>
Verklarende woordenlijst <br>
Registers, bronnen, literatuurlijst<br>
Bijlagen
</p>';

echo '<p>Productlevenscyclus:<br>
Idee = domein opdrachtgever<br>
Haalbaarheid = domein opdrachtgever<br>
Opdracht = domein opdrachtgever<br>
Specificaties = domein opdrachtnemer<br>
Ontwerp = domein opdrachtnemer<br>
Ontwikkelen = domein opdrachtnemer<br>
Testen = domein opdrachtnemer<br>
Overdracht = domein opdrachtnemer<br>
Nazorg = domein opdrachtnemer<br>
Beheer = domein opdrachtgever<br>
Gebruik = domein opdrachtgever<br>
Vernietiging = domein opdrachtgever
</p>';


				break;

				case '3':

				echo '<p><b>Producten</b></p>' ;

echo '<p>
Managementproduct = een (beslis)document waarmee sturing gegeven wordt aan het proces<br>
Specialistische product = middel waarmee de opdrachtgever het gestelde doel kan bereiken. 
</p>';

echo '<p>Managementproducten: <br>
PP = projectplan<br>
PC = project contract<br>
VR = voortgangsrapport<br>
EV = eindverslag<br>
PR = presentatie
</p>';    

echo '<p>Specialistische producten:<br>
OO = onderzoeksopzet<br>
OR = onderzoeksrapport<br>
AR = adviesrapport<br>
Advies = advies
</p>'; 

echo '<p>Proces = samenhangende activiteiten om een product te realiseren<br>
Taak = wordt door meerdere mensen uitgevoerd<br>
Activiteit = wordt door 1 persoon uitgevoerd
</p>'; 

echo '<p>Productbeschrijving (Product Description):<br>
-	Referentienummer (ID)<br>
-	Productnaam<br>
-	Doel van het product <br>
-	Samenstelling<br>
-	Bron<br>
-	Vorm en uiterlijk<br>
-	Realisatie verantwoordelijke<br>
-	Kwaliteitscriteria<br>
-   Verwachtingen<br>
-   Acceptatiecriteria <br>
-	Type kwaliteitstoets <br>
-	Verantwoordelijke Q-toets<br>
-	Benodigde kennis/materialen
</p>';

echo '<p>Productbeschrijving (Product Description):<br>
Hetzelfde als de eerste productbeschrijving, maar dan nu voor een deelproduct.
</p>';  


echo '<p>Product stroomschema (Product Flow Diagram)<br>
Schema wat laat zien welk deelproduct voor welk deelproduct gerealiseerd moet worden om uiteindelijk het hoofdproduct samen te stellen.
</p>';    

echo '<p>Product decompositiestructuur (Product Breakdown Structure):<br>
Hoofdproduct opdelen in deelproducten, niet meer dan 4 niveaus, anders apart zetten. </p>'; 



				break;

				case '4':

				echo '<p><b>Activiteiten</b></p>' ;

echo '<p>
 Procesfasering is het aanbrengen van logische scheiding in de projectweg: startup, uitvoering en afsluiting.
</p>';    

echo '<p>Relaties en activiteiten.<br>
De activiteiten in relaties koppelen.<br>
FS=Finish to start : b start als A klaar is.<br>
SS=Start to Start: A en B starten tegelijk.<br>
FF=Finish to Finish: A en B eindigen tegelijk.<br>
SF=Start to Finish: A moet starten om B te voltooien.
</p>';

echo '<p>Mijlpalen zijn belangrijke beslismomenten in het project.<br>
Deadlines zijn mijlpalen die niet verschoven kunnen worden.
</p>';  


echo '<p>Grantchart bestaat uit de doorlooptijd, bewerkingstijd, financien, resources en beschikbare capaciteit.</p>';

echo '<p>In de Projectkalander staan de werkdagen en uren van het project.</p>';    



				break;

				case '5':

				echo '<p><b>Beheersing</b></p>' ;

echo '<p>
Geld:<br>
Budgetten,kostenramingen voor-en nacalculaties.<br>
Financiële controles en evaluatie.<br>
Kostenplaatsen<br>
Tolerantanties
</p>';   

echo '<p>Tijd:<br>
Planningsmethoden<br>
Plangereedschappen<br>
Milestone bewakingen en-controles<br>
Timemangement
</p>';    

echo '<p>Met Kwaliteit wordt bedoeld de mate waarin het product aan de verwachtingen voldoet.</p>';    

echo '<p>Organisatie:<br>
PM-structuur<br>
Benoeming opdrachtgever, opdrachtnemer en projectteam.<br>
Functies, rollen, taken, verantwoordelijkheden en bevoegdheden.<br>
BIjzondere taken en Freelancers.
</p>';  

echo '<p>Infromatie:<br>
Infrastructuur zowel intern als extern.<br>
Informatiemiddelen daarmee wordt bedoeld de management producten.
</p>'; 

echo '<p>Communicatie:<br>
interene en externe communicatie.<br>
De communicatie tussen de opdrachtgever en -nemer.<br>
Communicatie met de moederorganisatie en de belanghebbende stakeholders hoe hou je hun tevreden.
</p>';  



				break;

				case '6':

				echo '<p><b>Risicomanagement</b></p>' ;

echo '<p>Risicoanalyse:<br>
identificatie risico’s<br>
Evaluatie risico’s<br>
Identificatie maatregelen<br>
Selectie maatregelen 
</p>'; 

echo '<p>Risicomanagement:<br>
Planning en allocatie met bewaking en rapportage.
</p>'; 

echo '<p>Risicoprofiel en -logboek:<br>
-	Referentienummer<br>
-	Indiener<br>
-	Datum registratie<br>
-	Omschrijving<br>
-	Risicocategorie<br>
        &nbsp&nbsp  Geld<br>
        &nbsp&nbsp  Tijd<br>
        &nbsp&nbsp  Kwaliteit<br>
        &nbsp&nbsp  Organisatie<br>
        &nbsp&nbsp  Informatie<br>
        &nbsp&nbsp  Communicatie<br>
-	Effect van risico’s
                  1-5<br>
-	Kans van risico’s
          1-5 <br>
-	Tijdhorizon
                 1-5<br>
-	Riscowaarde<br>
            &nbsp&nbsp Kans x Effect x Tijdhorizon.<br>
            &nbsp&nbsp 125 is dus max.<br>
            &nbsp&nbsp Hoger dan 50 is vaak hoog risico.<br>
-	Tegenmaatregelen <br>
-	Datum<br>
-	Status<br>
-	Risico-eigenaar.
</p>';    


				break;

			}
		}
	?>
	<br>
	<br>	
</div>

<!--    


echo '<p></p>';    


<br>


-->