document.addEventListener('DOMContentLoaded', function() {
    const surveyForm = document.getElementById('surveyForm');
    surveyForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(surveyForm);
        const formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });
        console.log('Survey data:', formObject);
        alert('Survey submitted! Thank you for your feedback.');
        surveyForm.reset();
    });
});
