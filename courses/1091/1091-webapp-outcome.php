<div class="container-fluid bg-2 text-center">
    <h3>106-1 網頁系統開發作品集 </h3><br>
    <?php
    $row = 1;
    if (($handle = fopen("data.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($row % 4 == 1) {
                if ($row != 1) {
    ?>
</div>
<?php
                }
                echo "<div class=\"row\">";
            }
?>

<div class="col-lg-3 col-md-3">
    <?php
            $num = count($data);
            $row++;
            //                        for ($c=0; $c < $num; $c++) {
            //                            echo $data[$c] . "<br />\n";
            //                        }
            $url = "http://120.108.117.245/~" . $data[0];
            $flag = @fopen($url, 'r');
            if ($flag) {
                echo "<div class=\"panel panel-primary\"  style=\"box-shadow: 2px 2px 5px #000000;\">";
            } else {
                echo "<div class=\"panel panel-danger\"  style=\"box-shadow: 2px 2px 5px #00ff00; color: #000000;\">";
            }
    ?>
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-3">
                <?php if ($flag) {
                    echo "<i class=\"fa fa-paw fa-4x\" aria-hidden=\"true\"></i>";
                } else {
                    echo "<i class=\"fa fa-user-secret fa-4x\" aria-hidden=\"true\"></i>";
                } ?>

            </div>
            <div class="col-xs-9 text-right">
                <h3 style="color: <?php if ($flag) {
                                        echo "rgb(255, 255, 255);";
                                    } else {
                                        echo "rgb(255, 28, 28); text-shadow: 2px 2px 3px #ffffff;";
                                    } ?> margin-top: 3px;"><?php echo $data[1]; ?></h3>
                <h4>(<?php echo $data[0]; ?>)</h4>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <span class="pull-left">(學習成果)</span>
        <div class="clearfix text-right">
            <a href="http://120.108.117.245/~<?php echo $data[0]; ?>">
                <i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
</div>
<?php
        }
        fclose($handle);
    }
?>