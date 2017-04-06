<a href="#" style="text-decoration: none">
  <h1 data-toggle="collapse" data-target="#speak_eval">
    SPEAKING TEST 
  </h1>
</a>
<form method="POST" id="speak_eval" class="form-inline collapse">
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
  <p>Rate the student with respect to the following criteria: </p>
  <div class="form-group">
    <label for="sound">Phonetics (Consonant & Vowel Sounds): [/15] </label>
    <input required type="number" class="form-control" id="sound" name="sound" min=0 max=15>
  </div>
  <br>
  <div class="form-group">
    <label for="word_stress">Phonetics (Word Stress): [/15] </label>
    <input required type="number" class="form-control" id="word_stress" name="word_stress" min=0 max=15>
  </div>
  <br>
  <div class="form-group">
    <label for="intonation">Fluency (Sentence Stress & Intonation): [/15] </label>
    <input required type="number" class="form-control" id="intonation" name="intonation" min=0 max=15>
  </div>
  <br>
  <div class="form-group">
    <label for="nature">Fluency (Naturalness): [/20] </label>
    <input required type="number" class="form-control" id="nature" name="nature" min=0 max=20>
  </div>
  <br>
  <div class="form-group">
    <label for="content_cmplt">Contents (Completeness of Content): [/10] </label>
    <input required type="number" class="form-control" id="content_cmplt" name="content_cmplt" min=0 max=10>
  </div>
  <br>
  <div class="form-group">
    <label for="sentence_cmplt">Contents (Sentence Completeness): [/10] </label>
    <input required type="number" class="form-control" id="sentence_cmplt" name="sentence_cmplt" min=0 max=10>
  </div>
  <br>
  <div class="form-group">
    <label for="proper_rspns">Contents (Proper Response): [/15] </label>
    <input required type="number" class="form-control" id="proper_rspns" name="proper_rspns" min=0 max=15>
  </div>
  <br>
  <button type="submit" class="btn btn-default" name="speaking">Submit</button>
</form>