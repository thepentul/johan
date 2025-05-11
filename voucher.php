                                                                        <?php
if (substr($validity, -1) == "d")
{
    $validity = "AKTIF " . substr($validity, 0, -1) . " HARI";
}
elseif (substr($validity, -1) == "h")
{
    $validity = "" . substr($validity, 0, -1) . "";
}
if ((substr($timelimit, -1) == "d") & (strlen($timelimit) > 3))
{
    $timelimit = "AKTIF " . (substr($timelimit, 0, -1) * 7 + substr($timelimit, 2, 1)) . " HARI";
}
elseif (substr($timelimit, -1) == "d")
{
    $timelimit = "AKTIF " . substr($timelimit, 0, -1) . " HARI";
}
elseif (substr($timelimit, -1) == "h")
{
    $timelimit = "AKTIF " . substr($timelimit, 0, -1) . " HARI";
}
elseif (substr($timelimit, -1) == "w")
{
    $timelimit = "AKTIF " . substr($timelimit, 0, -1) * 7 . " HARI";
}

// #00afef
// #720548
// #00a859
if ($getprice == "70000")
{
    $widi = "border:none; width: 350px; background: url('https://raw.githubusercontent.com/imsoftware-id/johan/refs/heads/main/70000.jpg') no-repeat; background-size:contain;";
    $color = "#720548";
}
elseif ($getprice == "20000")
{
    $widi = "border:none; width: 350px; background: url('https://raw.githubusercontent.com/imsoftware-id/johan/refs/heads/main/25000.jpg') no-repeat; background-size:contain;";
    $color = "#00a859";
}
elseif ($getprice == "4000")
{
    $widi = "border:none; width: 350px; background: url('https://raw.githubusercontent.com/imsoftware-id/johan/refs/heads/main/4000.jpg') no-repeat; background-size:contain;";
    $color = "#00afef";
}
else
{
    $widi = "border:none; width: 350px; height:200px; background: url('https://raw.githubusercontent.com/imsoftware-id/johan/refs/heads/main/4000.jpg') no-repeat; background-size:contain;";
}
?> <style>
  .qrcode {
    height: 85px;
    width: 85px;
  }
</style>
<tr>
  <td style="color:#666;border-collapse: collapse;" valign="top">
    <table class="voucher" style="border:none; width: 350px; background: 
      <?php echo $widi; ?> no-repeat; background-size:contain;">
      <tbody>
        <tr>
          <td style="width:118px" valign="top">
            <div style="clear:both;color:#666;margin-top:76px;margin-bottom:10px;"> <?php if ($v_opsi == "up")
{ ?> <?php
}
else
{ ?> <div style=" margin-left:190px; margin-top: 85px; font-weight:bold;font-size:15px;"> <?php echo $username; ?> </div> <?php
} ?> </div>
            <div style="padding-top: 5px; text-align:left;color:
              <?php echo $color; ?>;font-size:8px;font-weight:bold;margin:0px;padding-left: 45px;">
              <b></b>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </td>
</tr>                                                           