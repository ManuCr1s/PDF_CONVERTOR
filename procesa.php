<?php
if(isset($_FILES['archivo'])) {
            move_uploaded_file(
                $_FILES['archivo']['tmp_name'],
                'uploads/' . $_FILES['archivo']['name']
            );
}
header('location:index.php');