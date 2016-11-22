<table border='1'>
  <tr>
    <th rowspan="2">INPUT</th>
    <th colspan="5">OUTPUT</th>
  </tr>
  <tr>
    <th>A</th>
    <th>E</th>
    <th>I</th>
    <th>U</th>
    <th>O</th>
  </tr>
  <tr>
    <td>
     <?php 
      $n1="SITI KHOIRUN NISA";
      echo $n1;
     ?>
    </td>
    <td>
     <?php 
      $iniA = substr_count($n1,"A");
	  echo $iniA;
     ?>
    </td>
<td>
     <?php 
      $iniE = substr_count($n1,"E");
	  echo $iniE;
     ?>
    </td>
    <td>
     <?php 
      $iniI = substr_count($n1,"I");
	  echo $iniI;
     ?>
    </td>
    <td>
     <?php 
       $iniU = substr_count($n1,"U");
	  echo $iniU;
     ?>
    </td>
    <td>
     <?php 
      $iniO = substr_count($n1,"O");
	  echo $iniO;
     ?>
    </td>
  </tr>
</table>
