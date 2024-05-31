// handle form submission

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('meeting-form');
    const calendar = document.getElementById('calendar');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const date = document.getElementById('meeting-date').value;
        const time = document.getElementById('meeting-time').value;

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'scheduleMeeting.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                alert(`Meeting scheduled on ${response.date} at ${response.time}`);
                loadCalendar();
            }
        };
        xhr.send(`date=${date}&time=${time}`);
    });

    function loadCalendar() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'scheduleMeeting.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const meetings = JSON.parse(xhr.responseText);
                displayCalendar(meetings);
            }
        };
        xhr.send();
    }

    function displayCalendar(meetings) {
        calendar.innerHTML = '';
        if (meetings.length === 0) {
            calendar.textContent = 'No meetings scheduled.';
            return;
        }

        meetings.forEach(meeting => {
            const div = document.createElement('div');
            div.textContent = `Date: ${meeting.date}, Time: ${meeting.time}`;
            calendar.appendChild(div);
        });
    }

    loadCalendar();
});