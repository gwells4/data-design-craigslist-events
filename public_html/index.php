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
			<h1><u>Data Design: Craigslist Events</u></h1>
		</header>

		<!-- This is the main page content. -->
		<main>

			<!-- Section 1: Persona -->
			<section>

				<h2>Persona</h2>

				<img src="img/male-hipster.jpg" alt="Picture of Male Hipster for Persona">
				<img src="img/female-hipster-annotated.jpg" alt="Picture of Female Hipster for Persona">

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
				<p>How, when, and where does a persona interact with your product? What are your users or persona’s goals? What steps must they take to complete their goal? This process can be mapped out in a flow chart or diagram.</p>

				<img src="img/use-case-flowchart.png" alt="Flow chart for use case" width="40%" height="40%">

			</section>

			<!-- Section 3: Entities -->
			<section>
				<h2>Entities</h2>

				<ol>
					<li>
						<b>Search Box</b><br>
						A search box to allow the user to search for events.
					</li>
					<li>
						<b>List of Events</b><br>
						A list of events based on the criteria searched (or selected) by the user.
					</li>
					<li>
						<b>Calendar</b><br>
						The calendar lets the user click on a day and brings up a list of events scheduled for that day.
					</li>
					<li>
						<b>Event Category Checkboxes</b><br>
						<p>Some examples are:</p>
						<ul>
							<li>Art</li>
							<li>Film</li>
							<li>Career</li>
							<li>Charitable</li>
							<li>Competitive</li>
							<li>Dance</li>
							<li>Festival</li>
							<li>Fitness & Health</li>
							<li>Food & Drink</li>
							<li>Free</li>
							<li>Kid Friendly</li>
							<li>Literary</li>
							<li>Music</li>
							<li>Outdoor</li>
							<li>Sale or Promotional</li>
							<li>Singles</li>
							<li>Technology</li>
						</ul>
					</li>
				</ol>

			</section>

		</main>

	</body>
</html>