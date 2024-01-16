function sendMail() {
    var params = {
      name: document.getElementById("Username").value,
      email: document.getElementById("Useremail").value,
      message: document.getElementById("Usermessage").value,
    };
  
    const serviceID = "service_xdg8aen";
    const templateID = "template_en84m1m";
  
      emailjs.send(serviceID, templateID, params)
      .then(res=>{
          document.getElementById("Username").value = "";
          document.getElementById("Useremail").value = "";
          document.getElementById("Usermessage").value = "";
          console.log(res);
          alert("Your message sent successfully!!")
  
      })
      .catch(err=>console.log(err));
  
  }