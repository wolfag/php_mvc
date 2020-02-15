<div>
<?php

while ($row=mysqli_fetch_array($data['students'])) {
    echo "{$row['name']} | {$row['birthday']} <br>";
}
?>
</div>