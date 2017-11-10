<?php 
include('functions.php');
$page = singlePage();
 ?>
<div id="kalender_wrapper">

	<h2>Kommende events</h2>

	<div id="events_wrapper" class="flex">

		<div id="events_list_wrapper">
			

			<div id="events_list">
							<button class="accordion">
				<div class="flex">
				<div class="event-desc">
					<h3>Jubilæumskoncert</h3>
					<p>I september 2017 er det 30 år siden at Lions Fjends blev stiftet, som en lokal afdeling af den verdensomspændende humanitære organisation Lions Clubs International. Dette fejrer vi med en koncert med Prinsens Musikkorps og solist Mette Poulsen på Kongenshus Efterskole onsdag 15. november 2017, kl. 19-21:30. Under koncerten donerer vi midler til projekter i bl.a. lokalområdet.</p>
				</div>
				</div>
				
				
			</button>
			<div class="accordion-content">
				<div class="event_desc_wrapper">

					
					<h5>Jubilæumskoncert</h5>
				<img style="float: right;" src="img/event_billeder/julekoncert.jpg" alt="event description image">
				<p>I september 2017 er det 30 år siden at Lions Fjends blev stiftet, som en lokal afdeling af den verdensomspændende humanitære organisation Lions Clubs International. Dette fejrer vi med en koncert med Prinsens Musikkorps og solist Mette Poulsen på Kongenshus Efterskole onsdag 15. november 2017, kl. 19-21:30. </p>

				<h5>Tilmelding</h5> 
				<p>Billetter til arrangementet (incl. kaffe og kage) koster kr. 50,- og kan købes og betales med Dankort.Desuden kan billetter reserveres hos Ejvind Jakobsen, tlf. 40411296.</p>
		
				<h5>Tidsplan</h5>
				<div class="tidsplan">
				<span>19:00 -  </span><p>Velkomst og donationer samt servering af kaffe og kage</p>
				<span>20:00 -  </span><p>Koncert med Prinsens Musikkorps og solist Mette Poulsen</p>
				<span>21:00 -  </span><p>Afslutning</p>
				
				</div>
			
				</div>
		</div>
			</div>
			<div id="events_list">
							<button class="accordion">
				<div class="flex">
				<div class="event-desc">
					<h3>Julemarkedet på Ulstrup Slot</h3>
					<p>Snart åbner vi endnu engang for det årlige Julemarked på Ulstrup Slot, det er som sædvandlig den første hele weekend i december, dvs. den 2-3. december 2017.</p>
				</div>
				</div>
				
				
			</button>
			<div class="accordion-content">
				<div class="event_desc_wrapper">

					<h5>Husk gratis entre</h5>
					<img style="float: right;" src="img/event_billeder/julemarked.jpg" alt="event description image">
				<p>Til Julemarkedet plejer vi at få besøg af 3.000 - 4.000 gæster, og for mange af vores gæster er det en tradition at besøge Julemarkedet og gøre et par juleindkøb. Mange har en dejlig familie oplevelse med børnebørn, med venner, naboer eller måske bare en lejlighed til at komme ud og få lidt frisk luft.</p>

				<h5>Åbent lørdag og søndag</h5> 
				<p>Julemarkedet er åbent lørdag og søndag fra 10.00 - 16.00, så man har god tid til at nyde dagen på Ulstrup Slot - gøre en god handel, få noget lækkert til ganen og samtidig komme i julestemning i de mange hyggelige boder, der er opstillet i kælderen under hovedfløjen og i en af sidefløjene - det hele samlet omkring slotsgården.</p>
		
				<h5>Tidsplan</h5>
				<div class="tidsplan">
				<span>10:00 - </span><p>Markedet åbner</p>
				<span>12:30 -  </span><p>Julemanden kommer</p>
				<span>13:30 -  </span><p>Hestevogn med ryttere drager afsted</p>
				
				</div>
			
				</div>
		</div>
			</div>
						<div id="events_list">
							<button class="accordion">
				<div class="flex">
				<div class="event-desc">
					<h3>Bankospil i Ishøj</h3>
					<p>Gennem efterhånden mange år Lions Club Ishøj har arrangeret bankospil for kommunens pensionister. I år er vi i Ishøj søndag eftermiddag samlet til bankospil i kantinen på Strandgårdskolen. Der bliver spillet om købmandskurve som hovedgevinster og en masse dejlige ting som række- og sidegevinster. Udover at spille banko er der også tid til hygge og drikke en kop kaffe med kringle eller en kold øl - alt sammen gratis. </p>
				</div>
				</div>
				
				
			</button>
			<div class="accordion-content">
				<div class="event_desc_wrapper">

					<h5>Husk! Det er gratis</h5>
					<img style="float: right;" src="img/event_billeder/banko.jpg" alt="event description image">
				<p>Pensionist-Banko afholdes normalt den første søndag i november. Hvis du vil tilmeldes, så kan du sende en mail til ishoej@lions.dk.</p>

				<h5>Brilleindsamling</h5> 
				<p><?php echo $page['Brilleindsamling']; ?></p>
			
		
				<h5>Tidsplan</h5>
				<div class="tidsplan">
				<span>18:00 -  </span><p>Kaffe og kage </p>
				<span>18:30 -  </span><p>Bankospillet begynder</p>
				<span>20:30 - </span><p>Afslutning</p>
				
				</div>
			
				</div>
		</div>
			</div>
		</div>

		<div id="event_highlight">
			<img id="event_img" src="img/event_billeder/briller.jpg" alt="event description image">
			<h3><?php echo $page['title']; ?></h3>
			<p><?php echo $page['brød_text']; ?>
		<a href="" id="event_button">
			Mere info
		</a></p></div>
		</div>

	</div>

</div>
