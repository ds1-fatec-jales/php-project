<!DOCTYPE html>
<header>
    <title>Form 5</title>
</header>
<html>
    <body>

            <form action="" method="POST">
                <div>
                <label for="date"><b>Enter a Date</b></label>
                <input type="text" placeholder="YYYY-MM-DD" name="date" onblur="mascaraData(this, mtel);" required>
                <button type="submit">Convert</button>
                </div>
            </form>

            <?php

                $date = $_POST ? $_POST['date'] : " ";
               
                $data= $date;
                $d=explode("-",$data);
                $data=$d[2]."-".$d[1]."-".$d[0];
                echo "<br><h3> $data</h3>";
               
 
            ?>
            <script>

                function mascaraData(o, f) {
                v_obj = o
                v_fun = f
                setTimeout("execmascara()", 1)
                }
                function execmascara() {
                v_obj.value = v_fun(v_obj.value)
                }
                function mtel(v) {
                v = v.replace(/\D/g, "");
                v = v.replace(/^(\d{4})(\d)/g, "$1-$2");
                v = v.replace(/(\d)(\d{2})$/, "$1-$2");
                return v;
                } 

            </script>
    </body>
</html>