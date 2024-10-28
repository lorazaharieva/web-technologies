const registrationForm = document.getElementById('registration');
const courseName = document.getElementById('course-name').value;

registration.addEventListener('submit', (event) => {
    event.preventDefault();

    const courseName = document.getElementById('course-name').value;

    const t = document.createElement('t');
    t.innerText = `Записана избираема дисциплина: ${courseName}`;
    
    const container = document.getElementById('container');
    container.appendChild(t);
})
