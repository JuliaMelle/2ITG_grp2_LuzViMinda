function validateForm() {
    let password = document.getElementById("password").value;
    let maxLength = 12;

    // Checks if input is not a number. If true, alert executes.
    if(isNaN(password) || password.length <= 1 || password.length > maxLength || password.length < 8)
    {
        alert("Invalid Password, Input Must be more than 8");
    }
    


    let fName = document.getElementById("first_name").value;
    let lName = document.getElementById("last_name").value;
    let email = document.getElementById("email").value;
    let business = document.getElementById("business_name").value;
    let phone = document.getElementById("phone_number").value;

    // if(isNaN(phone) || phone.length == 11)
    // {
    //     alert("Your Phone Number input is correct.");
    // }
    if (phone.length > 11 || phone.length <11){
        alert("Invalid Phone Number Input Must be 11 digits");
    }
    
    let address = document.getElementById("address").value;
    
    // Checks if input contains a special character. If true, alert executes.
    if(fName.match(format) || lName.match(format) || email.match(format) || business.match(format) ||
    phone.match(format) || address.match(format))
    {
        alert("Invalid Input");
    }

}
