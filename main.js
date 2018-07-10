// Initialize Firebase
var config = {
    apiKey: "AIzaSyAC7ncAaI-5cMnrF3pUIFuwx_GOyAxEWcs",
    authDomain: "registration-form-58868.firebaseapp.com",
    databaseURL: "https://registration-form-58868.firebaseio.com",
    projectId: "registration-form-58868",
    storageBucket: "registration-form-58868.appspot.com",
    messagingSenderId: "298556756465"
  };
  firebase.initializeApp(config);

var messagesRef = firebase.database().ref('messeges');

document.getElementById('regfrm').addEventListener('submit', submitForm);

//submit form
function submitForm(e)
{
    e.preventDefault();
    
    //Get values
    var email = getinputVal('email');
    var name = getinputVal('name');
    var pwd = getinputVal('pwd');
    //var gender = getinputVal('gender');
    //var image = getinputVal('image')
    

    //save messge
    saveMessage(email,name,pwd);

    //show alert
    document.querySelector('.alert').style.display = 'block';

    //Hide alet after 3 seconds
     setTimeout(() => {
        document.querySelector('.alert').style.display = 'none';
     }, 3000);
    
     document.getElementById('regfrm').reset();
}



// function to get the form values
function getinputVal(id){
    return document.getElementById(id).value;
}

//saave the messege to firebase
function saveMessage(email, name, pwd, gender, image){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        email: email,
        name: name,
        pwd: pwd,
        //gender: gender,
        //image: image  
    });
}