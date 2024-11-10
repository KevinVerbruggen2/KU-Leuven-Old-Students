document.addEventListener('DOMContentLoaded', function () {
    const studentRows = document.querySelectorAll('.student-row');

    studentRows.forEach(row => {
        row.addEventListener('click', function () {
            const studentId = row.getAttribute('data-student-id');

            const detailsRow = document.getElementById('details-' + studentId);

            if (detailsRow.style.display === 'none') {
                detailsRow.style.display = 'table-row';
            } else {
                detailsRow.style.display = 'none';
            }
        });
    });
});
