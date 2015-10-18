<?php
    $q = $_POST['q'];
    $sql = "SELECT sr.*,st.*,re.* FROM student_register sr 
            INNER JOIN students st ON sr.st_id=st.st_id
            INNER JOIN register re ON sr.re_id=re.re_id WHERE stu_id='$q' or firstname_jawi LIKE '%".$q."%' or firstname_rumi LIKE '%".$q."%' ";
    $query = mysqli_query($con, $sql);
?>
<div class="pull-right">
        <form class="navbar-form" role="search" action="?page=payment&&paymentpage=search" method="post">
            <div class="input-group">
                <input type="text" class="form-control" name="q" required>
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
            </div>
        </form>
</div>
<br>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <td align="center"><b>NO.POKOK</b></td>
      <td align="center"><b>NAMA-NASAB</b></td>
      <td align="center"><b>نام - نسب</b></td>
      <td align="center"><b>SEMESTER/TAHUN</b></td>
      <td align="center"><b>STATUS</b></td>
      <td align="center"><b>Hapus</b></td>
    </tr>
  </thead>
  <tbody>
<?php
    while($row = mysqli_fetch_array($query)){
        $id = $row['sr_id'];
        $student_id = str_replace("\'", "&#39;", $row["student_id"]);
        $name_r = str_replace("\'", "&#39;", $row["firstname_rumi"]);
        $lastname_r = str_replace("\'", "&#39;", $row["lastname_rumi"]);
        $name_j = str_replace("\'", "&#39;", $row["firstname_jawi"]);
        $lastname_j = str_replace("\'", "&#39;", $row["lastname_jawi"]);
        $term = $row['term_id'];
        $year = $row['academic_year'];
        $status = $row['pay_status'];
?>
    <tr>
      <td align="center"><a href="?page=payment&&paymentpage=yuranpay&&id=<?= $id ?>"><?= $student_id ?></a></td>
      <td align="left"><?= strtoupper($name_r) ?> - <?= strtoupper($lastname_r) ?></td>
      <td align="right"><?= $name_j ?> - <?= $lastname_j ?></td>
      <td align="center"><?= $term ?>/<?= $year ?></td>
<?php
    if($status=="Belum bayar"){
?>
      <td align="center"><font color="red"><b><?= $status ?></b></font></td>
<?php 
    }else{
?>
      <td align="center"><font color="green"><b><a href="?page=payment&&paymentpage=editpayyuran&&id=<?= $id ?>"><?= $status ?></a></b></font></td>
<?php
    }
?>
      <td align="center"><a href="?page=payment&&paymentpage=deleteyuran&&id=<?= $id ?>" onclick="return confirm('Anda yakin untuk hapus data ini ?')"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
<?php 
    } 
?>
</table>