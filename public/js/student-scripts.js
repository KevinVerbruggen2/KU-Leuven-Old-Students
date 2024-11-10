document.addEventListener('DOMContentLoaded', function () {
    // Select all rows with the class 'student-row'
    const studentRows = document.querySelectorAll('.student-row');

    // Add click event listener to each student row
    studentRows.forEach(row => {
        row.addEventListener('click', function () {
            // Get the student ID from the data attribute
            const studentId = row.getAttribute('data-student-id');

            // Find the corresponding details row
            const detailsRow = document.getElementById('details-' + studentId);

            // Toggle the display of the details row
            if (detailsRow.style.display === 'none') {
                detailsRow.style.display = 'table-row';
            } else {
                detailsRow.style.display = 'none';
            }
        });
    });
});
