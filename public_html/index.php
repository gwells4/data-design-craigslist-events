<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8" />
		<link rel="Browser-Tab Icon" href="img/icon-list.svg" type="image/svg">

		<!-- Add CSS file -->
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />

		<title>Repository 4: Data Design - Craigslist Events</title>

	</head>

	<body>

		<!-- This is the header -->
		<header>
			<h1>Data Design: Craigslist Events</h1>
		</header>

		<!-- This is the main page content. -->
		<main>

			<!-- Section 1: Persona -->
			<section>

				<h2>Persona</h2>

				<img id="picture-male-hipster" src="img/male-hipster.jpg" alt="Picture of Male Hipster for Persona">
				<img id="picture-female-hipster" src="img/female-hipster-annotated.jpg" alt="Picture of Female Hipster for Persona">

				<ol>
					<li>
						<b>Quote</b><br>
						<i>"I can't believe I drank my coffee before it was cool."</i>
					</li>
					<li>
						<b>Description</b><br>
						<u>Hipster:</u> A person considered by themselves (and others) to be at the forefront of what's "hip". They may be either male, female, or other. The hip forefront generally includes fashion, and it may also include food & drink, music, art, and travel destinations. One's neighborhood is also very important, as the hipster considers there to be a clear line between fashionable and unfashionable neighborhoods. (See: <a href="https://en.wikipedia.org/wiki/The_Hipster_Handbook"><i>The Hipster Handbook</i></a> for more details.)
					</li>
					<li>
						<b>Needs</b> (of the User from the Site)<br>
						The hipster needs the most up-to-date information to pick the most hip event to attend. Enough detail needs to be included to judge the hipness, so posters of events should be able to enter an adequate description and location, as well as the date & time information.
					</li>
					<li>
						<b>Frustrations</b><br>
						The hipsters number one frustration is not having enough information to judge the hipness of an event. When in doubt, though, the hipster will rule out all events that do not include enough details for the judge the hipness of the event.
					</li>
					<li>
						<b>Ideal Features</b><br>
						Prompts for event posters to input detailed information, such as:
						<ul>
							<li>Date & Time</li>
							<li>Venue (Address or GPS)</li>
							<li>Food? Non/organic? Vegetarian? Allergy-compatible?</li>
							<li>Entertainment</li>
							<li>Special Guests</li>
							<li>Schedule</li>
						</ul>
					</li>
					<li>
						<b>Scenarios</b><br>
						<ol>
							<li>The fridge is empty, and the hipster needs to know where a food event may be going on.</li>
							<li>The hipster is planning their evening activities. What's happening, tonight?</li>
							<li>It's a lazy night, and the hipster doesn't want to drive. What's nearby?</li>
						</ol>
					</li>
				</ol>

			</section>

			<!-- Section 2: Use Case -->
			<section>

				<h2>Use Case</h2>

				<p>The hipster will interact with the site based on the scenarios above. The flowchart below visually depicts the steps they will take while using the site.</p>

				<img  id="diagram-use-case" src="img/data-design-craigslist-events-use-case.svg" alt="Flow chart for use case" >

			</section>

			<!-- Section 3: User Interaction Flow -->
			<section>

				<h2>User Interaction Flow (aka Navigation Diagram)</h2>

				<p>The hipster will interact with the site based on the scenarios above. The flowchart below visually depicts the steps they will take while using the site.</p>

				<img id="diagram-interaction-flow" src="img/data-design-craigslist-events-user-interaction-flow.svg" alt="Flow chart for use case" >

			</section>

			<!-- Section 4: Entities -->
			<section>

				<h2>Entity</h2>

				<h3>Event</h3>
				<ul>
					<li>Date</li>
					<li>Time</li>
					<li>Venue</li>
					<li>Food Details</li>
					<li>Entertainment</li>
					<li>Special Guests</li>
					<li>Schedule</li>
				</ul>

			</section>

		</main>

	</body>
</html>