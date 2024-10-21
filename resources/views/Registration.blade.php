<!DOCTYPE html>
<html>

<head>
  <title>Student Registration Form </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css">
  <style>
    body {
      font-family: arial;
      transition: all 0.5s ease;
      -webkit-transition: all 0.5s ease;
    }

    .container {
      padding: 40px;
      width: 80%px;
      margin: 80px auto;
      background-color: #f1f1f1;
    }

    .container h2 {
      text-align: center;
    }

    fieldset {
      border: 1px solid #d4d4d4;
      padding: 20px 10px;
      margin-bottom: 20px;
      border-radius: 8px;
    }

    .input-field {
      display: flex;
      margin-bottom: 15px;
    }

    label {
      margin-right: 25px;
      margin-top: 5px;
      width: 30%;
      text-align: right;
      font-weight: bold;
    }

    .icon {
      background: #fcfcfa;
      color: black;
      min-width: 40px;
      border: 2px solid #e2e2e2;
      border-right: none;
      text-align: center;
      padding: 7px;
    }

    .inputs {
      padding: 3px 5px;
      border: 2px solid #e2e2e2;
      width: 35%;
    }

    input [type="radio"] {
      margin-right: 8px;
    }

    .textarea {
      padding: 8px;
      border: 2px solid #e2e2e2;
    }

    .textarea-icon {
      padding-top: 14px;
    }

    .button {
      text-align: center;
    }

    .submit {
      color: white;
      background: #ee9a25;
      padding: 9px 25px;
      margin-right: 10px;
      border: none;
      border-radius: 5px;
      box-shadow: 0 0 5px #c9c9c9;
    }

    .submit:hover {
      background: #d1871e;
    }

    .reset {
      color: white;
      background: #c93232;
      padding: 9px 25px;
      border: none;
      border-radius: 5px;
      box-shadow: 0 0 5px #c9c9c9;
    }

    .reset:hover {
      background: #a32727;
    }

    .city {
      margin-left: -6px;
    }

    .gender {
      margin-left: -30px;
    }

    .courses {
      margin-left: -26px;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    .message {
      margin-left: -30px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Student Registration Form</h2>
    <form action="{{url('upload')}}" method="post"enctype="multipart/form-data">
      @csrf
      <fieldset>
        <div class="input-field">
          <label>Name</label>
          <i class="fa fa-user icon"></i>
          <input type="text" class="inputs" name="name">
        </div>
        <div class="input-field">
        <label class="class">Class</label>
          <i class="fa fa-list icon"></i>
          <select name="class" id="" class="inputs">
            <option value="0">Select Class</option>
            <option value="1"> l</option>
            <option value="2"> ll</option>
            <option value="3"> lll</option>
            <option value="4"> lV</option>
            <option value="5"> V</option>
          </select>
        </div>
        <div class="input-field">
        <label class="section">Section</label>
          <i class="fa fa-list icon"></i>
          <select name="section" id="" class="inputs">
            <option value="0">Select Section</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select>
        </div>
        <div class="input-field">
          <label>Roll</label>
          <i class="fa-solid fa-address-book icon textarea-icon"></i>
          <input type="int" class="inputs"name="roll">
        </div>
        <div class="input-field">
          <label class="gender">Gender</label>
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="female"> Female
        </div>
        <div class="input-field">
          <label>Upload Photo</label>
          <i class="fa fa-upload icon"></i>
          <input type="file" class="inputs"name="photo">
        </div>
        <div class="input-field">
          <label>Password</label>
          <i class="fa fa-eye-slash icon"></i>
          <input type="password" class="inputs"name="password">
        </div>
        <div class="input-field">
          <label>Confirm Password</label>
          <i class="fa fa-eye-slash icon"></i>
          <input type="password" class="inputs" name="confirmpassword">
        </div>
      </fieldset>

      <fieldset>
      <div class="input-field">
          <label>Town</label>
          <i class="fa-solid fa-address-book icon textarea-icon"></i>
          <input type="text" class="inputs" name="town">
        </div>
        
        <div class="input-field">
          <label class="city">District</label>
          <i class="fa fa-list icon"></i>
          <select name="city" id="" class="inputs">
            <option value="0">Select District</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Howrah">Howrah</option>
            <option value="Hoogly">Hoogly</option>
            <option value="Nadia">Nadia</option>
            <option value="Norh24Prgs">Norh24Prgs</option>
          </select>
        </div>
        <div class="input-field">
          <label>Zip code</label>
          <i class="fa fa-home icon"></i>
          <input type="number" class="inputs"name="zip">
        </div>
        <div class="input-field">
          <label>Phone No</label>
          <i class="fa fa-phone icon"></i>
          <input type="number" class="inputs"name="phone">
        </div>
        
      </fieldset>
      <fieldset>
        
      <div class="input-field">
          <label>Father's name</label>
          <i class="fa-solid fa-people-roof icon"></i>
          <input type="text" class="inputs" name="fathername">
        </div>
        <div class="input-field">
          <label>Mother's name</label>
          <i class="fa-solid fa-people-roof icon"></i>
          <input type="text" class="inputs" name="mothername">
        </div>

        <div class="input-field">
          <label>Father's Phone No</label>
          <i class="fa fa-phone icon"></i>
          <input type="number" class="inputs" name="fatherphone">
        </div>
        <div class="input-field">
          <label>Mother's Phone No</label>
          <i class="fa fa-phone icon"></i>
          <input type="number" class="inputs" name="motherphone">
        </div>

      </fieldset>

      <div class="button">
        <button type="submit" class="submit">Submit</button>
        <button type="reset" class="reset">Reset</button>
        Already user? <a href="/"> Login</a></form>
      </div>
    </form>
  </div>
</body>

</html>


