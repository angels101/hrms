// scripts.js
document.getElementById('add-interview').addEventListener('click', function() {
    const interviewsDiv = document.getElementById('interviews');
    
    const newInterviewDiv = document.createElement('div');
    newInterviewDiv.classList.add('interview');

    newInterviewDiv.innerHTML = `
        <label for="interview-date">Interview Date:</label>
        <input type="date" class="interview-date" name="interview-date" required>

        <label for="interview-time">Interview Time:</label>
        <input type="time" class="interview-time" name="interview-time" required>
    `;
    
    interviewsDiv.appendChild(newInterviewDiv);
});

document.getElementById('employee-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Get form values
    const name = document.getElementById('employee-name').value;
    const age = document.getElementById('employee-age').value;
    const jobApply = document.getElementById('job-apply').value;
    
    // Collect interviews
    const interviewDates = document.querySelectorAll('.interview-date');
    const interviewTimes = document.querySelectorAll('.interview-time');
    let interviews = '';

    for (let i = 0; i < interviewDates.length; i++) {
        interviews += `${interviewDates[i].value} at ${interviewTimes[i].value}<br>`;
    }
    
    // Create a new row in the table
    const table = document.getElementById('employee-table').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();
    
    // Insert cells
    const nameCell = newRow.insertCell(0);
    const ageCell = newRow.insertCell(1);
    const jobCell = newRow.insertCell(2);
    const interviewCell = newRow.insertCell(3);
    
    // Add values to cells
    nameCell.textContent = name;
    ageCell.textContent = age;
    jobCell.textContent = jobApply;
    interviewCell.innerHTML = interviews;
    
    // Clear form
    document.getElementById('employee-form').reset();
    document.getElementById('interviews').innerHTML = `
        <h3>Schedule Interviews</h3>
        <div class="interview">
            <label for="interview-date">Interview Date:</label>
            <input type="date" class="interview-date" name="interview-date" required>
            
            <label for="interview-time">Interview Time:</label>
            <input type="time" class="interview-time" name="interview-time" required>
        </div>
    `;
});



/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}