<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Indonesian Calculator</title>
<link rel="shortcut icon" type="image/x-icon" href="calculator.ico" />

<script type="text/javascript">
function empty() {
    var x;
    x = document.getElementById("kalimat").value;
    if (x == "") {
        alert("Masukkan kalimat yang benar!");
        return false;
    };
}
</script>
</head>
<body>
  <div style="background-color:green;color:white;width:100%;">
    <h1>Indonesian Calculator</h1>
  </div>


Masukkan Kalimat Perhitungan
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="text" name="kalimat" id="kalimat"> <br>
<input type="submit" name="submit" value="Submit" onClick="return empty()" />

</select>
</form>
</body>
</html>


<?php
$sentence = "";
if(isset($_POST['kalimat']))
{
  if($_POST['kalimat'] = "")
  {
    echo "Masukkan kalimat perhitungan yang benar";
  }
  else
  {
    $sentence = $_POST['kalimat'];

    echo "Input: ".$sentence."<br>";

    $words = explode(' ' , $sentence);

    $count=count($words);

    $x = 0;

    //echo "Jumlah huruf adalah ".$count."<br><br>";

    //echo "Terdiri dari:<br>";
    foreach($words as $eachword)
    {
        //echo $eachword."<br>";
        $a[$x] = $eachword;
        $x++;
    }

    echo "<br>";
    //echo "Dimasukkan ke dalam array<br>";
    /* foreach($a as $lista)
    {
      echo $lista."<br>";
    } */

    $countarray = count($a);

    //echo "Total isi array: ".$countarray."<br>";
    $calcsentence = "";

    for($i = 0; $i < $countarray; $i++)
    {
      //$symbol = retrieveSymbol($a[$i]);
      /*
      else if($a[$i] == "belas")
      {
        $calcsentence = $calcsentence - $a[$i-1];
        $symbol  =
      }*/
      if($a[$i] == 'belas')
      {
        //echo "string sebelumnya: ".$a[$i-1];
        $calcsentence = rtrim($calcsentence, retrieveSymbol($a[$i-1]));
        $symbol = retrieveSymbol("satu") . retrieveSymbol($a[$i-1]);
      }
      else
      {
        $symbol = retrieveSymbol($a[$i]);
      }

      $calcsentence = $calcsentence.$symbol;
      //echo $calcsentence."<br>";

    }

    eval( '$rescount = (' . $calcsentence . ');' );

    //echo "Hasil perhitungan: ".$rescount."<br><br>";
    $result = "";


    echo "Output: ";
    if($rescount > 20)
    {
      echo "Hasil melebihi batas maksimum (lebih besar dari 20)";
    }
    else
    {
      $result = retrieveWord($rescount);
      foreach($a as $lista)
      {
        echo $lista." ";
      }
      echo "adalah ".$result;
    }
  }
}


function retrieveSymbol($word)
{
  if($word == "nol")
  {
    $symbol = "0";
  }
  else if($word == "satu")
  {
    $symbol = "1";
  }
  else if($word == "dua")
  {
    $symbol = "2";
  }
  else if($word == "tiga")
  {
    $symbol = "3";
  }
  else if($word == "empat")
  {
    $symbol = "4";
  }
  else if($word == "lima")
  {
    $symbol = "5";
  }
  else if($word == "enam")
  {
    $symbol = "6";
  }
  else if($word == "tujuh")
  {
    $symbol = "7";
  }
  else if($word == "delapan")
  {
    $symbol = "8";
  }
  else if($word == "sembilan")
  {
    $symbol = "9";
  }
  else if($word == "sepuluh")
  {
    $symbol = "10";
  }
  else if($word == "tambah")
  {
    $symbol = "+";
  }
  else if($word == "kurang")
  {
    $symbol = "+";
  }
  else if($word == "kali")
  {
    $symbol = "*";
  }
  return $symbol;
}

function retrieveWord($symbol)
{
  if($symbol == "0")
  {
    $word = "nol";
  }
  else if($symbol == "1")
  {
    $word = "satu";
  }
  else if($symbol == "2")
  {
    $word = "dua";
  }
  else if($symbol == "3")
  {
    $word = "tiga";
  }
  else if($symbol == "4")
  {
    $word = "empat";
  }
  else if($symbol == "5")
  {
    $word = "lima";
  }
  else if($symbol == "6")
  {
    $word = "enam";
  }
  else if($symbol == "7")
  {
    $word = "tujuh";
  }
  else if($symbol == "8")
  {
    $word = "delapan";
  }
  else if($symbol == "9")
  {
    $word = "sembilan";
  }
  else if($symbol == "10")
  {
    $word = "sepuluh";
  }
  else if($symbol == "11")
  {
    $word = "sebelas";
  }
  else if($symbol == "12")
  {
    $word = "dua belas";
  }
  else if($symbol == "13")
  {
    $word = "tiga belas";
  }
  else if($symbol == "14")
  {
    $word = "empat belas";
  }
  else if($symbol == "15")
  {
    $word = "lima belas";
  }
  else if($symbol == "16")
  {
    $word = "enam belas";
  }
  else if($symbol == "17")
  {
    $word = "tujuh belas";
  }
  else if($symbol == "18")
  {
    $word = "delapan belas";
  }
  else if($symbol == "19")
  {
    $word = "sembilan belas";
  }
  else if($symbol == "20")
  {
    $word = "dua puluh";
  }
  return $word;
}

?>
