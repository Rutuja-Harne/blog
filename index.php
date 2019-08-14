<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

textarea{
  width: -webkit-fill-available;
}
</style>
<body>
<h3>Blog</h3>

<div>
  <form name="form" id="form" action="process_form.php" method="post" enctype="multipart/form-data">

    <label for="fname">Title</label>
    <input type="text" id="title" name="title" value="What is SRP?">

    <label for="description">Description</label>
    <input type="text" id="description" name="description" value="SRP is a programming paradigm which advocates code writing as per responsibility.">

    <label for="author">Author</label>
    <input type="text" id="author" name="author" value="John Doe">

    <label for="time">Date</label>
    <input id="date" type="datetime-local" name="date" value="2018-01-08T10:00"> <br>

    <label for="tag">Tag</label>
    <input type="text" class="form-control" id="tags" name="tags" value="Development,Programming,principle" />

    <label for="author">Short Content</label>
    <textarea name="short-content" id="short-content">The single responsibility principle is a computer programming principle that states that every module, class, or function[1] should have responsibility over a single part of the functionality provided by the software, and that responsibility should be entirely encapsulated by the class. All its services should be narrowly aligned with that responsibility. Robert C. Martin expresses the principle as, 'A class should have only one reason to change,'[1] although, because of confusion around the word 'reason' he more recently stated 'This principle is about people.(Actor)''[2]</textarea>
    <br>
    <label for="author">Content</label>
    <textarea name="content" id="content"><img src="article-header.jpg" alt="article-header.jpg">History The term was introduced by Robert C. Martin in an article by the same name as part of his Principles of Object Oriented Design,[3] made popular by his book Agile Software Development, Principles, Patterns, and Practices.[4] Martin described it as being based on the principle of cohesion, as described by Tom DeMarco in his book Structured Analysis and System Specification,[5] and Meilir Page-Jones in The Practical Guide to Structured Systems Design.[6] In 2014 Martin wrote a blog post entitled The Single Responsibility Principle with a goal to clarify what was meant by the phrase 'reason for change.## Annotation Types</textarea>

    <input type="submit" id="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
<script>
var dateControl = document.querySelector('input[type="datetime-local"]');
dateControl.value = '2018-01-08T10:00';

    $(document).ready(function(){
        $("#submit").on('click', function(){
            $.ajax({
                url: 'process_form.php',
                type : "POST",
                dataType : 'json',
                data : $("#form").serialize(),
                success : function(result) {
                    console.log(result);
                }
            })
        });
    });

</script>
