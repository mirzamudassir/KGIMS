<?php

$var= "Catagory Added";

?>
<script>
var php_var = <?php echo json_encode($var); ?>;
document.write(php_var);
</script>