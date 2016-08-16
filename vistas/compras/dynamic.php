<?php
function load_country()
{
    $connect = mysqli_connect("localhost", "root", "", "style");
    $output = '';
    $sql = "SELECT * FROM municipios";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $output .= '<option value="'.$row["id_municipio"].'">'.$row["descripcion_municipios"].'</option>';
    }
    return $output;
}
?>
<html>
<head>
    <title>Webslesson Tutorial</title>
    <script src="jquery.js"></script>
</head>
<body>
<p>Select Country
    <select name="id_municipio" id="id_municipio">
        <option value="">Select Country</option>
        <?php echo load_country(); ?>
    </select></p>
<p>Select State
        <select name="id_ciudad" id="id_ciudad">
            <option value="">Selecciona una Ciudad</option>
        </select></p>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#id_municipio').change(function(){
            var municipio_id = $(this).val();
            $.ajax({
                url:"fetch_municipio.php",
                method:"POST",
                data:{municipioId:municipio_id},
                dataType:"text",
                success:function(data)
                {
                    $('#id_ciudad').html(data);
                }
            });
        });
    });
</script>