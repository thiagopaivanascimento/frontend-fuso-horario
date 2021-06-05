<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

/* 
    Created on : 01/06/2016
    Author     : Thiago
*/

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>::Fuso Horário::</title>
        <link href="css/estilo.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    
    <script type="text/javascript">
     
        $(document).ready(function(){
            $('#form').submit(function(){
                $.ajax({
                    url: 'fusoHorario.php',
                    type: 'GET',
                    data: $('#form').serialize(),
                    success: function(data) {
                    $('#resultado').html(data);
                }  
              });
                return false;
            });
        });
     
    </script>
    </head>
    <body>
        
        <div id="corpo-pagina">
            <h4>FUSO HORÁRIO </h4>
            <div id="time">
               <script type="text/javascript" src="js/funcaoTime.js"></script> 
            </div>
            <br />
            <form action="" method="GET" id="form">
                <label>Escolha a cidade</label>    
                <br /><br />
                <!--<input type="text" size="30" name="txtCidade" value="1">-->
                <select id="txtCidade" name="txtCidade">
                    <option value="0"></option>
                    <option value="1">Brasília</option>
                    <option value="2">Tóquio</option>
                    <option value="3">Londres</option>
                    <option value="4">Roma</option>
                    <option value="5">Chicago</option>
                    <option value="6">Nova Yorque</option>
                    <option value="7">Hong Kong</option>
                    <option value="8">Joanesburgo</option>
                    <option value="9">Sydney</option>
                    <option value="10">Lisboa</option>
                    <option value="11">Berlim</option>
                    <option value="12">Paris</option>
                    <option value="13">Moscou</option>
                    <option value="14">Buenos Aires</option>
                    <option value="15">Montividéu</option>
                </select>
                <br /><br />
                <input type="submit" id="enviar" value="Enviar">
                <br /><br />
            </form>
            <div id="resultado"></div>
        </div>   
    </body>
</html>
