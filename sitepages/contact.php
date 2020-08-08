<?php declare(strict_types=1);

?>

<form action="#" id="contact">
	
	<div class="tac p42">

		<fieldset class="tal dib bge">
			<h1>Contact Us</h1>
			<label>
				Your Name:<br>
				<input type="text" name="name" required>
				<br>
			</label><label>

				E-Mail Address:<br>
				<input type="email" name="email" required>
				<br>
			</label><label>

				Subject:<br>
				<input type="text" name="subject" required>
				<br>
			</label><label>

				Message:<br>
				<textarea name="message" rows="6" required></textarea>
				<br>
			</label>

			<p class="submitsAndHiddens">
				<button class="XXXflr"> Send Message </button>
				<input type="hidden" name="contact_hash" value="', (
					session_hash('contact_hash')
				), '">
			</p><!-- .submitsAndHiddens -->

		</fieldset>
	</div>

</form><!-- #contact.modal -->
