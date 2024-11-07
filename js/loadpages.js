// script.js

function loadPage(page) {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    
    // Define the request
    xhr.open('GET', page + '.php', true);
    
    // Set up the callback function to handle the response
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Insert the response text into the content area
            document.getElementById('content-area').innerHTML = xhr.responseText;
        }
    };
    
    // Send the request
    xhr.send();
}
