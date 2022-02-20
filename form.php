<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="thanks.php" method="post">
    <div>
      <label for="lname">Nom :</label>
      <input type="text" id="lname" name="user_lname">
    </div>
    <div>
      <label for="fname">Prénom :</label>
      <input type="text" id="fname" name="user_fname">
    </div>
    <div>
      <label for="email">e-mail :</label>
      <input type="email" id="email" name="user_email">
    </div>
    <div>
      <label for="phone">Téléphone :</label>
      <input type="tel" id="phone" name="user_phone"
      pattern="[0-9]{10}">
    </div>
    <div>
      <label for="topic">Sujet:</label>
      <select id="topic" name="topic">
        <option value="sujet1">sujet1</option>
        <option value="sujet2">sujet2</option>
        <option value="sujet3">sujet3</option>
        <option value="sujet4">sujet4</option>
      </select>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>

</html>