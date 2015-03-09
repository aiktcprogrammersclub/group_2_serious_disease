<?php include 'layout.php'; include 'tValid.php';?>
<br>
<br>
<form method="post" name="tran" action="">
	<table style="width:60%; font-size:18px;" align="center">
		<tr style="color: rgb(102, 0, 0);">
              <td style="color: rgb(102,51,0); height: 22px; font-family: Times New Roman,Times,serif; font-weight: normal; color:green; text-align:right;" id="cell2"><big><big><b> Donation Amount:&nbsp; &nbsp;  <br><br>

               </td>
              <td style="vertical-align: top; height: 22px; width: 458px; font-family: Monotype Corsiva; color: black;"> <input name="dno" type="text"><br>

			   <?php echo $dnoE; ?>  </td>
            </tr>
		<tr style="color: rgb(102, 0, 0);">
              <td style="color: rgb(102,51,0); height: 22px; font-family: Times New Roman,Times,serif; font-weight: normal;text-align:right;" id="cell2"> Card Number:&nbsp; &nbsp;  <br>

               </td>
              <td style="vertical-align: top; height: 22px; width: 458px; font-family: Monotype Corsiva; color: black;"> <input name="cno" type="text"><br>

			   <?php echo $cnoE; ?>  </td>
            </tr>
            <tr style="color: rgb(102, 0, 0);">
              <td style="color: rgb(102,51,0); height: 22px; font-family: Times New Roman,Times,serif; font-weight: normal;text-align:right;" id="cell2"> Name on Card:&nbsp;&nbsp;&nbsp; <br>

               </td>
              <td style="vertical-align: top; width: 58px; height: 22px; font-family: Monotype Corsiva; color: black;">  <input name="cname" type="text"><br>

<?php echo $cnameE; ?>  </td>
            </tr>
            <tr style="color: rgb(102, 0, 0);">
              <td style="color: rgb(102,51,0); height: 22px; font-family: Times New Roman,Times,serif; font-weight: normal;text-align:right;" id="cell2"> CVC / CW:&nbsp; &nbsp;

               </td>
              <td style="vertical-align: top; width: 458px; height: 22px; font-family: Monotype Corsiva; color: black;"> <input size="1" name="cw" type="text"><br>

               <?php echo $cwE; ?>  </td>
            </tr>
            <tr style="color: rgb(102, 0, 0);">
            <td style="color: rgb(102,51,0); height: 22px; font-family: Times New Roman,Times,serif; font-weight: normal;text-align:right;" id="cell2"> Expiry Date:&nbsp; &nbsp;

               </td>
                <td style="vertical-align: top; width: 458px; height: 59px; font-family: Monotype Corsiva; color: black;"><br> <input size="1" placeholder="mm" name="m" type="text"> / <input size="2" placeholder="yyyy" name="y" type="text"> <br>

<?php echo $edE; ?>  </td>
</tr>

              <tr><td style="vertical-align: top; width: 415px; height: 478px; text-align: right;"><br><input name="reset" class="btnExample3" type="reset">&nbsp;
			  &nbsp; &nbsp;</td>
              <td style="vertical-align: top; width: 458px; height: 478px; text-align: left;"><br>&nbsp; &nbsp; &nbsp;<input value="Make Payment" name="pay" class="btnExample3" type="submit"></td>
            </tr>
          </tbody>
        </table>