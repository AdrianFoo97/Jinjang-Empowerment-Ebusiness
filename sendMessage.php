<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>JinJang E-Business</title>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/message.css">

  <style>
    body {
      margin-left: 0;
    }
  </style>

</head>

<body>
  <div id="container"></div>
  <script id="template">
    <div class="flip-card" on-click="toggle('flipCard')">{{ flipCard ? 'Reset' : 'Animate' }}</div>
    <div class="contact-wrapper">
        <div class="envelope {{ flipCard ? 'active' : '' }}">
          <div class="back paper"></div>
          <div class="content">
            <div class="form-wrapper">
              <form action="sendMessage2.php" method="post" id="my_form"
              onsubmit="return formSubmit(this);">
                <div class="top-wrapper">
                  <div class="input">
                    <label>Receiver</label>
                    <?php
                      if (isset($_POST['senderName'])) {
                        echo "
                          <input type='text' name='receiverName' value='" .
                          $_POST['senderName']
                          . "'/>
                        ";
                      }
                      else {
                        echo "<input type='text' name='receiverName'/>";
                      }
                    ?>
                  </div><br />
                  <div class="input">
                    <label>Subject</label>
                    <?php
                      if (isset($_POST['subject'])) {
                        echo "
                          <input type='text' name='receiverName' value='RE: " .
                          $_POST['subject']
                          . "'/>
                        ";
                      }
                      else {
                        echo "<input type='text' name='receiverName'/>";
                      }
                    ?>
                  </div><br />
                </div>
                <div class="bottom-wrapper">
                  <div class="input">
                    <label>Message</label>
                    <textarea rows="10" name="content"></textarea>
                  </div>
                  <div class="submit">
                    <button class="submit-card" on-click="toggle('flipCard')" type="submit">Send Mail</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="front paper"></div>
        </div>
      </div>

  </script>
  <script src='https://cdn.jsdelivr.net/npm/ractive'></script>
  <script  src="js/index.js"></script>
  <script>
  function formSubmit(form) {
    setTimeout(function() {
        form.submit();
    }, 1700);  // 3 seconds
    setTimeout(function() {
        window.close();;
    }, 1800);
    return false;
  }
  </script>

</body>

</html>
