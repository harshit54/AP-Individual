var fname = "";
var lname = "";
var age;
var phone;
var pin;
var email="";
var epic="";

function refill() {
    if(fname != "")
    {
        var form = document.getElementById("form");
        form.fname.value = fname;
        form.lname.value = lname;
        form.age.value = age;
        form.phone.value = phone;
        form.pin.value = pin;
        form.email.value = email;
        form.epic.value = epic;
    }
}

function verify() {
    var form = document.getElementById("form");
    if(form.fname.value=="")
    {
        alert('First Name Is Mandatory');
    }
    else if(form.lname.value=="")
    {
        alert('Last Name Is Mandatory');
    }
    else if(form.age.value.toString() == "")
    {
        alert('Age Is Mandatory')
    }
    else if(form.age.value < 18)
    {
        alert('You are not eligible to vote!');
    }
    else if(form.phone.value.toString() == "")
    {
        alert('Phone Number Is Mandatory');
    }
    else if(form.phone.value.toString().length != 10)
    {
        alert('Not A Valid Phone Number. Length should be 10');
    }
    else if(form.pin.value.toString() == "")
    {
        alert('Pincode Is Mandatory');
    }
    else if(form.pin.value.toString().length != 6)
    {
        alert('Not A Valid Pincode. Length should be 6');
    }
    else if(form.epic.value == "")
    {
        alert('Please Enter A Valid EPIC Number');
    }
    else if(form.epic.value.length != 10)
    {
        alert('Not A Valid EPIC Number. Length should be 10');
    }
    else
    {
        fname = form.fname.value;
        lname = form.lname.value;
        age = form.age.value;
        phone = form.phone.value;
        pin = form.pin.value;
        email = form.email.value;
        epic = form.epic.value;
        alert('Echo');
        form.submit();
    }
}