<?php
  $form = '<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 " />
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z" />
				<path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z" />
			</symbol>
			<symbol id="icon-cross" viewBox="0 0 10.2 10.2">
				<title>cross</title>
				<path d="M5.8,5.1l4.4,4.4l-0.7,0.7L5.1,5.8l-4.4,4.4L0,9.5l4.4-4.4L0,0.7L0.7,0l4.4,4.4L9.5,0l0.7,0.7L5.8,5.1z"/>
			</symbol>
		</svg>
			<section class="form">
				<button class="btn btn--close"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
				<form class="form__inner flexy flexy--center" action="">
					<h3 class="form__section form__section--title">Don\'t know ? Contact Us!</h3>
          <div class="form__section">
						<label class="form__label">Full Name</label>
						<input class="form__input" type="text" name="name">
					</div>
					<div class="form__section">
						<label class="form__label">Email</label>
						<input class="form__input" type="text" name="name">
					</div>
					<div class="form__section">
						<label class="form__label">Content</label>
            <textarea class="form__input" cols="4" rows="4"></textarea>
					</div>
					<div class="form__section form__section--right">
						<span class="form__close"><svg class="icon icon--cross icon--inline"><use xlink:href="#icon-cross"></use></svg>Close this</span>
						<button class="btn btn--default">Contact Us</button>
					</div>
				</form>
			</section>
			<!-- Related demos -->
		<script src="assets/js/contacts/anime.min.js"></script>
		<script src="assets/js/contacts/main.js"></script>
		<script>
		(function() {
			var formEl = document.querySelector("section.form"),
				revealer = new RevealFx(formEl),
				closeCtrl = formEl.querySelector(".form__close");

			document.querySelector(".btn--form-open").addEventListener("click", function() {
				revealer.reveal({
					bgcolor: "#8f40f1",
					direction: "bt",
					duration: 600,
					onCover: function(contentEl, revealerEl) {
						formEl.classList.add("form--open");
						contentEl.style.opacity = 1;
					},
					onComplete: function() {
						closeCtrl.addEventListener("click", closeForm);
					}
				});
			});

			function closeForm() {
				closeCtrl.removeEventListener("click", closeForm);
				formEl.classList.remove("form--open");
				revealer.reveal({
					bgcolor: "#8f40f1",
					direction: "tb",
					duration: 600, 
					onCover: function(contentEl, revealerEl) {
						formEl.classList.remove("form--open");
						contentEl.style.opacity = 0;
					}
				});
			}

			formEl.addEventListener("submit", function(ev) {ev.preventDefault();});
		})();
		</script>'
?>