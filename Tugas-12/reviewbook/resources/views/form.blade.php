<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form HTML</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <a href="/">Kembali</a>
    <form action="/welcome" method="POST">
      @csrf
      <label for="">First Name</label><br />
      <input type="text" name="firstname" /><br />
      <label for="">Last name:</label><br />
      <input type="text" name="lastname" /><br /><br />
      <label for="">Gender</label><br />
      <input type="radio" />Male<br />
      <input type="radio" />Female<br />
      <input type="radio" />Other<br /><br />
      <label for="">Nationality</label><b></b>
      <select name="Indonesian">
        <option value="indonesian">Indonesian</option>
        <option value="singaporean">Singaporean</option>
        <option value="malaysian">Malaysian</option></select
      ><br /><br />
      <label for="">Language Spoken:</label><br />
      <input type="checkbox" name="langspoken" />Bahasa Indonesia <br />
      <input type="checkbox" name="langspoken" />English <br />
      <input type="checkbox" name="langspoken" />Other <br /><br />
      <label for="">Bio:</label> <br />
      <textarea name="bio" rows="10" cols="30"></textarea><br /><br />
      <input type="submit" value="Sign up" />
    </form>
  </body>
</html>
