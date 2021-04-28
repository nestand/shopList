<!DOCTYPE html>
<html>
	<head>
		<title>PDO test</title>
		<meta charset="UTF-8">
		<style>
            head, body{
                font-family: Arial, Helvetica, sans-serif;
                background: rgba(0, 128, 0, 0.2);
            }
            input[type=text] {
                width: 50%;
                height: 20px;
                padding: 12px 20px;
                box-sizing: content-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                resize: none;
            }
            select{
                width: 50%;
                height: 20px;
                padding: 12px 20px;
                box-sizing: content-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                resize:both;
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
    <h1>Liste des courses</h1>
	
    <!--
        <?php
        require_once('database.php');
        $data = database::getList();
        var_dump($data);
        ?> 
    
    
        <p> Trouvez votre "Magasin" et appuyez "Valider" pour le selectionner</p>
        <form method="post" action="">
            <input type="list" id="magasin" name="magasin" required /><br/>
            <button type="submit">Valider</button>
		</form>
	-->
    
    <h2>Votre magasin</h2>
    <form method ="post">
     
      <select name="magasin" id="magasin">
          <?php
          require_once('database.php');
          $data = database::chooseShop();
           foreach ($data as $row):
          ?>
            <option><?=$row["nom"]?></option>
          <?php endforeach ?>
         
           <form method="post" action="">
            <input type="text" id="nmagasin" name="nmagasin" value="Entrez ici un magasin à ajouter" required /><br/>
            <button type="submit">Valider</button>
           </form>
      
      </select>
      
    <h2>Vos produits</h2>
    
      <select name="produits" id="produits">
           <?php
           require_once('database.php');
           $data = database::getList();
            foreach ($data as $row): 
           ?>
             <option><?=$row["nom"]?></option>
           <?php endforeach ?>
      </select>
    
    <form method="post" action="">
            <input type="text" id="nproduit" name="nProduit" value="Entrez ici un produit à ajouter" required /><br/>
            <button type="submit">Valider</button>
    </form>

    <form>
    <input type="text" id="dproduit" name="dProduit" value="Entrez ici le produit à supprimer" required /><br/>
            <button type="submit">Valider</button>
    </form>

    </form>
    </body>

    
</html>