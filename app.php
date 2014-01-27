<?php include('header.php')


?>


<?php require_once('../libs/auth.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">




            <div class="container">
                <br><br>


                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

                    <div class="alert alert-info">

                        <strong><i class="icon-user icon-large"></i>&nbsp;Administrador de Palabras NO DESEADAS</strong>
                    </div>

                    <div class="alert alert-success">
                        Palabras en ChupaTalk
                    </div>

                    <thead>
                        <tr>
                            <th>Palabra</th>
                            <th>Significado</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $query = mysql_query("select * from chupatable ORDER BY palabra ASC") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                            $id = $row['idPalabra'];
                            ?>
                            <tr class="del<?php echo $id ?>">
                                <td><?php echo $row['palabra']; ?></td> 
                                <td><?php echo $row['significado']; ?></td>
                                <td width="80">
                                    <a class="btn btn-danger" id="<?php echo $id; ?>">Eliminar</a>
                                </td>
                            </tr>


                        <?php } ?>

                    </tbody>
                </table>



            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready( function() {

	
	
            $('.btn-danger').click( function() {
		
                var id = $(this).attr("id");
         
                if(confirm("Are you sure you want to delete this Member?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_member.php",
                        data: ({id: id}),
                        cache: true,
                        success: function(html){
                            $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return true;}
            });				
        });
    </script>




</body>
</html>


