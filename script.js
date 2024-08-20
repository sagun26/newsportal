
// Show dynamic greeting message based on time of day

function showGreeting() {
    const now = new Date();
    const hours = now.getHours();
    let greeting;
    if (hours < 12) {
        greeting = "Good Morning!";
    } else if (hours < 18) {
        greeting = "Good Afternoon!";
    } else {
        greeting = "Good Evening!";
    }
    
    // Display current day, date, month, and time
    const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
    const dateString = now.toLocaleDateString(undefined, dateOptions);
    const dateElement = document.createElement('p');
    dateElement.textContent = ` ${dateString}`;
    document.querySelector('.childdiv1').prepend(dateElement);
    
    const greetingElement = document.createElement('h2');
    greetingElement.textContent = greeting;
    document.querySelector('.childdiv1').prepend(greetingElement);
}

showGreeting();

// Interactive advertisement section
document.getElementById('advertisement').addEventListener('click', () => {
    const adElement = document.getElementById('advertisement');
    adElement.style.backgroundColor = adElement.style.backgroundColor === 'cornsilk' ? 'lightblue' : 'cornsilk';
});





