<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>*, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {

  font-size: 12px;
}

body, button, input {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
}

.background {
  display: flex;
  min-height: 100vh;
}

.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  
  border-radius: 15px;
}

.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #4d4d4f;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-left {
  margin-right: auto;
}

.screen-header-button {
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-right: 3px;
  border-radius: 8px;
  background: white;
}

.screen-header-button.close {
  background: #ed1c6f;
}

.screen-header-button.maximize {
  background: #e8e925;
}

.screen-header-button.minimize {
  background: #74c54f;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: #999;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: #f08704;
  font-size: 26px;
}

.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: #f08704;
}

.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}

.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  border: none;
  color: #f08704;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #b9134f;
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}

@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}
</style>
</head>

<body>
    <?php include 'header.php' ?>
    <?php include ('sendemail.php'); ?>
     <?php echo $alert; ?>
    <div class="background">
  <div class="container" data-aos="zoom-in" data-aos-duration="2000">
    <div class="screen">
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div><br><br>
          <div class="app-contact" style="font-size:14px;">CONTACT : <br> <a style="" href="tel:9898571874">+91 9898571874</a></div>
            <br>   <div class="app-contact" style="font-size:16px">Mail : <br> <a href="mailto:vishalsathwara999@gmail.com">vishalsathwara999@gmail.com</a></div>
        </div>
       
        <div class="screen-body-item">
          <div class="app-form">
            <form action="contact.php" method="post" onsubmit="return validation()">
            <div class="app-form-group">
              <input class="app-form-control" type="text" placeholder="NAME" id="namevalue" required autocomplete="off" name="Name">
                <span id="nameerror" style="color:red;"></span>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="text" placeholder="EMAIL" id="mailvalue" required autocomplete="off" name="Email">
                <span id="emailerror" style="color:red;"></span>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="number" placeholder="CONTACT NO" id="phonevalue" required autocomplete="off" name="Number" onKeyPress="if(this.value.length==10) return false;">
                <span id="phoneerror" style="color:red;"></span>
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="MESSAGE"  name="Message">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <button class="app-form-button" name="Submit" value="send" type="Submit">SEND</button>
            </div>
                 </form>
          </div>
        </div>
     
          <script>
            function validation()
            {
                var namevalue = document.getElementById('namevalue').value;
                var phonevalue = document.getElementById('phonevalue').value;
                var mailvalue = document.getElementById('mailvalue').value;
                
                var namecheck = /^[A-Za-z. ]{3,50}$/;
                var phonecheck = /^[0-9]{10}$/;
                var mailcheck = /^[A-Za-z._0-9]{4,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,8}$/;
    
                if(namecheck.test(namevalue))
                {
                            document.getElementById('nameerror').innerHTML=""; 
                }
                else
                {
                     document.getElementById('nameerror').innerHTML="**Name is Invalid";
                     return false;
                }
                
                if(phonecheck.test(phonevalue))
                {
                            document.getElementById('phoneerror').innerHTML=""; 
                }
                else
                {
                     document.getElementById('phoneerror').innerHTML="**Phone Number is Invalid";
                    alert('Phone Number is invalid');
                    return false;
                }
            
                if(mailcheck.test(mailvalue))
                {
                            document.getElementById('emailerror').innerHTML=""; 
                }
                else
                {
                     document.getElementById('emailerror').innerHTML="**Email is Invalid";
                    alert('email is invalid');
                    return false;
                }
                
            }
                
            </script>

      <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
      </div>
    </div>
   
  </div>
</div>
    
<?php include'footer.php'; ?>
</body>
</html>
