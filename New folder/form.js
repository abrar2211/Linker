
  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyAYdRXsA4PZl5zEt4jEIkw_ZzYlAEA3UaY",
    authDomain: "linker-b4d39.firebaseapp.com",
    projectId: "linker-b4d39",
    storageBucket: "linker-b4d39.appspot.com",
    messagingSenderId: "727805881473",
    appId: "1:727805881473:web:a8e8599494d35e67c6f180"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  const auth = firebase.auth();

  function signup(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    const promise = auth.createUserWithEmailAndPassword(email.value, password.value);
    promise.catch(e=>alert(e.message));
    alert("Signed up");
  }

  function signin(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    const promise = auth.signInWithEmailAndPassword(email.value, password.value);
    promise.catch(e=>alert(e.message));
    
    // take user to a different page
  }

  function signout(){
    auth.signOut();
    alert("signed out");
  }

  auth.onAuthStateChanged(function(user){

    if(user){
      var email = user.email;
      alert("Active user " + email);

      //is signed in
    }else{
      //no user is signed in
      alert("No active user");
    }

  });

  
