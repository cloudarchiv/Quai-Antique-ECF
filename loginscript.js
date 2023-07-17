document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    // Retrieve the entered email and password
    var email = document.getElementById("emailInput").value;
    var password = document.getElementById("passwordInput").value;
    
    // Perform your login logic here (e.g., send data to server for authentication)
    
    // Reset the form
    document.getElementById("loginForm").reset();
  });
  