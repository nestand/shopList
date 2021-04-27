<!DOCTYPE html>
<html>
	<head>
		<title>Envoie un mail</title>
		<meta charset="UTF-8">
		<style>
            head, body{
                font-family: Arial, Helvetica, sans-serif;
                background: rgba(0, 128, 0, 0.2);
            }
            input[type=text] {
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                resize: none;
            }
            button{
                background-color: white;
                color: black;
                border: 2px solid #4CAF50;
                margin-top:10px;
                padding: 12px 20px;
                border-radius: 4px;
                background-color: #f8f8f8; /* Green */
            }
            button{
                transition-duration: 0.4s;
            }
            button:hover {
                background-color: #4CAF50; /* Green */
                color: white;
            }
            </style>
	</head>
	<body>
	<?php
        require_once('database.php');
        $list= database::getList();
        var_dump($list);
    ?>
		<h1>Liste des courses</h1>
        <p>Click "Valider" pour afficher votre liste</p>
        <form method="post" action="">
            <input type="text" id="liste" name="liste" required /><br/>
            <button type="submit">Valider</button>
		</form>
	</body>
</html>