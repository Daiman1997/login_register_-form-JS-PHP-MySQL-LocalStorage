/*--------------------------Validation form---------------------------------*/

document.addEventListener('DOMContentLoaded', function() {
	const form = document.getElementById('form_reg');
	form.addEventListener('submit', formSend);

	async function formSend(e) {
		let error = formValidate(form);
		const comment = document.querySelector('.item__button-register');

		if (error === 0) {
			comment.classList.remove('comment');
		} else {
			e.preventDefault();
			comment.classList.add('comment');
		}
	}

	function formValidate(form) {
		let error = 0;
		let formRequire = document.querySelectorAll('.require');

		for (let index = 0; index < formRequire.length; index++) {
			const input = formRequire[index];
			formRemoveError(input);

			if (input.classList.contains('email')) {
				if (emailTest(input)) {
					formAddError(input);
					error++;
				}
			} else {
				if (input.value === '') {
					formAddError(input);
					error++;
				}
			}
		}
		return error;
	}
	function formAddError(input) {
		input.classList.add('warning');
		input.classList.remove('check');
	}
	function formRemoveError(input) {
		input.classList.remove('warning');
		input.classList.add('check');
	}
	function emailTest(input) {
		return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
	}

/*--------------------------Checkbox---------------------------------*/
	let login = document.querySelector('.item__button-login');
	let checkbox = document.querySelector('.checkbox');
	let userName = document.querySelector('.userName');
	let password = document.querySelector('.password');

	login.onclick = function () {
		if (checkbox.checked) {
			localStorage.setItem('userName', userName.value);
			console.log(localStorage.getItem('userName'));
			localStorage.setItem('password', password.value);
			console.log(localStorage.getItem('password'));
		} else {
		   	localStorage.clear();
		};
	};
	userName.value = localStorage.getItem('userName');
	password.value = localStorage.getItem('password');
/*--------------------------Checkbox---------------------------------*/
});