<?php
	include 'layout.php';
	include 'rValid.php';
?>

<form method="post" action="" name="register">
<table style="text-align: left; width: 50%; height: 680px; margin-left: auto; margin-right: auto;" cellpadding="2" cellspacing="3">
          <tbody>
            <tr>
              <td><big style="font-size:18px; color:rgb(102,51,0);">Name:&nbsp; &nbsp;  <br>
               </td>
              <td style="vertical-align: top; height: 63px; width: 458px; font-family: Monotype Corsiva;"><big><input name="name"> *<br>
			  </big><font color="red"><?php echo $nameE; ?></font></td>
            </tr>
            <tr >
              <td ><big style="font-size:18px; color:rgb(102,51,0);"> Email Id:&nbsp;&nbsp;&nbsp; <br>
               </td>
              <td style="vertical-align: top; width: 458px; height: 61px; font-family: Monotype Corsiva;"><big><input name="email"></big> *<br>
<font color="red"><?php echo $emailE; ?></font></td>
            </tr><tr >
              <td ><big style="font-size:18px; color:rgb(102,51,0);"> User Name:&nbsp; &nbsp;  <br>
               </td>
              <td style="vertical-align: top; height: 54px; width: 458px; font-family: Monotype Corsiva;"><big><input name="uname"></big> *<br>
<font color="red"><?php echo $unameE; ?></font></td>
            </tr>
            <tr >
              <td ><big style="font-size:18px; color:rgb(102,51,0);"> Password:&nbsp; &nbsp;  <br>
               </td>
              <td style="vertical-align: top; width: 458px; height: 54px; font-family: Monotype Corsiva;"><big><input name="pw1" type="password"> *<br>
              </big><font color="red"><?php echo $pw1E; ?></font></td>
            </tr>
            <tr >
              <td ><big style="font-size:18px; color:rgb(102,51,0);"> Re-enter Password:&nbsp; &nbsp;  <br>
               </td>
              <td style="vertical-align: top; width: 458px; height: 61px; font-family: Monotype Corsiva;"><big><input name="pw2" type="password"></big><big>*</big><br>
<font color="red"><?php echo $pw2E; ?></font></td>
<tr >
              <td ><big style="font-size:18px; color:rgb(102,51,0);"> Country: &nbsp;&nbsp;  <br>
               </td>
              <td style="vertical-align: top; width: 458px; height: 40px; font-family: Monotype Corsiva;"><big><input name="country"></big></td>
            </tr>
            <tr >
              <td ><big style="font-size:18px; color:rgb(102,51,0);"> Mobile Number:</big>&nbsp;&nbsp;&nbsp;&nbsp; <br>
              </big></big></td>
              <td style="vertical-align: top; width: 458px; height: 52px; font-family: Monotype Corsiva;"><big><input name="mob"> *<br></big><font color="red"><?php echo $mobE; ?></font></td>
            </tr>
			</tr>
            <tr >
              <td ><big style="font-size:18px; color:rgb(102,51,0);"> Date Of Birth:&nbsp;&nbsp;&nbsp; </span> <br>
              </td>
              <td style="vertical-align: top; height: 42px; font-family: Monotype Corsiva;"><big><input name="dob" type="date"></big></td>
            </tr>
            <tr style="font-family: Monotype Corsiva; color: rgb(102, 0, 0); font-weight: bold;" align="center">
              <td colspan="2" rowspan="1" style="vertical-align: middle; width: 458px; height: 74px;"><big><input name="accept" type="checkbox"><big>I accept the terms &amp; conditions of this website *<br><font color="red"><?php echo $acceptE; ?></font>
              </big></big></td>
            </tr>
            <tr>
              <td style="vertical-align: top; width: 415px; height: 207px; text-align: right;"><input name="reset" class="btnExample3" type="reset"></td>
              <td style="vertical-align: top; width: 458px; height: 207px; text-align: left;"><input value="Register" name="register" class="btnExample3" type="submit"></td>
            </tr>
          </tbody>
        </table>
	</div></div>	<?php include 'footer.php';?>