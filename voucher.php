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

if ($getprice == "70000")
{
    $widi = "border:none; background: url('https://raw.githubusercontent.com/thepentul/johan/refs/heads/main/70000.jpg') no-repeat; background-size:contain;";
    $color = "#720548";
}
elseif ($getprice == "25000")
{
    $widi = "border:none; background: url('https://raw.githubusercontent.com/thepentul/johan/refs/heads/main/25000.jpg') no-repeat; background-size:contain;";
    $color = "#00a859";
}
elseif ($getprice == "4000")
{
    $widi = "border:none; background: url('https://raw.githubusercontent.com/thepentul/johan/refs/heads/main/4000.jpg') no-repeat; background-size:contain;";
    $color = "#00afef";
}
else
{
    $widi = "border:none; height:200px; background: url('https://raw.githubusercontent.com/thepentul/johan/refs/heads/main/70000.jpg') no-repeat; background-size:contain;";
}
?> 
    <style>
        body {
            color: #000000 !important;
            background-color: #FFFFFF !important;
            font-size: 14px !important;
            font-family: 'Helvetica', arial, sans-serif !important;
            margin: 0px !important;
            -webkit-print-color-adjust: exact !important;
        }
        table.voucher {
            display: inline-block !important;
            border: none; !important;
            margin-bottom: -25px !important;
        }
        @page {
            size: auto;
            margin-left: 7mm;
            margin-right: 3mm;
            margin-top: 9mm;
            margin-bottom: 3mm;
        }
        @media print {
            table { page-break-after:auto !important; }
            tr { page-break-inside:avoid !important; page-break-after:auto !important; }
            td { page-break-inside:avoid !important; page-break-after:auto !important; }
            thead { display:table-header-group !important; }
            tfoot { display:table-footer-group !important; }
        }
        #num {
            float:right !important;
            display:inline-block !important;
        }
        .qrc {
            width:30px !important;
            height:30px !important;
            margin-top:1px !important;
        }
        tr.voucher-row {
            line-height: 0 !important;
        }
        tr.voucher-row td {
            padding: 0 !important;
        }
    </style>
<tr class="voucher-row">
  <td style="color:#666;border-collapse: collapse;" valign="top">
    <table class="voucher" style="border:none; background: 
      <?php echo $widi; ?> no-repeat; background-size:contain;">
      <tbody>
        <tr>
          <td style="width:118px" valign="top">
            <div style="clear:both;color:#666;margin-top:76px;margin-bottom:10px;"> <?php if ($v_opsi == "up")
{ ?> <?php
}
else
{ ?> 
<div style="position: relative;">
  <div style="position: absolute; left: 55px; top: -50px; font-weight:bold; font-size:10px;"> <?php echo $username; ?> </div> 
</div>
  <?php
} ?> </div>
            <div>
              <b></b>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </td>
</tr>                   