 
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>

<center>
<button class="button"><a href="fetcingf.php" target="_blank"><span>S&P 500 </span></a></button>
<button class="button"><a href="https://docs.google.com/spreadsheets/d/13wm6OJFcB45T7fK0Y-FdysOwQ2O15stSQOPK3_NQ9-Q/edit?usp=sharing" target="_blank"><span>Visualization</span></a></button>
</center>

</body>
</html>


