const firebaseConfig = {
    apiKey: "AIzaSyD9A2fqG-vYP2l_9ZUe05yj-PsVn9hkRLA",
    authDomain: "travelformsreview.firebaseapp.com",
    databaseURL: "https://travelformsreview-default-rtdb.firebaseio.com",
    projectId: "travelformsreview",
    storageBucket: "travelformsreview.appspot.com",
    messagingSenderId: "964216249592",
    appId: "1:964216249592:web:f890be71f9e8cf499eef0d"
  };
  
  // initialize firebase
  firebase.initializeApp(firebaseConfig);
  
  // reference your database
  var contactFormDB = firebase.database().ref("contactForm");
  
  document.getElementById("contactForm").addEventListener("submit", submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
    var name = getElementVal("name");
    var emailid = getElementVal("emailid");
    var msgContent = getElementVal("msgContent");
  
    saveMessages(name, emailid, msgContent);
  
    //   enable alert
    document.querySelector(".alert").style.display = "block";
  
    //   remove the alert
    setTimeout(() => {
      document.querySelector(".alert").style.display = "none";
    }, 3000);
  
    //   reset the form
    document.getElementById("contactForm").reset();
  }
  
  const saveMessages = (name, emailid, msgContent) => {
    var newContactForm = contactFormDB.push();
  
    newContactForm.set({
      name: name,
      emailid: emailid,
      msgContent: msgContent,
    });
  };
  
  const getElementVal = (id) => {
    return document.getElementById(id).value;
  };