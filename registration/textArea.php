<html>
<body>
   <form action="textArea.php" method="get">
      <textarea name="text" rows="5" cols="40"></textarea>
      <input type="submit" value="Submit!" />
    </form>
</body>
</html>

<?php
   print "Tavo tekstas: <br/><b>" . $_GET ['text'] . "</b>";
?>