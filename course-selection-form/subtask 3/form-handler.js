const courseForm = document.getElementById('registration');
const message = document.getElementById('form-message');

courseForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(courseForm);

    fetch('./form-handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(result => {
        const courseName = result.courseName;
        const lecturer = result.lecturer;
        const group = result.group;
        const credits = result.credits;
        const description = result.description;
        const messageText = result.message;

        message.innerHTML = `<span class="color-message">${messageText}</span><br/><br/><b>Записан курс:</b> ${courseName}<br/><b>Лектор:</b> ${lecturer}<br/><b>Група:</b> ${group}<br/><b>Кредити:</b> ${credits}<br/><b>Описание:</b> ${description}`;
        message.style.display = 'block';
    });
});
