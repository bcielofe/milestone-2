<a href="#" style="text-decoration: none">
  <h1 data-toggle="collapse" data-target="#report_card">
    REPORT CARD
  </h1>
</a>
<form method="POST" id="report_card" class="form-inline collapse">
  <div class="form-group">
    <label for="name">Student Name: </label>
    <select required class="form-control" id="student" name="student_name">
      <option></option>
      <?php
        include('connection.php');
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
          extract($row);
          echo "<option value='$id'>$name</option>";
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="class">Class Name:</label>
    <select required class="form-control" id="class" name="class_name">
      <option></option>
      <?php
        $sql = "SELECT * FROM classes";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
          extract($row);
          echo "<option value='$id'>$class_name</option>";
        }
      ?>
    </select>
  </div>
  <p>Rate the student with respect to the following criteria: <br> (1-lowest, 5-highest) </p>
  <div class="form-group">
    <label for="sound">Speaking Ability (Fluency/Coherence): </label>
    <input required type="number" class="form-control" id="sound" name="sound" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="word_stress">Speaking Ability (Grammatical Range and Accuracy): </label>
    <input required type="number" class="form-control" id="word_stress" name="word_stress" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="intonation">Speaking Ability (Pronunciation): </label>
    <input required type="number" class="form-control" id="intonation" name="intonation" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="nature">Speaking Ability (Lexical Resource): </label>
    <input required type="number" class="form-control" id="nature" name="nature" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="content_cmplt">Listening Ability (Understanding Colloquial Language): </label>
    <input required type="number" class="form-control" id="content_cmplt" name="content_cmplt" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="sentence_cmplt">Listening Ability (Understanding Formal Expressions): </label>
    <input required type="number" class="form-control" id="sentence_cmplt" name="sentence_cmplt" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="proper_rspns">Listening Ability (Recognizing Language-Related Features such as Intonation, Pitch and Tone): </label>
    <input required type="number" class="form-control" id="proper_rspns" name="proper_rspns" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="proper_rspns">Listening Ability (Understanding Vocabulary): </label>
    <input required type="number" class="form-control" id="proper_rspns" name="proper_rspns" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="nature">(Participation): </label>
    <input required type="number" class="form-control" id="nature" name="nature" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="content_cmplt">(Sincerity): </label>
    <input required type="number" class="form-control" id="content_cmplt" name="content_cmplt" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="sentence_cmplt">(Concentration): </label>
    <input required type="number" class="form-control" id="sentence_cmplt" name="sentence_cmplt" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="proper_rspns">(Comprehending the Class Material): </label>
    <input required type="number" class="form-control" id="proper_rspns" name="proper_rspns" min=1 max=5>
  </div>
  <br>
  <div class="form-group">
    <label for="proper_rspns">(Attendance): </label>
    <input required type="number" class="form-control" id="proper_rspns" name="proper_rspns" min=1 max=5>
  </div>
  <br>
  <button type="submit" class="btn btn-default" name="evaluation">Submit</button>
</form>