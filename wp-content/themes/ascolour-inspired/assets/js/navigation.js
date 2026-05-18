(function () {
	const toggle = document.querySelector('[data-menu-toggle]');
	const menu = document.querySelector('[data-menu]');
	const actions = document.querySelector('.header-actions');

	if (!toggle || !menu) {
		return;
	}

	toggle.addEventListener('click', function () {
		const isOpen = toggle.getAttribute('aria-expanded') === 'true';
		toggle.setAttribute('aria-expanded', String(!isOpen));
		menu.classList.toggle('is-open', !isOpen);

		if (actions) {
			actions.classList.toggle('is-open', !isOpen);
		}
	});
}());
