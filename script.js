function signup() {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    console.log('Sign Up Information:');
    console.log('Username:', username);
    console.log('Email:', email);
    console.log('Password:', password);

    var xhr = new XMLHttpRequest(); 

    var data = {
        username: username,
        email: email,
        password: password
    };

    xhr.open("POST", "adduser.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log('Response from server:', xhr.responseText);
        }
    };

    xhr.send(JSON.stringify(data));
}


function login() {
    const loginUsername = document.getElementById('loginUsername').value;
    const loginPassword = document.getElementById('loginPassword').value;

    console.log('Login Information:');
    console.log('Username:', loginUsername);
    console.log('Password:', loginPassword);

    var xhr = new XMLHttpRequest();


    var formData = new FormData();
    formData.append('loginUsername', loginUsername);
    formData.append('loginPassword', loginPassword);


    xhr.open("POST", "signin.php", true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                console.log('Response from server:', response);
    
                localStorage.setItem('userid', xhr.responseText);
                console.log('Login successful!');
    
                // Check if this log is printed
                console.log('Redirecting to index.php...');
                window.location.href = "index.php";
            } else {
                console.log("Not present");
            }
        }
    };
    

    // Send the FormData object
    xhr.send(formData);
}

