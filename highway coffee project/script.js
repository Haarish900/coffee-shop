    // hamburger
    document.getElementById('hamburger').addEventListener('click', function() {
    var navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
});


    //   payment  page
    document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Get form values
    const username = document.getElementById('username').value;
    const phone = document.getElementById('phone-no').value;
    const address = document.getElementById('address').value;
    const name = document.getElementById('card-name').value;
    const cardNumber = document.getElementById('card-number').value;
    const expiryDate = document.getElementById('expiry-date').value;
    const cvv = document.getElementById('cvv').value;

    // Simple validation
    if (!username || !phone || !address || !name || !cardNumber || !expiryDate || !cvv) {
        showResponseMessage('Please fill in all fields.');
        return;
    }
    if (phone.length < 10){
        showResponseMessage('phone number must be at least 10 digits.');
        return;
    }
    
    if (cardNumber.length < 16) {
        showResponseMessage('Card number must be at least 16 digits.');
        return;
    }

    if (cvv.length < 3) {
        showResponseMessage('CVV must be at least 3 digits.');
        return;
    }

    // Simulate form submission
    setTimeout(() => {
        showResponseMessage('Payment processed successfully!');
    }, 1000);
});

function showResponseMessage(message) {
    const responseMessage = document.getElementById('response-message');
    responseMessage.textContent = message;
    responseMessage.style.color = message.includes('successfully') ? 'green' : 'red';
}



        //  register page
//   document.getElementById('login-form').addEventListener('submit', function(event) {
//   event.preventDefault();
  
//   // Get form values
//   const username = document.getElementById('username').value;
//   const email = document.getElementById('email').value;
//   const password = document.getElementById('password').value;
//   const confirmPassword = document.getElementById('confirm-password').value;
  
//   // Simple validation
//   if (!username || !email || !password || !confirmPassword) {
//       showResponseMessage('Please fill in all fields.');
//       return;
//   }
//   if (password.length < 8) {
//       showResponseMessage('password must be at least 8 digits.');
//       return;
//   }

  
//   if (password !== confirmPassword) {
//       showResponseMessage('Passwords do not match.');
//       return;
//   }

//   // Simulate successful login
//   setTimeout(() => {
//       showResponseMessage('Login successful!');
//   }, 1000);
// });

// function showResponseMessage(message) {
//   const responseMessage = document.getElementById('response-message');
//   responseMessage.textContent = message;
//   responseMessage.style.color = message.includes('successful') ? 'green' : 'red';
// }
        // register page 
document.getElementById('login-link').onclick = function() {
    document.getElementById('login').style.display = 'block';
};

document.querySelector('.close').onclick = function() {
    document.getElementById('login').style.display = 'none';
};

window.onclick = function(event) {
    if (event.target == document.getElementById('login')) {
        document.getElementById('login').style.display = 'none';
    }
};
        //   get the username,email,password,confirmpassword 
document.getElementById('login-form').onsubmit = function(e) {
    e.preventDefault(); // Prevent form submission
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Basic validation
    if (password !== confirmPassword) {
        document.getElementById('message').innerText = 'Passwords do not match.';
        return;
    }

    if (username && email && password) {
        document.getElementById('message').innerText = 'Login successful!';
    } else {
        document.getElementById('message').innerText = 'Please fill all fields.';
    }
};

